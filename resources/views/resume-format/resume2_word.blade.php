<?php
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=".$user->name.'_'.time().".doc");
?>
<!DOCTYPE html>

<html lang="en">

<!--[if IE 7]><html lang="en" class="ie7"><![endif]-->

<!--[if IE 8]><html lang="en" class="ie8"><![endif]-->

<!--[if IE 9]><html lang="en" class="ie9"><![endif]-->

<!--[if (gt IE 9)|!(IE)]><html lang="en"><![endif]-->

<!--[if !IE]><html lang="en-US"><![endif]-->

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Resume</title>
<style>
    @page{
  size: letter portrait;
  margin: 0;
  padding: 0;
}

:root{
  --page-width:100%;
  --main-width:100%;
  --decorator-horizontal-margin: 0.2in;

  --sidebar-horizontal-padding: 0.2in;

  /* XXX: using px for very good precision control */
  --decorator-outer-offset-top: 10px;
  --decorator-outer-offset-left: -5.5px;
  --decorator-border-width: 1px;
  --decorator-outer-dim: 9px;
  --decorator-border: 1px solid #ccc;

  --row-blocks-padding-top: 5pt;
  --date-block-width: 0.6in;

  --main-blocks-title-icon-offset-left: -19pt;
}

body{
    width: var(--page-width);
  margin: 0;
  font-family: 'Arial', sans-serif;
font-size: px18;
color: #000;
  line-height: 1.3;
  color: #444;
  hyphens: auto;
}
    *
    {
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -ms-box-sizing: border-box
    }
    .resume-box {
        font-family: 'Arial', sans-serif;
	font-size: 20px;
	color: #000;
	padding: 15px;
}
   
   
.heading {
	font-size: 20px;
	/* border-top: 1px solid #65c897;
	border-bottom: 3px solid #65c897; */
	padding: 5px 0;
	text-transform: uppercase;
	font-weight: 700;
	color: #000;
    margin:10px 0px;
    text-decoration: underline;
}
.resume-right ul {
	padding: 0 0 0 10px;
    margin: 10px;
    
}
.resume-right ul li {
	margin-bottom: 10px;
}
/*----------------------custom css----------------------------*/
.detail-box {
	/*overflow: hidden;*/
}

.detail-box  .details {
	text-align: center;
	padding: 10px;
	font-size: 11px;
	font-weight: normal;
	width: 20%;
	float: left;
}

.floatWrap { width: 100%; }
.details-col-20 {
    text-align: center;
  float: left;
  box-sizing: border-box;
  width: 20%;
  padding: 10px 5px;
 
}
.details-col-25 {
    text-align: center;
  float: left;
  box-sizing: border-box;
  width: 25%;
  padding: 10px 5px;
 
}
.details-col-33 {
    text-align: center;
  float: left;
  box-sizing: border-box;
  width: 33%;
  padding: 10px 5px;
 
}
/* (B) CLEARFIX - FLOATWRAP TO "MAINTAIN" 100% WIDTH */
.floatWrap { overflow: auto; }
.floatWrap::after {
  content: "";
  clear: both;
  display: table;
}

     
    
ul, ol {
    padding:0;
    margin-top: 0px;
    margin-bottom: 5px;
    list-style: none;
}
ul li, ol li {
    padding:0;
    margin-bottom: 5px;
}
ul li span, ol li span {
	padding: 0;
	font-weight: 700;
	width: 200px;
	display: inline-block;
}
.relavant-experience-box .topbar ul {
	display:inline-block;
}
.relavant-experience-box .topbar li {
	width: 33.33%;
	float: left;
	font-size: 20px;
	font-weight: 700;
}
.relavant-experience-box .topbar li:nth-child(1) {

}
.relavant-experience-box .topbar li:nth-child(2) {
    text-align: center;
}
.relavant-experience-box .topbar li:nth-child(3) {
    text-align: right;
}
h4 {
    margin-top: 0px;
    margin-bottom:5px;
    font-family: 'Arial', sans-serif;

}
.education-row {
	position: relative;
}
.education-year {
	position: absolute;
	right: 0;
	top: 0;
	font-weight: 700;
}
.education-row {
	position: relative;
	margin-bottom: 20px;
}
.applicant-name h2 {
	margin: 0;
    text-align: center;
    font-size: 24px;
    font-family: 'Arial', sans-serif;
}
.display-content-text p{
    margin: 0;
    padding:2px 0px;
}
</style>

</head>

