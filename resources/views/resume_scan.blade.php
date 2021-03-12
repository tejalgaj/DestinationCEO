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
  <div id='title_scanning'>
    <h1>Scan your Resume and Job posting and land on more JOB interviews</h1>
<p>To start, add your resume's content to the box on the top. Then paste the job description for your target role in the box on the bottom.</p>
  </div>
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
 
<div  id="container_scan">

<h3>Scanning Results Report:---</h3></br>
<h4>Overall ATS match Percentage : <span id="results_percentage"></span></h4>

<span id="result_description"></span></br>
<button id="submitbtn" type="submit"  onclick="window.location.reload();">Scan Another Resume--</button>
    
<div id="match_title"><p>ATS Best Practices: </p> </div>
<h4>
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
      <td>Certifications/Trainings</td>
      <td></td>
      <td><span>&#10004;&#65039;</span></td>
      <td><span>&#10060;</span></td>
    </tr>

    <tr>
      <td>Characters Count</td>
      <td></td>
      <td><span>&#10004;&#65039;</span></td>
      <td><span>&#10060;</span></td>
    </tr>
    <tr>
      <td>Average ATS Match</td>
      <td></td>
      <td></td>
    </tr>
    
  </tbody>
</table>

<div id="match_title"><p>Hard Skills: </p> </div>
<table id ="myTableHardSkills" class="table table-striped">

  <tbody>
    <tr>
      <td>Job posting:</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
       <td>Resume: </td>
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


<div id="match_title"><p>Soft Skills: </p> </div>
<table id ="myTableSoftSkills" class="table table-striped">

  <tbody>
    <tr>
      <td>Job posting:</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
       <td>Resume: </td>
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
<!--<script src="{{asset('boottheme/assets/js/resumescanning.js')}}"></script>-->
<script>
/**
 * Functions to add/remove class on div.ta-container to emulate focus removed from textarea by CSS line 37 (outline:none)
 */

document.getElementById('container_scan').style.display = "none";

function setFocus(ta_container) {

    ta_container.classList.add('hasfocus')

}

function removeFocus(ta_container) {

    ta_container.classList.remove('hasfocus')

}

/**
 * Function to enable or disable #submitbtn
 * #submitbtn will be disabled if any of the textareas have data-over set 
 * to true due to exceeding the value specified in data-maxchars
 */
function setSubmitBtn() {

    var tas = theform.querySelectorAll('.ta')
    var disabled = false
    tas.forEach(function(ta) {

        if (ta.getAttribute('data-over') == 'true') {
            disabled = false
        }

    })

    if (disabled) {
        theform.querySelector('#submitbtn').disabled = false
    } else {
        theform.querySelector('#submitbtn').disabled = false
    }

}

/**
 * Function to count the characters in .ta and update .ta_container.statusbar
 * @param  {Obj} ta_container - the .ta-container element
 * @param  {Obj} ta - the .ta textarea element
 * @param  {Integer} maxLength - the max number of characters allowed in the .ta textarea element
 */
var numChars = "";

function countChars(ta_container, ta, maxLength) {

    numChars = ta.value.length

    ta_container.querySelector('.charcount').innerHTML = numChars + '/' + maxLength
    ta_container.querySelector('.remaining').innerHTML = Math.abs(maxLength - numChars)

    if (numChars > maxLength) {

        ta_container.querySelector('.remaining-label').classList.add('over')
        ta_container.querySelector('.remaining-label').innerHTML = 'Over by:'
        ta_container.querySelector('.remaining').classList.add('over')
        ta.style.color = 'hsl(0, 80%, 60%)'
        ta.setAttribute('data-over', 'true')
        setSubmitBtn()

    } else {

        ta_container.querySelector('.remaining-label').classList.remove('over')
        ta_container.querySelector('.remaining-label').innerHTML = 'Remaining:'
        ta_container.querySelector('.remaining').classList.remove('over')
        ta.style.color = 'hsl(0, 0%, 50%)'
        ta.setAttribute('data-over', 'false')
        setSubmitBtn()

    }

}

