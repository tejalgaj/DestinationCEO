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
            <tr>
                
               
                   
                       
                            <td style="padding:20px;" align="left" valign="top">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">

                                    <!--  Repeated Row Start -->
                                    <tr>
                                        <td align="left" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px;">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td align="left" width="30%" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px;">
                                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                            <tr>
                                                                
                                                                <td align="left" valign="top" style="line-height: 24px; padding-left: 15px;font-size: 12px;">{{$user->details->address}}</td>
                                                            </tr>
                                                            <tr>
                                                                
                                                                <td align="left" valign="top" style="line-height: 24px; padding-left: 15px;font-size: 12px;">{{$user->details->city}}, {{$user->details->state}}, {{$user->details->zipcode}}</td>
                                                            </tr>
                                                            
                                                           
                                                           
                                                        </table>
                                                    </td>
                                                    <td align="left" width="40%" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px;">
                                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                          
                                                           
                                                            <tr>
                                                                
                                                                <td align="center" valign="top" style="line-height: 24px; padding-left: 15px;font-weight: bold; font-size:25px;">{{ucfirst($user->details->firstname)}} {{ucfirst($user->details->lastname)}}</td>
                                                            </tr>
                                                            
                                                        </table>
                                                    </td>
                                                    <td align="left" width="30%" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px;">
                                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                          
                                                           
                                                            <tr>
                                                                
                                                                <td align="right" valign="top" style="line-height: 24px; padding-left: 15px;font-size: 12px;">{{$user->details->phone}}</td>
                                                            </tr>
                                                            <tr>
                                                                
                                                                <td align="right" valign="top" style="line-height: 24px; padding-left: 15px;font-size: 12px;">{{$user->details->email}}</td>
                                                            </tr>
                                                            <tr>
                                                                
                                                                <td align="right" valign="top" style="line-height: 24px; padding-left: 15px;font-size: 12px;">{{$user->details->github}}</td>
                                                            </tr>
                                                            <tr>
                                                                
                                                                <td align="right" valign="top" style="line-height: 24px; padding-left: 15px;font-size: 12px;">{{$user->details->linkedin}}
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                
                                                
                                                
                                                
                                            </table>
                                        </td>
                                    </tr>
                                    <!--  Repeated Row End -->





                                    <!--  Repeated Row Start -->
                                    <tr>
                                        <td align="left" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px;">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:18px; text-transform: uppercase; border-bottom: 2px solid #eeeeee; padding:10px 0px 5px 0px;">EMPLOYMENT</td>
                                                </tr>

												@foreach($user->experiences as $work)
												
                                                <tr>

                                                    <td align="left" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px;">
                                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                            <tr>
                                                                <td align="left" width="33%" valign="top" style="padding:5px 0px; line-height:18px; font-weight:normal; font-size:12px; padding-top: 10px;">{{$work->job_title }}</td>
                                                                <td align="center" width="30%" valign="top" style="padding:5px 0px; line-height:18px; font-weight:normal; font-size:12px; padding-top: 10px;">{{$work->employer }},{{$work->address }}, {{$work->city }} {{$work->state }} {{$work->zipcode }}</td>
                                                                <td align="right" width="30%" valign="top" style="padding:5px 0px; line-height:18px; font-weight:normal; font-size:12px; padding-top: 10px;">
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





                                                    <!-- <td align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:14px; text-transform: uppercase; padding-top:10px;">Senior PHP Developer</td> -->
                                                </tr>
                                                <!-- each project div start -->
                                                
                                                
    
                                                    <tr>
														
                                                        <td align="left" valign="top" style="padding:5px 0px; line-height:18px; font-weight:normal; font-size:12px; padding-top: 10px;">
															
															
																
																{!! $work->work_responsibilities; !!}
																
                                                            
															
                                                        </td>
														
                                                    </tr>
                                               
                                            
                                                <!-- each project div start -->

                                                @endforeach

                                                
                                                
                                                
                                            </table>
                                        </td>
                                    </tr>
                                    <!--  Repeated Row End -->

                                    <!--  Repeated Row Start -->
                                    <tr>
                                        <td align="left" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px;">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:18px; text-transform: uppercase; border-bottom: 2px solid #eeeeee; padding:10px 0px 5px 0px;">Education</td>
                                                </tr>
												@foreach($user->education as $education)
                                                <tr>

                                                    <td align="left" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px;">
                                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                            <tr>
                                                                <td align="left" width="33%" valign="top" style="padding:5px 0px; line-height:18px; font-weight:normal; font-size:12px; padding-top: 10px;">{{$education->city }} {{$education->state }} {{$education->country }}</td>
                                                                <td align="center" width="33%" valign="top" style="padding:5px 0px; line-height:18px; font-weight:normal; font-size:12px; padding-top: 10px;">{{$education->schoolname }}</td>
                                                                <td align="right" width="33%" valign="top" style="padding:5px 0px; line-height:18px; font-weight:normal; font-size:12px; padding-top: 10px;">
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





                                                    <!-- <td align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:14px; text-transform: uppercase; padding-top:10px;">Senior PHP Developer</td> -->
                                                </tr>
                                                <tr>
                                                    <td align="left" valign="top" style="padding:5px 0px; line-height:18px; font-weight:normal; font-size:12px; padding-top: 10px;">{{$education->degree }} in {{$education->fieldofstudy }}. 
														@if (!is_null($education->GPA))
														Cumulative GPA: {{$education->GPA}};
														@endif
														 </td>
                                                </tr>
												<tr>
                                                    <td align="left" valign="top" style="line-height:18px; font-weight:normal; font-size:12px;">
														@if(count($education->awards)>0)
        <span>Awards:</span>
        
    @foreach ($education->awards as $key=>$value)

    {{$value}};
    
