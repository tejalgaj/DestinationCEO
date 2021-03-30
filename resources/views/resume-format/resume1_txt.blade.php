<?php

$file = $user->name.".txt";
$txt = fopen($file, "w") or die("Unable to open file!");


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
<div id="container_header">
<div id="left_header">
<p>'.$user->details->address.'</p>
<p>
'.$user->details->city.' , '.$user->details->state.' , '.$user->details->zipcode.'
</p>
</div>';
$namevalue = ucfirst($user->details->firstname).' '.ucfirst($user->details->lastname);
$htmlcontent .= '<div id="center_header">
<span>'.$namevalue.'</span> 
</div>
<div id="right_header">
<p>'.$user->details->phone.'</p>
<p>'.$user->details->email.'</p>';
if (!is_null($user->details->github))
 $htmlcontent .='<p>'.$user->details->github.'</p>';
if (!is_null($user->details->linkedin))
$htmlcontent .='<p>'.$user->details->linkedin.'</p>
</div>
</div>
<div class="resume-right">
<div class="heading">
EMPLOYMENT
</div>';
foreach($user->experiences as $work)
{
$htmlcontent .='<div class="container">
<div class="left_content_section">'.$work->job_title.'</div> 
<div class="right_content_section">';
$workstartdate = $work->startdate;
$newworkstartdate = date("F Y", strtotime($workstartdate));
$newworkenddate = '';
if(!is_null($work->enddate))
{
$workenddate = $work->enddate;
$newworkenddate = date("F Y", strtotime($workenddate));
}
if (($work->currently_working == 'yes'))
$worddaywords =  'Present';
else
$worddaywords = $newworkenddate;
$htmlcontent .=$newworkstartdate.' - '.$worddaywords.'</div>
<div class="centre_content_section">'.$work->employer.'</div>
</div>
<p>'.$work->address.' , '.$work->city.' '.$work->state.' '.$work->zipcode.'</p>
<div class="experience_content">
<p>'.$work->work_responsibilities.'</p>
</div>';
}
$htmlcontent .='<div class="heading">
Education
</div>';
foreach($user->education as $education)
{
$htmlcontent .='<div class="container">
<div class="left_content_section">'.$education->city.' '.$education->state.' '.$education->country.'</div> 
<div class="right_content_section">';
$education_enddate = $education->enddate;
$new_education_enddate = date("F Y", strtotime($education_enddate));
if (($education->graduated == "still_enrolled"))
$htmlcontent .='Present - '.$new_education_enddate;
else
$htmlcontent .=$new_education_enddate;
$htmlcontent .='</div>
<div class="centre_content_section">'.$education->schoolname.'</div>
</div>
<div class="display-content-text">
<p>'.$education->degree.' in '.$education->fieldofstudy.'.';
if (!is_null($education->GPA))
$htmlcontent .='Cumulative GPA: '.$education->GPA;
$htmlcontent .='</p>
<p>';
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
$htmlcontent .='</p>
</div>';
}
if(count($user->technicalExperience)>0)
$htmlcontent .='<div class="heading">
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
$htmlcontent .='</ul>';
if(count($user->additionalExperience)>0)
{
$htmlcontent .='<div class="heading">
ADDITIONAL Experience
</div>
<ul>';
foreach ($user->additionalExperience as $additional_experience)
$htmlcontent .='<li>'.$additional_experience->role.': '.$additional_experience->responsibilities.'</li>
</ul>';
}
$htmlcontent .='<div class="heading">
Languages and Technologies
</div>
<div class="display-content-text">';
foreach($user->skills as $skill)
$htmlcontent .='<p>'.ucfirst($skill->skill_title).' : '.ucfirst($skill->value);
if (!is_null($skill->description))
$htmlcontent .='('.$skill->description.')';
$htmlcontent .='</p>
</div>
</div>
</div>
</body>
</html>';

// $htmlcontent = '<p>'.$user->details->address.'</p>
// <p>'.$user->details->city.' , '.$user->details->state.' , '.$user->details->zipcode.'</p>';

// $namevalue = ucfirst($user->details->firstname).' '.ucfirst($user->details->lastname);
// $htmlcontent .='
// <p>'.$namevalue.'</p>
// <p>'.$user->details->phone.'</p>
// <p>'.$user->details->email.'</p>';

// if (!is_null($user->details->github))
// $htmlcontent .='
// <p>'.$user->details->github.'</p>';


//           if (!is_null($user->details->linkedin))
// $htmlcontent .='
// <p>'.$user->details->linkedin.'</p>


// <p>EMPLOYMENT</p>


// ';
// foreach($user->experiences as $work)
// {
//     $workstartdate = $work->startdate;
//             $newworkstartdate = date("F Y", strtotime($workstartdate));
//             $newworkenddate = '';
//             if(!is_null($work->enddate))
//             {
//                 $workenddate = $work->enddate;
//             $newworkenddate = date("F Y", strtotime($workenddate));
//             }
//             if (($work->currently_working == 'yes'))
//            $worddaywords =  'Present';
//         else
//         $worddaywords = $newworkenddate;
        
//     $htmlcontent .='
//     <p>'.$work->job_title.'</p>
//     <p>'.$newworkstartdate.' - '.$worddaywords.'</p>
//     <p>'.$work->employer.'</p>
//     <p>'.$work->address.' , '.$work->city.' '.$work->state.' '.$work->zipcode.'</p>
//     <p>'.$work->work_responsibilities.'</p>';       
// }

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