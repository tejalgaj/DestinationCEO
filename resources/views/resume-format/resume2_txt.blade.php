<?php

$file = $user->name.'_'.time().".txt";
$txt = fopen($file, "w") or die("Unable to open file!");

$namevalue = ucfirst($user->details->firstname).' '.ucfirst($user->details->lastname);
$htmlcontent = '<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>:: Resume ::</title>
</head>
<body>
<div class="resume-box">
<div class="applicant-name">
<h2>'.$namevalue.'</h2>
</div>
<div class="detail-box">
<p>'.$user->details->phone.'</p>
<p>'.$user->details->email.'</p>
<div class="details"><p>'.$user->details->address.'</p>
<p>
'.$user->details->city.' , '.$user->details->state.' , '.$user->details->zipcode.'
</p>
</div>';
if (!is_null($user->details->linkedin))
$htmlcontent .='<p>'.$user->details->linkedin.'</p>';
if (!is_null($user->details->github))
 $htmlcontent .='<p>'.$user->details->github.'</p>';
 $htmlcontent .='</div>
<div class="resume-right">
<div class="sub-heading">
<div class="heading">
OBJECTIVE : <p>'.$user->highlight->objective.'</p>
</div>
<h4>HIGHLIGHTS OF QUALIFICATIONS</h4>
<ul>';
            foreach($user->education as $education){
                 $highlight_education_enddate = $education->enddate;
                    $new_highlight_education_enddate = date("F Y", strtotime($highlight_education_enddate));
                    if (($education->graduated == 'still_enrolled'))
$htmlcontent .='
<li>Recent graduate of the '.$education->fieldofstudy.' '.$education->degree .' program at '.$education->schoolname .' ('.$new_highlight_education_enddate.')</li>';
                    
            }

            if(count($user->highlight->hard_skills)>0)
            {
                foreach ($user->highlight->hard_skills as $key=>$value)
                {
$htmlcontent .='
<li>'.$value.'</li>';
                }
                    
            }
            if(count($user->highlight->soft_skills)>0)
            {
                foreach ($user->highlight->soft_skills as $key=>$value)
                {
$htmlcontent .='
<li>'.$value.'</li>';
                }
                    
            }
               
           
           
$htmlcontent .='<li>
Languages: '.$user->highlight->communication_language.'</li>     
</ul>
</div>
<div class="sub-heading skill_div">
<div class="heading">
TECHNICAL SKILLS
</div>
<ul>';
            foreach($user->skills as $skill)
            {
$htmlcontent .='
<li><span>'.$skill->skill_title.' : </span>'.$skill->value.'</li>';
            }
$htmlcontent .='</ul>
</div>
<div class="sub-heading">
<div class="heading">
Relevant Experience
</div>';
        foreach($user->experiences as $work){
$htmlcontent .='<div class="col-3-sec">
<div class="left_content_section">'.$work->job_title .'</div> 
<div class="right_content_section">';
                     
                        $workstartdate = $work->startdate;
                        $newworkstartdate = date("F Y", strtotime($workstartdate));
                        $newworkenddate = '';
                            if(!is_null($work->enddate))
                                {
                                    $workenddate = $work->enddate;
                                    $newworkenddate = date("F Y", strtotime($workenddate));
                                }
                     
$htmlcontent .=$newworkstartdate.' – ';
               if (($work->currently_working == 'yes'))
$htmlcontent .='Present';
                else
$htmlcontent .=$newworkenddate;
               
$htmlcontent .='</div>
<div class="centre_content_section">'.$work->employer.','.$work->address.' , '.$work->city.' '.$work->state.' '.$work->country.'</div>
</div>
<div class="experience_content">
<p>'.$work->work_responsibilities.'</p>
</div>';
        
        }
