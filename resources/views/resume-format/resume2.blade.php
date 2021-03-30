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
    body{
        padding:0px;
        margin:0px;
        font-family: arial;
    }
    *
    {
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -ms-box-sizing: border-box
    }
    .add_responsibility p {
    margin: 0;
    padding: 0;
    
}
.whatever { page-break-after: always; }
</style>
<style type="text/css" media="print">
	body {
		background-color:#FFF;
		border-width:0 0 0 0;
		margin:0;
		width:100%
		}
</style>
</head>

<body>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
    <td align="center" valign="top" style="background-color: #ffffff;" bgcolor="#ffffff;">
        <table width="100%" cellpadding="0" cellspacing="0" border="0">
            
            <!--  Repeated Row End -->
            <tr>
                <td align="left" valign="top" style="padding:10px 0px;">
                    <table width="100%" cellspacing="0" cellpadding="0" border="0">


                        <!--  Repeated Row Start -->
                        <tr>
                            <td align="left" valign="top" style="padding:5px;">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        
                                        <td align="center" valign="top" style="text-align:center;font-size:42px; font-weight: bold;  line-height: normal;">
                                            {{ucfirst($user->details->firstname)}} {{ucfirst($user->details->lastname)}}
                                        </td>
                                     
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <!--  Repeated Row End -->


                        <!--  Repeated Row Start -->
                        <tr>
                            <td>
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                       
                                        <td align="center" width="20%" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px;">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    
                                                    <td align="center" valign="top" style="line-height: 24px; padding-left: 15px;font-size: 14px;">{{$user->details->address}}</td>
                                                </tr>
                                                <tr>
                                                                
                                                    <td align="center" valign="top" style="line-height: 24px; padding-left: 15px;font-size: 14px;">{{$user->details->city}}, {{$user->details->state}}, {{$user->details->zipcode}}</td>
                                                </tr>
                                                
                                               
                                               
                                            </table>
                                        </td>
                                        <td align="center" width="20%" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px;">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                              
                                               
                                                <tr>
                                                    
                                                    <td align="center" valign="top" style="line-height: 24px; padding-left: 15px;font-size: 14px;">{{$user->details->phone}}</td>
                                                </tr>
                                               
                                            </table>
                                        </td>
                                        <td align="center" width="20%" valign="top" style=" font-weight:normal; line-height:28px;font-size: 14px;">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                              
                                               
                                                <tr>
                                                    
                                                    <td align="center" valign="top" style="line-height: 24px; padding-left: 15px;font-size: 14px;">{{$user->details->email}}</td>
                                                </tr>
                                                
                                            </table>
                                        </td>
                                        @if (!is_null($user->details->linkedin))
                                        <td align="center" width="20%" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px;">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                              
                                               
                                                <tr>
                                                    
                                                    <td align="center" valign="top" style="line-height: 24px; padding-left: 15px;font-size: 14px;">{{$user->details->linkedin}}</td>
                                                </tr>
                                                
                                            </table>
                                        </td>
                                        @endif
                                        @if (!is_null($user->details->guthub))
                                        <td align="center" width="20%" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px;">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                              
                                               
                                                <tr>
                                                  
                                                    <td align="center" valign="top" style="line-height: 24px; padding-left: 15px;font-size: 14px;">{{$user->details->guthub}}</td>
                                                </tr>
                                                
                                            </table>
                                        </td>
                                                                    @endif
                                        
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        
                        <!--  Repeated Row End -->
                         <!--  Repeated Row Start -->
                         <tr>
                            <td align="left" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px; padding-top:20px;">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:18px; text-transform: uppercase; border-top: 1px solid #65c897; border-bottom:3px solid #65c897; padding:10px 0px 5px 0px;">OBJECTIVE : {{$user->highlight->objective}}</td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:14px; text-transform: uppercase; padding-top:10px;">HIGHLIGHTS OF QUALIFICATIONS – 7 Bullets</td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top" style="padding:5px 0px; line-height:18px; font-weight:normal; font-size:14px; padding-top: 10px;">
                                            <ul style="padding: 0 0 0 10px; margin: 10px;">

                                                @foreach($user->education as $education)
                                                <?php $highlight_education_enddate = $education->enddate;
                                                $new_highlight_education_enddate = date("F Y", strtotime($highlight_education_enddate));?>
                                                @if (($education->graduated == 'still_enrolled'))
                                                <li style="margin-bottom: 10px;">Recent graduate of the {{$education->fieldofstudy }} {{$education->degree }} program at {{$education->schoolname }} ({{$new_highlight_education_enddate}})</li>
                                                @endif
                                                @endforeach
                                            
                                            
                                            
                                            @if(count($user->highlight->hard_skills)>0)
                                                @foreach ($user->highlight->hard_skills as $key=>$value)
                                                <li style="margin-bottom: 10px;">{{$value}}</li>
                                                @endforeach
                                            @endif
                                            @if(count($user->highlight->soft_skills)>0)
                                                @foreach ($user->highlight->soft_skills as $key=>$value)
                                                <li style="margin-bottom: 10px;">{{$value}}</li>
                                                @endforeach
                                            @endif
                                            <li style="margin-bottom: 10px;">Languages: {{$user->highlight->communication_language}}</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    
                                    
                                </table>
                            </td>
                        </tr>
                        <!--  Repeated Row End -->
                         <!--  Repeated Row Start -->
                         <tr>
                            <td align="left" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px; padding-top:20px;">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:18px; text-transform: uppercase; border-top: 1px solid #65c897; border-bottom:3px solid #65c897; padding:10px 0px 5px 0px;">TECHNICAL SKILLS</td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top" style="padding:5px 0px; line-height:18px; font-weight:normal; font-size:14px; padding-top: 10px;">
                                            <ul style="padding: 0 0 0 0px; margin: 0;">
                                                @foreach($user->skills as $skill)
                                                <li style="margin-bottom:10px; list-style: none;"><span style="width:200px; font-weight: bold; display: inline-block;">{{$skill->skill_title}} : </span>{{$skill->value}}</li>
                                                @endforeach
                                                
                                            </ul>
                                        </td>
                                    </tr>
                                    
                                    
                                </table>
                            </td>
                        </tr>
                        <!--  Repeated Row End -->
                        <!--  Repeated Row Start -->
                        <tr>
                            <td align="left" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px; padding-top:20px;">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:18px; text-transform: uppercase; border-top: 1px solid #65c897; border-bottom:3px solid #65c897; padding:10px 0px 5px 0px;">Relevant Experience:</td>
                                    </tr>
                                    @foreach($user->experiences as $work)
                                    <tr>
                                        <td align="left" valign="top" style="font-size: 14px; font-weight:bold; line-height:28px;">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td align="left" width="33%" valign="top" style="padding:5px 0px; line-height:18px; font-weight:bold; font-size:14px; padding-top: 10px;">{{$work->job_title }}</td>
                                                    <td align="center" width="30%" valign="top" style="padding:5px 0px; line-height:18px; font-weight:bold; font-size:14px; padding-top: 10px;">{{$work->employer }},{{$work->address }}, {{$work->city }} {{$work->state }} {{$work->zipcode }}</td>
                                                    <td align="right" width="30%" valign="top" style="padding:5px 0px; line-height:18px; font-weight:bold; font-size:14px; padding-top: 10px;">
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
                                                </td>
                                                </tr>
                                                </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top" style="padding:5px 0px; line-height:18px; font-weight:normal; font-size:14px; padding-top: 10px;" class="add_responsibility">
                                            {!! $work->work_responsibilities; !!}
                                        </td>
                                    </tr>
                                    @endforeach
                                   
                                    
                                </table>
                            </td>
                        </tr>
                        <!--  Repeated Row End -->
                         <!--  Repeated Row Start -->
                         <tr>
                            <td align="left" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px; padding-top:20px;">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td colspan="2" align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:18px; text-transform: uppercase; border-top: 1px solid #65c897; border-bottom:3px solid #65c897; padding:10px 0px 5px 0px;">Education</td>
                                    </tr>

                                    @foreach($user->education as $education)


                                    <tr>
                                    <td align="left" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px;">
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                            <tr>
                                                <td align="left" width="50%" valign="top" style="padding:10px 0px 5px 0px; line-height:24px; font-weight:bold; font-size:14px; ">
                                                    {{$education->fieldofstudy }}, {{$education->degree }} <br>
                                                    <span style="font-weight: normal; font-size: 14px;">{{$education->schoolname }} {{$education->city }} {{$education->state }} {{$education->country }}</span>
                                                </td>
                                                
                                                <td align="right" width="50%" valign="top" style="padding:10px 0px 5px 0px; line-height:24px; font-weight:bold; font-size:14px; ">
                                                    <?php $education_enddate = $education->enddate;
                                                    $new_education_enddate = date("F Y", strtotime($education_enddate));?>
                                                    @if (($education->graduated == 'still_enrolled'))
                                                    Present - {{$new_education_enddate }}
                                                    @else
                                                    {{$new_education_enddate }}
                                                    @endif
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    </tr>
                                    @if (!is_null($education->GPA))
                                    <tr>
                                        <td align="left" valign="top" style="line-height:18px; font-weight:normal; font-size:14px; padding-top: 10px;"> 
                                            
                                            Cumulative GPA: {{$education->GPA}};
                                           
                                        </td>
                                    </tr>
                                    @endif
                                    @if(count($education->awards)>0)
                                    <tr>
                                        <td align="left" valign="top" style="line-height:18px; font-weight:normal; font-size:14px;">
                                            
                                        <span>Awards:</span>

                                        @foreach ($education->awards as $key=>$value)

                                        {{$value}};

                                        @endforeach


                                            
                                        </td>
                                    </tr>
                                    @endif

                                    @if(count($education->relevant_courses)>0)
                                    <tr>
                                        <td align="left" valign="top" style="line-height:18px; font-weight:normal; font-size:14px;">
                                           
                                                Relevant Courses:

                                                @foreach ($education->relevant_courses as $key=>$value)

                                                {{$value}};

                                                @endforeach


                                        </td>
                                    </tr>
                                    @endif

                                    @if(count($education->extra_activity)>0)
                                    <tr>
                                        <td align="left" valign="top" style="line-height:18px; font-weight:normal; font-size:14px; padding-bottom: 10px;">
                                            
                                            <span>Extra Activity:</span>
                                            
                                            @foreach ($education->extra_activity as $key=>$value)
                                            
                                            {{$value}};
                                            
                                            @endforeach
                                            
                                            
                                        </td>
                                    </tr>
                                    @endif
                                    
                                    @endforeach
                                    
                                </table>
                            </td>
                        </tr>
                        <!--  Repeated Row End -->


                        <!--  Technical experience Repeated Row Start -->
                        @if(count($user->technicalExperience)>0)

                                    <tr>
                                        <td align="left" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px; padding-top:20px;">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td colspan="2" align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:18px; text-transform: uppercase; border-top: 1px solid #65c897; border-bottom:3px solid #65c897; padding:10px 0px 5px 0px;">TECHNICAL  Experience</td>
  
                                                </tr>
                                                <tr>
                                                    <td align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:14px; text-transform: uppercase; padding-top:10px;">Projects</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td align="left" valign="top" style="padding:5px 0px; line-height:18px; font-weight:normal; font-size:14px; padding-top: 10px;">
                                                        <ul style="padding: 0 0 0 10px; margin: 10px;">
															@foreach ($user->technicalExperience as $technical_experience)
                                                            <li style="margin-bottom: 5px;">{{$technical_experience->project_title}} 
																@if (!is_null($technical_experience->project_year))
																({{$technical_experience->project_year}})
																@endif : {{$technical_experience->project_description}} ({{$technical_experience->technology_stack}})</li>
                                                            
                                                            @endforeach
                                                        </ul>
                                                    </td>
                                                </tr>
                                                
                                                
                                            </table>
                                        </td>
                                    </tr>
									@endif
                        <!--  Technical experience Repeated Row End -->

                        <!--  Repeated Row Start -->
                        @if(count($user->additionalExperience)>0)
                        <tr class="whatever">
                            <td align="left" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px; padding-top:20px;">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td colspan="2" align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:18px; text-transform: uppercase; border-top: 1px solid #65c897; border-bottom:3px solid #65c897; padding:10px 0px 5px 0px;">OTHER EXPERIENCE</td>
                                    </tr>
                                    @foreach ($user->additionalExperience as $additional_experience)
                                    <tr>
                                        <td align="left" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px;">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td align="left" width="50%" valign="top" style="padding:10px 0px {{$additional_experience->responsibilities?'0px':'5px'}} 0px; line-height:24px; font-weight:bold; font-size:14px; ">
                                                        {{$additional_experience->role}},{{$additional_experience->employer}}<br>
                                                        <span style="font-weight: normal; font-size: 14px;">{{$additional_experience->city }} {{$additional_experience->state }} {{$additional_experience->country }}</span>
                                                    </td>
                                                    
                                                    <td align="right" width="50%" valign="top" style="padding:10px 0px {{$additional_experience->responsibilities?'0px':'5px'}} 0px; line-height:24px; font-weight:bold; font-size:14px; ">
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
                                                </td>
                                                </tr>
                                                
                                                </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top" style="font-weight:normal; font-size:14px;line-height:28px;" class="add_responsibility"> 
                                            
                                            {!! $additional_experience->responsibilities!!}
                                           
                                             </td>
                                    </tr>
                                    @endforeach
                                
                                    
                                </table>
                            </td>
                        </tr>
                        @endif
                        <!--  Repeated Row End -->



                        
                    </table>
                </td>
            </tr>
          
        </table>
    </td>
</tr>
</table></body></html>