@endforeach
      
@endif
                                                        
                                                    </td>
                                                </tr>
												<tr>
                                                    <td align="left" valign="top" style="line-height:18px; font-weight:normal; font-size:12px; padding-bottom: 10px;">
                                                        @if(count($education->relevant_courses)>0)
Relevant Courses:

@foreach ($education->relevant_courses as $key=>$value)

{{$value}};

@endforeach

@endif
                                                    </td>
                                                </tr>
												<tr>
                                                    <td align="left" valign="top" style="line-height:18px; font-weight:normal; font-size:12px; padding-bottom: 10px;">
														@if(count($education->extra_activity)>0)
														<span>Extra Activity:</span>
														
														@foreach ($education->extra_activity as $key=>$value)
														
														{{$value}};
														
														@endforeach
														
														@endif
                                                    </td>
                                                </tr>
                                                
                                                @endforeach
                                                
                                            </table>
                                        </td>
                                    </tr>
                                    <!--  Repeated Row End -->

                                    
                                    
                                    <!--  Repeated Row Start -->
									@if(count($user->technicalExperience)>0)

                                    <tr>
                                        <td align="left" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px;">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:18px; text-transform: uppercase; border-bottom: 2px solid #eeeeee; padding:10px 0px 5px 0px;">TECHNICAL  Experience</td>
                                                </tr>
                                                <tr>
                                                    <td align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:14px; text-transform: uppercase; padding-top:10px;">Projects</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td align="left" valign="top" style="padding:5px 0px; line-height:18px; font-weight:normal; font-size:12px; padding-top: 10px;">
                                                        <ul style="padding: 0 0 0 10px; margin: 0;">
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
                                    <!--  Repeated Row End -->
                                     <!--  Repeated Row Start -->
									 @if(count($user->additionalExperience)>0)
                                     <tr>
                                        <td align="left" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px;">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:18px; text-transform: uppercase; border-bottom: 2px solid #eeeeee; padding:10px 0px 5px 0px;">ADDITIONAL  Experience</td>
                                                </tr>
											

<tr>
	<td align="left" valign="top" style="padding:5px 0px; line-height:18px; font-weight:normal; font-size:12px; padding-top: 10px;">
		<ul style="padding: 0 0 0 10px; margin: 0;">
			@foreach ($user->additionalExperience as $additional_experience)

			<li style="margin-bottom: 5px;">{{$additional_experience->role}}: {{$additional_experience->responsibilities}}</li>
			
			@endforeach
		
		</ul>
	</td>
</tr>



                                                
                                                
                                                
                                            </table>
                                        </td>
                                    </tr>
									@endif
                                    <!--  Repeated Row End -->
                                    <!--  Repeated Row Start -->
                                    <tr>
                                        <td align="left" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px;">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:18px; text-transform: uppercase; border-bottom: 2px solid #eeeeee; padding:10px 0px 5px 0px;">Languages and Technologies</td>
                                                </tr>
                                                <tr>
                                                    <td align="left" valign="top" style="padding:5px 0px; line-height:18px; font-weight:normal; font-size:12px; padding-top: 10px;">
														@foreach($user->skills as $skill)
														{{$skill->name}} @if (!is_null($skill->description))({{$skill->description}}) @endif<br>
														@endforeach
                                                       
                                                    </td>
                                                </tr>
                                               
                                                
                                            </table>
                                        </td>
                                    </tr>
                                    <!--  Repeated Row End -->
                                </table>
                            </td>
                       
                    
                

            </tr>
        </table>
    </td>
</tr>
</table>

</body>
</html>
