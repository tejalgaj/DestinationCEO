<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;


use PhpOffice\PhpWord\Element\Field;
use PhpOffice\PhpWord\Element\Table;
use PhpOffice\PhpWord\Element\TextRun;
use PhpOffice\PhpWord\SimpleType\TblWidth;
use PhpOffice\PhpWord\Shared\Html;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Element\ListItemRun;




class ResumeController extends Controller
{
    //
    public function index()
    {
        //
        $user = auth()->user();
        $selected_template = session('resume_selected_template', 'default');
        if($selected_template == "Resume Template 2")
        {
            return view('resume2',compact('user'));
        }else{
            return view('resume',compact('user'));
        }
        
    }

    public function download()
    {
        //
        $user = auth()->user();
        $selected_template = session('resume_selected_template', 'default');
        if($selected_template == "Resume Template 2")
        {
            $pdf = \PDF::loadView('resume2',compact('user'));
        }else{
            $pdf = \PDF::loadView('resume',compact('user'));
        }
        //$pdf = \PDF::loadView('resume', compact('user'));
        return $pdf->download('your_resume.pdf');
    }

    public function directwordExport()
    {
        $user = auth()->user();
        return view('resume1_word',compact('user'));
       
    }

    public function convertWordToPDF()
    {
            /* Set the PDF Engine Renderer Path */
        $domPdfPath = base_path('vendor/dompdf/dompdf');
        \PhpOffice\PhpWord\Settings::setPdfRendererPath($domPdfPath);
        \PhpOffice\PhpWord\Settings::setPdfRendererName('DomPDF');
         
        //Load word file
        $Content = \PhpOffice\PhpWord\IOFactory::load(public_path()."/resume_template/Standard Resume template.docx"); 
 
        //Save it into PDF
        $PDFWriter = \PhpOffice\PhpWord\IOFactory::createWriter($Content,'PDF');
        $PDFWriter->save(public_path()."/resume_template/Resume_Example_2pg.pdf"); 
        echo 'File has been successfully converted';
    }

