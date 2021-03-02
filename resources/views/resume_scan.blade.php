@extends('layouts.app')
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Keyword Scanning</title>
  <link href="{{asset('boottheme/assets/css/style.css')}}" rel="stylesheet">
  
  </head>
<main>

<body>
<div class="container_scan">
  
 <form id="theform" action="javascript:void(0);" >
    <label for="about-yourself">Paste Resume:</label>
    <div class="ta-container">
    <div class="md-form mb-4 pink-textarea active-pink-textarea">
      <textarea id="about-yourself" class="ta"  name="about-yourself" rows="6" cols="75" data-maxchars="4000" data-over="false" placeholder="Paste Resume here..." required></textarea>
     </div>
      <div class="status-bar">
        <table>
          <tr><td>Characters:</td><td class="charcount"></td></tr>
          <tr><td class="remaining-label">Remaining:</td><td class="remaining"></td></tr>
        </table>
      </div>
    </div>
    <label for="your-proposal">Paste Job Posting :</label>
    <div class="md-form mb-4 pink-textarea active-pink-textarea">
  <textarea id="job-title" class="md-textarea form-control" rows="1" placeholder="Paste Job Title here..." required></textarea>
 
</div>
   
    <div class="ta-container">
    <div class="md-form mb-4 pink-textarea active-pink-textarea">
      <textarea id="your-proposal" class="ta" name="your-proposal" rows="6" cols="75" data-maxchars="1500" data-over="false" placeholder="Paste Job Description here..." required></textarea>
      </div>
     
    </div>

    
    <button id="submitbtn" type="submit"  onclick="myFunctionWordMatch()">Continue Scanning----</button>
    
  </form>
 
<div class="container_scan" id="container_scan">

<h3>Scanning Results Report:---</h3></br>
<h4>Overall ATS match Percentage : <span id="results_percentage"></span></h4></br>
<table id="myTable" class="table table-striped">
  <tbody>
    <tr>
      
      <td>Email Address</td>
      <td></td>
      <td><span>&#10004;&#65039;</span></td>
      <td><span>&#10060;</span></td>

    <tr>
    
      <td>Linkedin Profile</td>
      <td></td>
      <td><span>&#10004;&#65039;</span></td>
      <td><span>&#10060;</span></td>
    <tr>
     
      <td>Job Title Match</td>
      <td></td>
      <td><span>&#10004;&#65039;</span></td>
      <td><span>&#10060;</span></td>
    </tr>

    <tr>
      
      <td>Education Match</td>
      <td></td>
      <td><span>&#10004;&#65039;</span></td>
      <td><span>&#10060;</span></td>
    </tr>


    <tr>
     
      <td>Experience Match</td>
      <td></td>
      <td><span>&#10004;&#65039;</span></td>
      <td><span>&#10060;</span></td>
    </tr>

    <tr>
      <td>Characters Count</td>
      <td></td>
      <td><span>&#10004;&#65039;</span></td>
      
    </tr>
  </tbody>
</table>

<div id="hardskills"><p>Hard Skills: </p> </div>
<table id ="myTableHardSkills" class="table table-striped">

  <tbody>
    <tr>
      <td>Skills required :</td>
      <td></td>
      <td></td>
    </tr>

    <tr>
       <td>Skills matched: </td>
      <td></td>
      <td></td>
    </tr>

    <tr>
    <td>Matched skills Average</td>
      <td></td>
      <td></td>
    </tr>

  </tbody>
</table>
<div class="pie" data-pie='{ "percent": 82, "colorSlice": "#E91E63", "time": 30, "fontWeight": 400 }'></div>
</div>
</body>
<script src="{{asset('boottheme/assets/js/resumescanning.js')}}"></script>
</main>