<body>
<div class="resume-box">
    <div class="applicant-name">
        <h2>{{ucfirst($user->details->firstname)}} {{ucfirst($user->details->lastname)}}</h2>
    </div>
    <div class="floatWrap">
        <div class="{{$temp2_classname}}">{{$user->details->email}}</div>
        
        @if (!is_null($user->details->linkedin))
        <div class="{{$temp2_classname}}">{{$user->details->linkedin}}</div>
        @endif

        <div class="{{$temp2_classname}}">{{$user->details->address}},<br> {{$user->details->city}}, {{$user->details->state}}, {{$user->details->zipcode}}</div>
        @if (!is_null($user->details->github))
        <div class="{{$temp2_classname}}">{{$user->details->github}}</div>
        @endif
        <div class="{{$temp2_classname}}">{{$user->details->phone}}</div>
        
      </div>
      <div class="heading">
        OBJECTIVE : {{$user->highlight->objective}}
    </div>
    <h4>HIGHLIGHTS OF QUALIFICATIONS </h4>
    <ul style="list-style: disc;">
        @foreach($user->education as $education)
                    <?php $highlight_education_enddate = $education->enddate;
                        $new_highlight_education_enddate = date("F Y", strtotime($highlight_education_enddate));?>
                @if (($education->graduated == 'still_enrolled'))
                    <li>Recent graduate of the {{$education->fieldofstudy }} {{$education->degree }} program at {{$education->schoolname }} ({{$new_highlight_education_enddate}})</li>
                @endif
        @endforeach
        
        
        @if(count($user->highlight->hard_skills)>0)
                @foreach ($user->highlight->hard_skills as $key=>$value)
                        <li>{{$value}}</li>
                @endforeach
        @endif
        @if(count($user->highlight->soft_skills)>0)
                @foreach ($user->highlight->soft_skills as $key=>$value)
                    <li>{{$value}}</li>
                @endforeach
        @endif
        <li>Languages: {{$user->highlight->communication_language}}</li>
        
    </ul>

    <div class="heading">
        TECHNICAL SKILLS
    </div>
    
    <ul>
        @foreach($user->skills as $skill)
                <li><span>{{$skill->skill_title}} : </span>{{$skill->value}}</li>
        @endforeach
        
    </ul>
    <div class="heading">
        Relevant Experience
    </div>
    @foreach($user->experiences as $work)
    <div class="relavant-experience-box">
        <ul class="topbar">
            <li>{{$work->job_title }}</li>
            <li>
                {{$work->employer.', ' }}
                @if ($work->city!="")
            {{$work->city.', ' }}
            @endif
            @if ($work->state!="")
            {{$work->state.', ' }}
            @endif
                {{$work->country }}
            </li>
            <li>
                <?php 
                            $workstartdate = $work->startdate;
                            $newworkstartdate = date("F Y", strtotime($workstartdate));
                            $newworkenddate = '';
                                if(!is_null($work->enddate))
                                    {
                                        $workenddate = $work->enddate;
                                        $newworkenddate = date("F Y", strtotime($workenddate));
                                    }
                        ?> 
                        {{$newworkstartdate}} – 
                @if (($work->currently_working == 'yes'))
                        Present
                    @else
                        {{$newworkenddate}}
                    @endif
            </li>
        </ul>
        {!! $work->work_responsibilities; !!}
    </div>
    @endforeach
    <div class="heading">
        Education
    </div>
    <div class="education-box">
        @foreach($user->education as $education)
        <div class="education-row">
            <h4>{{$education->fieldofstudy }}, {{$education->degree }}</h4>
            <span>
                {{$education->schoolname.', ' }} 
                @if ($education->city!="")
                {{$education->city.', ' }}
                @endif
                @if ($education->state!="")
                {{$education->state.', ' }}
                @endif
                {{$education->country }}
            </span>
            <div class="education-year">
                <?php $education_enddate = $education->enddate;
                $new_education_enddate = date("F Y", strtotime($education_enddate));?>
                @if (($education->graduated == 'still_enrolled'))
                Present - {{$new_education_enddate }}
                @else
                {{$new_education_enddate }}
                @endif
            </div>
            <div class="display-content-text">
                    @if (!is_null($education->GPA))
                    <p>Cumulative GPA: {{$education->GPA}};</p>
                    @endif
                    @if(count($education->awards)>0)
                    <p>           
                        <span>Awards:</span>
                        @foreach ($education->awards as $key=>$value)
                        {{$value}};
                        @endforeach
                    </p>
                    @endif
                    @if(count($education->relevant_courses)>0)
                    <p> 
                                Relevant Courses:
                                @foreach ($education->relevant_courses as $key=>$value)
                                {{$value}};
                                @endforeach
                    </p> 
                    @endif

                    @if(count($education->extra_activity)>0)
                    <p> 
                                <span>Extra Activity:</span>
                                @foreach ($education->extra_activity as $key=>$value)
                                {{$value}};
                                @endforeach
                    </p> 
                    @endif
                </div>
        </div>
        @endforeach
        
    </div>

    @if(count($user->technicalExperience)>0)
        
            <div class="heading">
                TECHNICAL Experience
            </div>
            <h4>Projects</h4>
            <ul>
                @foreach ($user->technicalExperience as $technical_experience)
                <li>{{$technical_experience->project_title}} 
					@if (!is_null($technical_experience->project_year))
					    ({{$technical_experience->project_year}})
					@endif : {{$technical_experience->project_description}} ({{$technical_experience->technology_stack}})
                </li>                                        
                @endforeach
            </ul>
        
        @endif
        @if(count($user->additionalExperience)>0)
        <div class="heading">
            Other Experience
        </div>
        <div class="education-box">
            @foreach ($user->additionalExperience as $additional_experience)
            <div class="education-row">
                <h4>{{$additional_experience->role}},{{$additional_experience->employer}}</h4>
                <span>
                    @if (!is_null($additional_experience->city))
                    {{$additional_experience->city.' ,' }}
                    @endif
                    @if (!is_null($additional_experience->state))
                    {{$additional_experience->state.' ,' }}
                    @endif
                    {{$additional_experience->country }}
                </span>
                <div class="education-year">
                    <?php 
                    $additional_experience_startdate = $additional_experience->startdate;
                    $new_additioanl_experience_startdate = date("F Y", strtotime($additional_experience_startdate));
                    $new_additioanl_experience_enddate = '';
                    if(!is_null($additional_experience->enddate))
                    {
                        $new_additioanl_experience_enddate = $additional_experience->enddate;
                    $new_additioanl_experience_enddate = date("F Y", strtotime($new_additioanl_experience_enddate));
                    }
                    ?>
                    {{$new_additioanl_experience_startdate}} – 
                    @if (($additional_experience->currently_working == 'yes'))
                    Present
                @else
                {{$new_additioanl_experience_enddate}}
                @endif
                </div>
                <div class="display-content-text">
                    {!! $additional_experience->responsibilities!!}
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</body></html>