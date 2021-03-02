<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<title>Resume</title>
	<meta name="robots" content="noindex, nofollow">
	<style type="text/css" media="all">
		html{
			background-color:#FFF;
			padding:0 1em;
			}
		body {
			background-color:#FFF;
			font-family:Georgia, "Times New Roman", Times, serif;
			padding:1em;
			border:solid #AAA 1px;
			margin:1em auto;
			max-width: 50em;
			}
		#address{
			height:5em;
			width:48em;
			text-align:center;
			}
		#address div{
			width:14em;
			float:left;
			padding:0 .5em 0 1.5em;
			}
		#address h3{
			border-bottom: none;
			margin-top: 0;
			}	
		.date {
			float:right;
			font-size:.8em;
			margin-top:.4em;
			text-align:right;
			}
		abbr, acronym{
			border-bottom:1px dotted #333;
			cursor:help;
			}	
		address{
			font-style:italic;
			color:#333;
			font-size:.9em;
			}
			
		
		h1{
			font-size:1.75em;
			text-align:center;
			padding:.5em 0;
			}
		h2 {
			clear:both;
			font-size: 1.4em;
			font-weight:bold;
			margin-top:2em;
			font-variant: small-caps;
			padding-left:.25em;
			background-color:#EEE;
			border-bottom: 1px solid #999;
			letter-spacing: .06em;
			}
		h3 {margin: 1em 0 0 0;}
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
<body data-new-gr-c-s-check-loaded="8.871.0" data-gr-ext-installed="">
	<h1>{{ucfirst($user->details->firstname)}} {{ucfirst($user->details->lastname)}}</h1>
	<div id="address">
		<div>
			{{$user->details->address}}<br>
			{{$user->details->city}}, {{$user->details->state}}, {{$user->details->zipcode}}<br>
			
		</div>
		
		<div>
			{{$user->details->phone}}<br>
			{{$user->details->email}} <br>
			{{$user->details->github}}<br>
			{{$user->details->linkedin}}
		</div>
	</div>
	
	
	
	
	<h2>Employment</h2>
    @foreach($user->experiences as $work)
	<span class="date">{{$work->startdate}} � @if (($work->currently_working == 'yes'))
        Present
    @else
    {{$work->enddate }}
    @endif
        
   </span>
	<h3>{{$work->job_title }}</h3>
	<address>{{$work->employer }}, {{$work->address }}, {{$work->city }} {{$work->state }} {{$work->zipcode }}</address>
    <ul>
    @if(count($work->work_responsibilities)>0)
    
    @foreach ($work->work_responsibilities as $key=>$value)

    <li>{{$value}}</li>
    
@endforeach
@else
<li>No Work Resposibilities Added</li>

@endif
</ul>
	@endforeach

	
    <h2>Education</h2>
    @foreach($user->education as $e)
    <span class="date"> @if (($e->graduated == 'no'))
        Present
    @else
    {{$e->enddate }}
    @endif
        
   </span>
    @endforeach
    <h3>{{$e->degree }} in {{$e->fieldofstudy }}</h3>
    <address>{{$e->schoolname }}, {{$e->address }}, {{$e->city }} {{$e->state }} {{$e->zipcode }}</address>
	
        @if (!is_null($e->GPA))
        <span>Cumulative GPA: {{$e->GPA}}</span>
        @endif
        @if(count($e->awards)>0)
        <span>Awards:</span>
        <ul>
    @foreach ($e->awards as $key=>$value)

    <li>{{$value}}</li>
    
@endforeach
        </ul>
@endif

@if(count($e->relevant_courses)>0)
<span>Relevant Courses:</span>

@foreach ($e->relevant_courses as $key=>$value)

{{$value}},

@endforeach

@endif
    <br>
    <br>
@if(count($e->extra_activity)>0)
<span>Extra Activity:</span>

@foreach ($e->extra_activity as $key=>$value)

{{$value}},

@endforeach

@endif


@if(count($user->additionalExperience)>0)
<h2>Additional Experience</h2>
<ul>
@foreach ($user->additionalExperience as $additional_experience)

<li>{{$additional_experience->role}}:{{$additional_experience->responsibilities}}</li>

@endforeach
</ul>
@endif
	
	
	
	<h2>Skills</h2>
    <ul>
    @foreach($user->skills as $skill)
            <li> {{$skill->name}} ({{$skill->description}})</li>
            @endforeach
        </ul>

</body></html>