/**
 * Initialisation function
 */
function initialise() {



    var ta_containers = theform.querySelectorAll('.ta-container')

    ta_containers.forEach(function(ta_container) {

        var ta = ta_container.querySelector('.ta')
        var maxLength = ta.getAttribute('data-maxchars')
        var numChars = ta.value.length

        ta_container.querySelector('.charcount').innerHTML = numChars + '/' + maxLength
        ta_container.querySelector('.remaining').innerHTML = maxLength - numChars

        ta.addEventListener('input', function() {
            countChars(ta_container, ta, maxLength)
        })

        ta.addEventListener('focus', function() {
            setFocus(ta_container)
        })

        ta.addEventListener('blur', function() {
            removeFocus(ta_container)
        })

    })

}

function myFunctionWordMatch() {


    //for counting matches in resume..like education, job posting etc
    var resume_match_count = 0;

    if(numChars>0)
    {
    document.getElementById('container_scan').style.display = "block";
    }
    var myTable = document.getElementById("myTable");
    /*characters count*/

    if(numChars>=400)
    {
    myTable.rows[6].cells[1].textContent = "Character count of resume: " + numChars;
    myTable.rows[6].cells[3].textContent = "";
    }
    else if (numChars<400 && numChars>0)
    {
      myTable.rows[6].cells[1].textContent = "Character count of resume: " + numChars;
    myTable.rows[6].cells[2].textContent = "";
    }
    else
    {
      numChars=0;
      myTable.rows[6].cells[1].textContent = "Character count of resume: " + numChars;
    myTable.rows[6].cells[2].textContent = "";
      
    }



    var str_resume_match = document.getElementById('about-yourself').value;
    var str_resume_match_withoutcommas = str_resume_match.replace(",", "");
    var str_resume_match_withoutSemicolons = str_resume_match_withoutcommas.replace(";", "");
    var arr_resume_match = str_resume_match_withoutSemicolons.split(' ');

    var str_resume = document.getElementById('about-yourself').value;
    var str_resume = str_resume.toLocaleLowerCase();

    var str_posting = document.getElementById('your-proposal').value;
    var str_posting = str_posting.toLocaleLowerCase();

    /*for job titile*/
    var str_job_title = document.getElementById('job-title').value;
    var str_job_title = str_job_title.toLocaleLowerCase();

    var job_title_keywords = str_job_title.split(' ');
    var job_title_keywords = job_title_keywords.map(v => v.toLowerCase());
    /////

    /* for education*/
    var arr_resume_previous = str_resume.split(' ');
    var arr_resume_withoutspaces = arr_resume_previous.filter(word => word.trim().length > 0);
    var arr_resume = arr_resume_withoutspaces.map(v => v.toLowerCase());

    var arr_posting_previous = str_posting.split(' ');
    var arr_posting_withoutspaces = arr_posting_previous.filter(word => word.trim().length > 0);
    var arr_posting = arr_posting_withoutspaces.map(v => v.toLowerCase());
    /////
    var count = 0;
    var result = [];
    var finalResult = [];
    var found = "false";
    var flag = "true";
    var c1 = 0;
    var excluded_words = ["and", "then", "of", "to", "a", "an", "people", "them", "the", " ", "", ".", ",", ";", ":"];
    for (var i = 0; i < arr_posting.length; i++) {
        var word = arr_posting[i];
        for (var j = 0; j < arr_resume.length; j++) {
            if (word == arr_resume[j]) {
                for (var k = 0; k < excluded_words.length; k++) {
                    if (word == excluded_words[k]) {

                        flag = "false";
                        break;
                    }

                }

                if (flag == "true") {
                    count++;
                    //console.log(word);
                    result.push(word); {
                        for (let z = 0; z < result.length; z++) {
                            for (y = 0; y < finalResult.length; y++)

                            {
                                if (result[z] == finalResult[y]) {
                                    found = true;

                                }
                            }

                            c1++;

                            if (c1 == 1 && found == false) {
                                finalResult.push(result[z]);

                            }

                            c1 = 0;
                            found = false;
                        }
                    }

                } else {
                    flag = "true";
                    break;
                }


            }
        }
    }



    //////To match job title
    var found_job_title = str_resume.search(str_job_title);
    if (found_job_title > 0) {
        // console.log("Job title Found");
        myTable.rows[2].cells[1].textContent = "The job title described : " + str_job_title + " matches with the resume. Excellent!";
        resume_match_count = resume_match_count + 1;
        myTable.rows[2].cells[3].textContent = "";
    } else {
        //  console.log("Not Found");
        myTable.rows[2].cells[1].textContent = "The job title described does not match with resume. ";
        myTable.rows[2].cells[2].textContent = "";
    }

    // console.log(job_title_keywords);

    //Matching Education//
    var found_education1 = str_resume.search("qualification");
    var found_education2 = str_resume.search("education");
    var education_level = ["bachelor’s", "bachelor", "bachelors", "master's", "master", "doctorate", "graduate", "postgraduate", "postgraduation", "graduation"];

    var arr_resume_previous_education = str_resume.split('\n');
    var arr_resume_final_education = arr_resume_previous_education.map(v => v.toLowerCase());

    var education_degree = false;
    if (found_education1 > 0 || found_education2 > 0) {
        // console.log("Education found");

        var arr_resume_previous_hard_skills = str_resume.split('\n');
        var arr_resume_withoutspaces_hard_skills = arr_resume_previous_hard_skills.map(el => el.trim());
        var arr_resume_final_hard_skills = arr_resume_withoutspaces_hard_skills.map(v => v.toLowerCase());
        for (var i = 0; i < arr_resume_final_hard_skills.length; i++) {

            var temp_posting_str = arr_resume_final_hard_skills[i];
            var temp_posting_arr = temp_posting_str.split(',');
            var temp_posting_arr_withoutspaces = temp_posting_arr.map(el => el.trim());
            for (var j = 0; j < temp_posting_arr_withoutspaces.length; j++) {
                // console.log(temp_posting_arr_withoutspaces[j]);

                for (var k = 0; k < education_level.length; k++) {
                    if (temp_posting_arr_withoutspaces[j].search(education_level[k])) {
                        education_degree = true;
                    }
                }

            }
        }
        if (education_degree == true) {
            //    console.log("Professional degree found");
            myTable.rows[3].cells[1].textContent = "Education is found in the resume. Professional degree is there. Excellent job!";
            myTable.rows[3].cells[3].textContent = "";
            resume_match_count = resume_match_count + 1;
        } else {
            //  console.log("Professional degree not found");
            myTable.rows[3].cells[1].textContent = "Education is found in the resume. Professional degree is not there.";
            myTable.rows[3].cells[3].textContent = "";
        }
    } else {
        //  console.log("Education Not Found");

        myTable.rows[3].cells[1].textContent = "No Education related information found. ";
        myTable.rows[3].cells[2].textContent = "";
    }

    //experience

    var found_experience = str_resume.search("experience");
    if (found_experience > 0) {
        //  console.log("Experience found");

        myTable.rows[4].cells[1].textContent = "Valid Experience is found in the resume. Excellent job!";
        myTable.rows[4].cells[3].textContent = "";
        resume_match_count = resume_match_count + 1;
    } else {
        //  console.log("Experience not found");
        myTable.rows[4].cells[1].textContent = "No Valid Experience found in the resume.";
        myTable.rows[4].cells[2].textContent = "";
    }

    //Certifications

    var found_certification1 = str_resume.search("certification");
    var found_certification2 = str_resume.search("certifications");
    var found_certification3 = str_resume.search("training");
    var found_certification4 = str_resume.search("trainings");

    if (found_certification1 > 0 || found_certification2 > 0 || found_certification3 > 0 ||found_certification4 > 0) {       

        myTable.rows[5].cells[1].textContent = "Valid Certifications/Trainings are found in the resume. Excellent job!";
        myTable.rows[5].cells[3].textContent = "";
        resume_match_count = resume_match_count + 1;
    } else {
        
        myTable.rows[5].cells[1].textContent = "No Valid certifications/Trainings found in the resume.";
        myTable.rows[5].cells[2].textContent = "";
    }


    //linked in match/
    var check_linkedin = false;
    let result_linkedin = "";
    arr_resume_match.forEach(entry => {
        let exp = /(ftp|http|https):\/\/?(?:www\.)?linkedin.com(\w+:{0,1}\w*@)?(\S+)(:([0-9])+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
        if (entry.match(exp)) {
            result_linkedin = entry.match(exp);
            check_linkedin = true;

            //console.log("success"); 
            // console.log(result_linkedin[0]);
        }
    })
    if (check_linkedin == true) {
        myTable.rows[1].cells[1].textContent = "The resume shows linkedin link " + result_linkedin[0] + "; This is highly appreciated!";
        myTable.rows[1].cells[3].textContent = "";
        resume_match_count = resume_match_count + 1;
    } else {
        myTable.rows[1].cells[1].textContent = "The resume does not shows any linkedin link; This is disappointing!";
        myTable.rows[1].cells[2].textContent = "";
    }

    /*email*/
    var check_email = false;
    let result_email = "";
    arr_resume_match.forEach(entry => {
        let exp = /[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/;
        if (entry.match(exp)) {
            result_email = entry.match(exp);
            check_email = true;
            //console.log("success"); 
            // console.log(result[0]);
        }

    })
    if (check_email == true) {
        myTable.rows[0].cells[1].textContent = "The resume shows email address " + result_email[0] + "; This is highly appreciated!";
        myTable.rows[0].cells[3].textContent = "";
        resume_match_count = resume_match_count + 1;
    } else {
        myTable.rows[0].cells[1].textContent = "The resume does not shows any email address; This is disappointing!";
        myTable.rows[0].cells[2].textContent = "";
    }



    /////hard skills/////


    var arr_found_hard_skills_posting = [];
    var arr_found_hard_skills_posting_index = 0;

    var arr_found_hard_skills_resume = [];
    var arr_found_hard_skills_resume_index = 0;
    var keyword="";
    @foreach($skills_keywords as $skills_keyword)
    {
     keyword = '{{$skills_keyword['hard_skill']}}';
     var found_posting = str_posting.search(keyword);
        if (found_posting > 0) {
            arr_found_hard_skills_posting[arr_found_hard_skills_posting_index] = keyword +' ;';
            arr_found_hard_skills_posting_index++;


            var found_resume = str_resume.search(keyword);
            if (found_resume > 0) {
                arr_found_hard_skills_resume[arr_found_hard_skills_resume_index] = keyword + ' ;';
                arr_found_hard_skills_resume_index++;
            }

        }
      }
    @endforeach

//soft skills

var arr_found_soft_skills_posting = [];
    var arr_found_soft_skills_posting_index = 0;

    var arr_found_soft_skills_resume = [];
    var arr_found_soft_skills_resume_index = 0;
    var keyword="";
    @foreach($skills_keywords as $skills_keyword)
    {
     keyword = '{{$skills_keyword['soft_skill']}}';
     var found_posting = str_posting.search(keyword);
        if (found_posting > 0) {
          arr_found_soft_skills_posting[arr_found_soft_skills_posting_index] = keyword +' ;';
          arr_found_soft_skills_posting_index++;


            var found_resume = str_resume.search(keyword);
            if (found_resume > 0) {
              arr_found_soft_skills_resume[arr_found_soft_skills_resume_index] = keyword + ' ;';
              arr_found_soft_skills_resume_index++;
            }

        }
      }
    @endforeach


    console.log(arr_found_hard_skills_posting);

    console.log(arr_found_hard_skills_resume);
    /////ends/////


    //displying ATS average
    var average_bestpractices_perc = 0;
    if (resume_match_count>0) {
        average_bestpractices_perc = Math.round((resume_match_count / 6) * 100);
    } else {
        average_bestpractices_perc = 0;
    }
    myTable.rows[7].cells[1].textContent = " " + average_bestpractices_perc + "% ";

    //
  
    required_hard_skills_count = arr_found_hard_skills_posting.length;
    matched_hard_skills_count = arr_found_hard_skills_resume.length;

    required_soft_skills_count = arr_found_soft_skills_posting.length;
    matched_soft_skills_count = arr_found_soft_skills_resume.length;
    //displaying hardskills in table
    myTableHardSkills.rows[0].cells[1].textContent = "";
    for (var i = 0; i < required_hard_skills_count; i++) {
        myTableHardSkills.rows[0].cells[1].textContent = myTableHardSkills.rows[0].cells[1].textContent + " " + arr_found_hard_skills_posting[i];
    }

    myTableHardSkills.rows[1].cells[1].textContent = "";
    for (var i = 0; i < matched_hard_skills_count; i++) {
        myTableHardSkills.rows[1].cells[1].textContent = myTableHardSkills.rows[1].cells[1].textContent + " " + arr_found_hard_skills_resume[i];
    }
    var matched_perc_hard_skills = 0;
    if (matched_hard_skills_count > 0 && required_hard_skills_count > 0) {
        matched_perc_hard_skills = Math.round((matched_hard_skills_count / required_hard_skills_count) * 100);
    } else {
        matched_perc_hard_skills = 0;
    }
    myTableHardSkills.rows[2].cells[1].textContent = " " + matched_perc_hard_skills + "% ";

    ///displaying soft skills in table
    myTableSoftSkills.rows[0].cells[1].textContent = "";
    for (var i = 0; i < required_soft_skills_count; i++) {
      myTableSoftSkills.rows[0].cells[1].textContent = myTableSoftSkills.rows[0].cells[1].textContent + " " + arr_found_soft_skills_posting[i];
    }

    myTableSoftSkills.rows[1].cells[1].textContent = "";
    for (var i = 0; i < matched_soft_skills_count; i++) {
      myTableSoftSkills.rows[1].cells[1].textContent = myTableSoftSkills.rows[1].cells[1].textContent + " " + arr_found_soft_skills_resume[i];
    }
    var matched_perc_soft_skills = 0;
    if (matched_soft_skills_count > 0 && required_soft_skills_count > 0) {
      matched_perc_soft_skills = Math.round((matched_soft_skills_count / required_soft_skills_count) * 100);
    } else {
      matched_perc_soft_skills = 0;
    }
    myTableSoftSkills.rows[2].cells[1].textContent = " " + matched_perc_soft_skills + "% ";


    ///final result
    var finalResult_perc = 0;
    
    finalResult_perc= Math.round((matched_perc_soft_skills+ matched_perc_hard_skills + average_bestpractices_perc) / 3);
    document.getElementById('results_percentage').innerHTML =finalResult_perc + "%";


    //result description

    if(finalResult_perc==100)
    {
        document.getElementById('result_description').innerHTML = "The resume is the absolute match for the corresponding job posting";
    }
    else if(finalResult_perc>=90 && finalResult_perc<100 )
    {
        document.getElementById('result_description').innerHTML = "The resume is the excellent match for the corresponding job posting";
    }
    else if(finalResult_perc>=75 && finalResult_perc<90)
    {
        document.getElementById('result_description').innerHTML = "The resume is the best match for the corresponding job posting";
    }
    else if(finalResult_perc>= 50 && finalResult_perc<75)
    {
        document.getElementById('result_description').innerHTML = "The resume is the good match for the corresponding job posting";
    }
    else if(finalResult_perc>= 30 && finalResult_perc<50)
    {
        document.getElementById('result_description').innerHTML = "The resume is the average match for the corresponding job posting";
    }
    else if(finalResult_perc>=10 && finalResult_perc<30)
    {
        document.getElementById('result_description').innerHTML = "The resume is not good match for the corresponding job posting";
    }
    else if(finalResult_perc>=0 && finalResult_perc<10)
    {
        document.getElementById('result_description').innerHTML = "The resume is the worst match for the corresponding job posting";
    }



    //progress bar
   

  //  document.getElementById('percentage').innerHTML=50%;
}
initialise()
</script>
</main>