$htmlcontent .='</div>
<div class="sub-heading">
<div class="heading">
Education
</div>';

            foreach($user->education as $education){
$htmlcontent .='<div class="col-2-sec">
<div class="left_section_col_2">'.$education->fieldofstudy.', '.$education->degree.'<br>
<span>'.$education->schoolname.' '.$education->city.' '.$education->state.' '.$education->country.'</span></div> 
<div class="right_section_col_2">';
$education_enddate = $education->enddate;
$new_education_enddate = date("F Y", strtotime($education_enddate));
if (($education->graduated == "still_enrolled"))
$htmlcontent .='Present - '.$new_education_enddate;
else
$htmlcontent .=$new_education_enddate;
$htmlcontent .='</div>
</div>
<div class="display-content-text">';
                    if (!is_null($education->GPA))
$htmlcontent .='<p>Cumulative GPA: '.$education->GPA.';</p><p>';
                        if(count($education->awards)>0)
{
$htmlcontent .='<span>Awards:</span>';
        foreach ($education->awards as $key=>$value)
$htmlcontent .=$value.';';
}
$htmlcontent .='</p>
<p>';
if(count($education->relevant_courses)>0)
{
$htmlcontent .='Relevant Courses:';
foreach ($education->relevant_courses as $key=>$value)
$htmlcontent .=$value.';';
}
$htmlcontent .='</p>
<p>';
if(count($education->extra_activity)>0)
{
$htmlcontent .='<span>Extra Activity:</span>';
foreach ($education->extra_activity as $key=>$value)
$htmlcontent .=$value;
}
$htmlcontent .='</p></div>';
}
$htmlcontent .='</div>';
        if(count($user->technicalExperience)>0)
        {
$htmlcontent .='<div class="sub-heading">
<div class="heading">
TECHNICAL Experience
</div>
<h4>Projects</h4>
<ul>';
                foreach ($user->technicalExperience as $technical_experience)
            {
$htmlcontent .='<li>'.$technical_experience->project_title;
if (!is_null($technical_experience->project_year))
$htmlcontent .='('.$technical_experience->project_year.')';
$htmlcontent .=': '.$technical_experience->project_description.' ('.$technical_experience->technology_stack.')
</li>'; 
            }
                                                      
                
$htmlcontent .='</ul>
</div>';
        }
        
        
        if(count($user->additionalExperience)>0){
$htmlcontent .='<div class="sub-heading">
<div class="heading">
Other Experience
</div>';
            foreach ($user->additionalExperience as $additional_experience){
$htmlcontent .='<div class="col-2-sec">
<div class="left_section_col_2">'.$additional_experience->role.','.$additional_experience->employer.'<br>
<span>'.$additional_experience->city.','.$additional_experience->state.','.$additional_experience->country.'</span></div> 
<div class="right_section_col_2">';
                   
                    $additional_experience_startdate = $additional_experience->startdate;
                    $new_additioanl_experience_startdate = date("F Y", strtotime($additional_experience_startdate));
                    $new_additioanl_experience_enddate = '';
                    if(!is_null($additional_experience->enddate))
                    {
                        $new_additioanl_experience_enddate = $additional_experience->enddate;
                    $new_additioanl_experience_enddate = date("F Y", strtotime($new_additioanl_experience_enddate));
                    }
                    
$htmlcontent .=$new_additioanl_experience_startdate.' – ';
                    if (($additional_experience->currently_working == 'yes'))
$htmlcontent .='Present';
                else
$htmlcontent .=$new_additioanl_experience_enddate;
$htmlcontent .='</div>
</div>
<div class="display-content-text">';
$htmlcontent .= $additional_experience->responsibilities;
$htmlcontent .='</div>';
}
$htmlcontent .='</div>';
}
$htmlcontent .='</div>
</div>
</body>
</html>';


//die($htmlcontent);
$expected_output = strip_tags($htmlcontent,'<br>');

fwrite($txt, $expected_output);
fclose($txt);
if (file_exists($file)) {
header('Content-Description: File Transfer');
header('Content-Disposition: attachment; filename='.basename($file));
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));
header("Content-Type: text/plain");
readfile($file);
unlink($file);
exit;
}
?>