    public function wordExport()
    {
        
        $selected_template = session('resume_selected_template', 'default');
        if($selected_template == "Resume Template 2")
        {
            $templateProcessor = new TemplateProcessor('word_template/resume_format2.docx');
        }else{
            $templateProcessor = new TemplateProcessor('word_template/resume_format1.docx');
        }
        
        $user = auth()->user();

        //name
        $templateProcessor->setValue('user_name', ucfirst($user->details->firstname).' '.ucfirst($user->details->lastname));

        $address_section = new TextRun();
        if(!is_null($user->details->address))
        {
            $address_section->addText($user->details->address,array('size' => 10));
            
            
        }
        $templateProcessor->setComplexValue('user_address', $address_section);



        $city_state_section = new TextRun();
        if(!is_null($user->details->city) || !is_null($user->details->state) || !is_null($user->details->zipcode))
        {
          
            $city_state_section->addText($user->details->city.' '.$user->details->state.' '.$user->details->zipcode);
            
            
        }
        $templateProcessor->setComplexValue('user_city_state_zip', $city_state_section);
        
        

        // if(!is_null($user->details->linkedin)) {
        //     $templateProcessor->replaceBlock('user_linkedin',$user->details->linkedin );
        // } else {
        //     $templateProcessor->deleteBlock('user_linkedin');
        // }



        $templateProcessor->setValue('user_phone', $user->details->phone);
        $templateProcessor->setValue('user_email', $user->details->email);


        $user_github = new TextRun();
        if(!is_null($user->details->github))
        {
          
            $user_github->addText($user->details->github,array('size' => 10));
            
            
        }
        $templateProcessor->setComplexValue('user_git_block', $user_github);

        $user_linkedin = new TextRun();
        if(!is_null($user->details->linkedin))
        {
          
            $user_linkedin->addText($user->details->linkedin,array('size' => 10));
            
            
        }
        $templateProcessor->setComplexValue('user_linkedin', $user_linkedin);

            //Experience segment
            $experience_count = (!empty($user->experiences)?$user->experiences->count():0);
            if($experience_count != 0)
            {
                $templateProcessor->cloneBlock('experience_block', $experience_count, true, true);
                $exp_count = 1;
            foreach($user->experiences as $work)
            {   
                $experience_employer = $work->employer;
                $experience_location = $work->address.' '.$work->city.' '.$work->state.' '.$work->zipcode;

                $experience_startdate = $work->startdate;
																	$newworkstartdate = date("F Y", strtotime($experience_startdate));
																	$newworkenddate = '';
																	if(!is_null($work->enddate))
																	{
																		$workenddate = $work->enddate;
																	$newworkenddate = date("F Y", strtotime($workenddate));
																	}
															
																	if (($work->currently_working == 'yes'))
                                                                    {
                                                                        $experience_timeline = 	'Present - '.$newworkstartdate;
                                                                    }else
                                                                    {
                                                                        $experience_timeline = $newworkenddate;
                                                                    }
																
																
                $templateProcessor->setValue("experience_position#".$exp_count, $work->job_title);
                $templateProcessor->setValue("experience_employer#".$exp_count, $experience_employer);
                $templateProcessor->setValue("experience_location#".$exp_count, $experience_location);
                $templateProcessor->setValue("experience_timeline#".$exp_count, $experience_timeline);
            

                //$exp_description = new TextRun();
                //$experience_text = htmlentities($work->work_responsibilities);
                // create temporary section
                if(!is_null($work->work_responsibilities))
                {
                   // $phpWord->setDefaultFontSize(12);
                  // $fontStyle = new \PhpOffice\PhpWord\Style\Font();
   
   // $fontStyle->setSize(12);
                    $section = (new PhpWord())->addSection();
                   
                    // add html
                    Html::addHtml($section, $work->work_responsibilities, false, false);
                   
                    // get elements in section
                    $containers = $section->getElements();
                   // dd($containers);
                   // $section->setFontStyle($fontStyle);
                    
                    $templateProcessor->cloneBlock('work_responsibility_block#'.$exp_count, count($containers), true, true);
                    
                    // replace the variables with the elements
                    for($i = 0; $i < count($containers); $i++) {
                    
                       
                        // be aware of using setComplexBlock
                        // and the $i+1 as the cloned elements start with #1
                        $templateProcessor->setComplexBlock('task#'.$exp_count.'#' . ($i+1), $containers[$i]);
                    }
                }else{
                    $templateProcessor->deleteBlock('work_responsibility_block#'.$exp_count);
                }



               
                //$exp_description->addText($experience_text .'<w:br/>',array('size' => 10));
                

                //$templateProcessor->setComplexValue("experience_description#".$exp_count, $exp_description);

                $exp_count++;
            }	    

                //$templateProcessor->cloneBlock('technical_experience_block', 0, true, false, $technical_experience_array);
            }else{
                $templateProcessor->deleteBlock('experience_block');
            }


            //Education segment
            $education_count = (!empty($user->education)?$user->education->count():0);
            if($education_count != 0)
            {
                $templateProcessor->cloneBlock('education_block', $education_count, true, true);
                $edu_count = 1;
             foreach($user->education as $education)
             {   
                 $education_location = $education->city.' '.$education->state.' '.$education->country;

                  $education_enddate = $education->enddate;
                 $new_education_enddate = date("F Y", strtotime($education_enddate));
                 if (($education->graduated == 'still_enrolled'))
                 $education_timeline = 'Present - '.$new_education_enddate;
                 else
                 $education_timeline = $new_education_enddate;
                
                $templateProcessor->setValue("education_location#".$edu_count, $education_location);
                $templateProcessor->setValue("education_institute_name#".$edu_count, $education->schoolname);
                $templateProcessor->setValue("education_timeli#".$edu_count, $education_timeline);

                $education_major_text = "";
                if($selected_template == "Resume Template 2")
                {
                    $education_major_text =  $education->degree.','.$education->fieldofstudy;
                }else{
                    $education_major_text =  $education->degree.' in '.$education->fieldofstudy.'.';
                }
                
                $templateProcessor->setValue("education_major#".$edu_count, $education_major_text);


                $edu_description = new TextRun();

                $gpa_text = '';
                if (!is_null($education->GPA))
                {
                    $gpa_text .='Cumulative GPA: '.$education->GPA;
                    $edu_description->addText($gpa_text .'<w:br/>',array('size' => 10));
                }
                
               

                
                

                if(count($education->awards)>0)
                {
                    
                    $award_text = "";
                    foreach ($education->awards as $key=>$value)
                    {
                        $award_text .= $value.';';
                    }
                    $edu_description->addText('Awards: '.$award_text.'<w:br/>',array('size' => 10));
                    
                }


                if(count($education->relevant_courses)>0)
                {
                    $edu_description->addTextBreak();
                    $relevant_course_text = "";
                    foreach ($education->relevant_courses as $key=>$value)
                    {
                        $relevant_course_text .= $value.';';
                    }
                    $edu_description->addText('Relevant Courses: '.$relevant_course_text.'<w:br/>',array('size' => 10));
                    
                }
                
                if(count($education->extra_activity)>0)
                {
                    $edu_description->addTextBreak();
                    $extra_activity_text = "";
                    foreach ($education->extra_activity as $key=>$value)
                    {
                        $extra_activity_text .= $value.';';
                    }
                    $edu_description->addText('Extra Activity: '.$extra_activity_text.'<w:br/>',array('size' => 10));
                }
                

                $templateProcessor->setComplexValue("education_description#".$edu_count, $edu_description);

                

                $edu_count++;
            }	    
           
                //$templateProcessor->cloneBlock('technical_experience_block', 0, true, false, $technical_experience_array);
            }else{
                $templateProcessor->deleteBlock('education_block');
            }






        //Technical experience segment
        $technical_experience_count = (!empty($user->technicalExperience)?$user->technicalExperience->count():0);
        if($technical_experience_count != 0)
        {
        foreach($user->technicalExperience as $technical_experience)
        {   $project_title_text = "";
            $project_title_text .= $technical_experience->project_title;
             if(!is_null($technical_experience->project_year)) { $project_title_text .=' ( '.$technical_experience->project_year.' ) ';};
             
            $technical_experience_array[] = array('project_title' => $project_title_text, 'project_description' =>  $technical_experience->project_description, 'technology_stack' =>  $technical_experience->technology_stack);
        }	
                        
            
            $templateProcessor->cloneBlock('technical_experience_block', 0, true, false, $technical_experience_array);
        }else{
            $templateProcessor->deleteBlock('technical_experience_block');
        }





        //additional experience segment
        $additional_experience_count = (!empty($user->additionalExperience)?$user->additionalExperience->count():0);
        if($additional_experience_count != 0)
        {
            if($selected_template == "Resume Template 2")
                {
                   
                        $templateProcessor->cloneBlock('additional_experience_block', $additional_experience_count, true, true);
                        $add_exp_count = 1;
                    foreach($user->additionalExperience as $additional_experience)
                    {   
                        $add_experience_employer = $additional_experience->employer;
                        $add_experience_location = $additional_experience->address.' '.$additional_experience->city.' '.$additional_experience->state.' '.$additional_experience->zipcode;
        
                        $experience_startdate = $additional_experience->startdate;
                                                                            $newworkstartdate = date("F Y", strtotime($experience_startdate));
                                                                            $newworkenddate = '';
                                                                            if(!is_null($additional_experience->enddate))
                                                                            {
                                                                                $workenddate = $additional_experience->enddate;
                                                                            $newworkenddate = date("F Y", strtotime($workenddate));
                                                                            }
                                                                    
                                                                            if (($additional_experience->currently_working == 'yes'))
                                                                            {
                                                                                $experience_timeline = 	'Present - '.$newworkstartdate;
                                                                            }else
                                                                            {
                                                                                $experience_timeline = $newworkenddate;
                                                                            }
                                                                        
                                                                        
                        $templateProcessor->setValue("role#".$add_exp_count, $additional_experience->role);
                        $templateProcessor->setValue("additional_employer#".$add_exp_count, $add_experience_employer);
                        $templateProcessor->setValue("additional_location#".$add_exp_count, $add_experience_location);
                        $templateProcessor->setValue("additional_timeline#".$add_exp_count, $experience_timeline);
                    
        
                        $add_exp_description = new TextRun();
                        $experience_text = htmlentities($additional_experience->responsibilities);
                       $experience_text = htmlentities("dfgdfgdfgdfgdfg");
                        $add_exp_description->addText('sdfsdfsdfsdfsdfsdf' .'<w:br/>',array('size' => 10, 'name' => 'Arial'));
                        
        
                        $templateProcessor->setComplexValue("responsibilities#".$add_exp_count, $add_exp_description);
        
                        
        
                        $add_exp_count++;
                    
                }    
                }
                else
                {
                    foreach($user->additionalExperience as $additional_experience)
                    {
                        
                     $additional_experience_array[] = array('role' => $additional_experience->role, 'responsibilities' =>  "asasdadasd");
                    }	
                    $templateProcessor->cloneBlock('additional_experience_block', 0, true, false, $additional_experience_array);
                }
           
           
        }else{
            $templateProcessor->deleteBlock('additional_experience_block');
        }


//         $additional_experience_segment->addText('Basic simple bulleted list.');
// $additional_experience_segment->addListItem('List Item 1');
// $additional_experience_segment->addListItem('List Item 2');
// $additional_experience_segment->addListItem('List Item 3');
// $additional_experience_segment->addTextBreak(2);


        //skill segment
        $skill_count = (!empty($user->skills)?$user->skills->count():0);
       // $skill_count = 0;

        if($skill_count != 0)
        {
           foreach($user->skills as $skill)
           {
            $skill_array[] = array('skill_title' => $skill->skill_title, 'skill_value' => $skill->value);
           }						
            
            $templateProcessor->cloneBlock('skill_block', 0, true, false, $skill_array);
        }else{
            $templateProcessor->deleteBlock('skill_block');
        }


        

        $fileName = $user->name;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);

       
    }
}
