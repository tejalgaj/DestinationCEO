<?php
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=".$user->name.".doc");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=Windows-1252">

<title>Resume</title>
<style>
    body{
        padding:0px;
        margin:0px;
       
    }
    *
    {
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -ms-box-sizing: border-box
    }
    .resume-box {
        width:100%;
        margin:0 auto;
        font-family: 'Times New Roman', Times, serif;
        font-size: 18px;
       
    }
    .resume-left {
        width:30%;
        float: right;
        background:#f4f5f4;
    }
    .applicant-name {
        background: #65c897;
        padding: 15px;
        color:#ffffff;
        line-height: normal;
        text-align: center;
    }
    .applicant-name h2 {
        margin: 0px;
        font-size: 28px;
    }
    .applicant-name span {
        font-size:18px;
    }
    .resume-right {
        width:100%;
        float: left;
        padding:20px;
    }
    .applicant-profile {
	padding: 15px;
}

.applicant-profile ul {
	padding: 0;
	list-style: none;
	margin: 0;
}
.applicant-profile ul li {
	margin-bottom: 15px;
}
.applicant-profile ul li span {
	float: left;
	margin-right: 10px;
}
.left-info-box {
    border-top: 1px solid #dddddd;
    padding: 15px;
}
.left-info-box h3 {
	text-transform: uppercase;
	margin: 0;
    font-weight: 700;
    font-size: 18px;
    margin-bottom: 10px;
	color: #222222;
}
.left-info-box h4,
.resume-right h4 {
	text-transform: uppercase;
	margin: 10px 0px;
    font-weight:600;
    font-size: 20px;
	color: #222222;
    font-family: 'Times New Roman', Times, serif;
}
.heading {
	font-size: 20px;
	/* border-bottom: 1px solid #000; */
	padding-bottom: 10px;
	margin-bottom: 10px;
	text-transform: uppercase;
	font-weight: 700;
	color: #222222;
}
.resume-right ul {
	padding-left: 12px;
    margin-bottom: 20px;
}
.resume-right ul li {
	margin-bottom: 10px;
}
/*-------------custom css--------------*/
.left_content_section
{font-size:20px;
    float:left;width:30%;
    text-align: left;
    padding:5px 0px;
    font-weight: bold;
    text-transform: uppercase;
}
.centre_content_section
{
    font-size:20px;
    padding:5px 0px;
    margin:0 auto;width:30%;
    text-align: center;
    font-weight: bold;
    text-transform: uppercase;
}
.conatiner
{width:100%;
    font-weight: 700;

}
.right_content_section
{
    font-size:20px;
    float:right;width:30%;
    text-align: right;
    padding:5px 0px;
    font-weight: bold;
    text-transform: uppercase;
}

.display-content-text
{
    padding-bottom: 10px;
}
.display-content-text p,#container_header p,.resume-right p{
    margin: 10px 0;
    padding:10px 0px;
}
.experience_content
{
    padding-left: 15px;
}

#container_header {
    width:100%;
        padding: 10px;
        line-height: normal;
        text-align: center;
       
}
#left_header {
    float:left;
    width:100px;
    text-align:left;
    
}

#center_header {
    display: inline-block;
    margin:0 auto;
    width:100px;
    font-size: 34px;
    text-align:center;
    font-weight: bold;
    
}

#right_header {
    float:right;
    width:100px;
    text-align:right;
   
}
</style>

</head>

<body>
    <div class="resume-box">
        <div id="container_header">
            <div id="left_header">
              <p>
                {{$user->details->address}}
              </p>
              <p>
                {{$user->details->city}}, {{$user->details->state}}, {{$user->details->zipcode}}
              </p>
            </div>
            <div id="center_header">
              <span>{{ucfirst($user->details->firstname)}} {{ucfirst($user->details->lastname)}}</span>
              
            </div>
            <div id="right_header">
              <p>{{$user->details->phone}}</p>
              <p>{{$user->details->email}}</p>
              @if (!is_null($user->details->github))
              <p>{{$user->details->github}}</p>
             @endif
    
              @if (!is_null($user->details->linkedin))
              <p>{{$user->details->linkedin}}</p>
              @endif
            </div>
          </div>
        <div class="resume-right">
            <div class="heading">
                EMPLOYMENT
            </div>
            @foreach($user->experiences as $work)
            <div class="container">
            <div class="left_content_section">{{$work->job_title }}</div> 
             <div class="right_content_section">
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
            </div>
             <div class="centre_content_section">{{$work->employer }}</div>
            </div>
            <p>{{$work->address }}, {{$work->city }} {{$work->state }} {{$work->zipcode }}</p>
            <div class="experience_content">
                {!! $work->work_responsibilities; !!}
           
            </div>
        @endforeach
            <div class="heading">
                Education
            </div>
            @foreach($user->education as $education)
            <div class="container">
            <div class="left_content_section">{{$education->city }} {{$education->state }} {{$education->country }}</div> 
             <div class="right_content_section">
                <?php $education_enddate = $education->enddate;
                $new_education_enddate = date("F Y", strtotime($education_enddate));?>
                @if (($education->graduated == 'still_enrolled'))
                Present - {{$new_education_enddate }}
                @else
                {{$new_education_enddate }}
                @endif
                </div>
             <div class="centre_content_section">{{$education->schoolname }}</div>
            </div>
            <div class="display-content-text">
            <p>{{$education->degree }} in {{$education->fieldofstudy }}.
                @if (!is_null($education->GPA))
                    Cumulative GPA: {{$education->GPA}};
                @endif
            </p>
            <p>
             @if(count($education->awards)>0)
            <span>Awards:</span>
            @foreach ($education->awards as $key=>$value)
            {{$value}};
            @endforeach
            @endif
            </p>
            <p>
                @if(count($education->relevant_courses)>0)
                Relevant Courses:
                @foreach ($education->relevant_courses as $key=>$value)
                {{$value}};
                @endforeach
                @endif   
            </p>
            <p>
                @if(count($education->extra_activity)>0)
                <span>Extra Activity:</span>
                @foreach ($education->extra_activity as $key=>$value)
                {{$value}};
                @endforeach
                @endif
            </p>
            </div>
            @endforeach
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
                ADDITIONAL Experience
            </div>
           
            <ul>
                @foreach ($user->additionalExperience as $additional_experience)
                <li>{{$additional_experience->role}}: {!! $additional_experience->responsibilities!!}</li>
                @endforeach
            </ul>
            @endif
            <div class="heading">
                Languages and Technologies
            </div>
            <div class="display-content-text">
                @foreach($user->skills as $skill)
                <p>{{ucfirst($skill->skill_title)}}: {{ucfirst($skill->value)}}@if (!is_null($skill->description))({{$skill->description}}) @endif</p>
                @endforeach
            
        </div>
          
        </div>
        
    
    </div>
</body></html>
