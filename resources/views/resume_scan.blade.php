@extends('layouts.app')

@section('main-content')

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Keyword Scanning</title>
  <link href="{{asset('boottheme/assets/css/resumescancss.css')}}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  </head>
<main>

<body>
<div class="container_scan">
  <div id='title_scanning'>

  <div class="section-title">
            <h2>Welcome to Resume and Job Posting Scanning </h2>
            <p>RESUME SCAN</p>
          </div>
    
</div>
<p>Scan your Resume and Job posting and land on more JOB interviews</p>
  <div class="card">
    <div class="card-block">
 <form id="theform" action="javascript:void(0);" >
    <label for="about-yourself">Paste Resume:</label>
    <div class="ta-container">
    <div class="md-form mb-4 pink-textarea active-pink-textarea">
      <textarea id="about-yourself" class="ta"  name="about-yourself" rows="6" cols="75" data-maxchars="4000" data-over="false" placeholder="Paste Resume here..." required></textarea>
     </div>
      <div class="status-bar" >
        <table>
          <tr><td>Characters:</td><td class="charcount"></td></tr>
         <tr><td class="remaining-label">Remaining:</td><td class="remaining"></td></tr>
        </table>
      </div>
    </div>



    <label for="your-proposal">Paste Job Posting :</label>
   <!-- <div class="md-form mb-4 pink-textarea active-pink-textarea">
  <textarea id="job-title" class="md-textarea form-control" rows="1" placeholder="Paste Job Title here..." required></textarea>
 
</div>
   -->
    <div class="ta-container">
    <div class="md-form mb-4 pink-textarea active-pink-textarea">
      <textarea id="your-proposal" class="ta" name="your-proposal" rows="6" cols="75" data-maxchars="1500" data-over="false" placeholder="Paste Job Description here..." required></textarea>
      </div>

      
    </div>

    <button id="submitbtn"  type="submit"   onclick="update()">Continue Scanning</button>
    
    <button id="anotherbtn"  type="submit"  onclick="window.location.reload();">Scan Another Resume</button>
 
 </br>
 <br>
    <div id="Progress_Status">
  <div id="myprogressBar"></div>
</div>

<br>
    </form>
</div>
</div>


</div>

</br>
</br>
<form id="skills-form">
<div  id="container_scan_results">
<div id="line_space"></div>
<div class="card">
  <div class="card-block">
    <h1 class="card-title">Your Results</h1></br>
    <h4 class="card-subtitle">Overall match Percentage : <span  id="results_percentage"></span> out of 100%</h4>
  <p class="card-text" id="result_description"></p></br>
 
  </div>

  <div class="progress">    
       
  </div>
  
</br>

<button  id="convert_pdf" onclick="genPDFfunction(); return false;">Export Results to PDF</button>
</div> 

 
<div id="line_space_next"></div>

<div id="ats_best_practices_container">
<div id="match_title"><p>ATS Best Practices Match:  <span id="ats_match_average"></span></p></div>
</br>

<h4>
<table id="myTable" class="table">
  <tbody>
    <tr>
      
      <td >Email Address</td>
      <td></td>
      <td><span>&#10004;&#65039;</span></td>
      <td><span>&#10060;</span></td>

    <tr>
      <td>LinkedIn Profile</td>
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
 
  </tbody>
</table>

</div>

<div id="line_space_next"></div>
<div id="hard_skills_match_container">
<div id="match_title"><p>Hard Skills Match:  <span id="hard_skills_match"></span></p></div>

</br>

<table id ="myTableHardSkills" class="table">

  <tbody>
    <tr>
      <td>Required:</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
       <td>Found: </td>
      <td></td>
      <td></td>
    </tr>

  </tbody>
</table>
</div>
</br>
<div id="line_space_next"></div>


<div id="soft_skills_match_container">
<div id="match_title"><p>Soft Skills Match:  <span id="soft_skills_match"></span></p></div>

</br>
<table id ="myTableSoftSkills" class="table">

  <tbody>
    <tr>
      <td>Required:</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
       <td>Found: </td>
      <td></td>
      <td></td>
    </tr>

  </tbody>
</table>
</div>
</form>
<div id="line_space_next"></div>
<div class="pie" data-pie='{ "percent": 82, "colorSlice": "#E91E63", "time": 30, "fontWeight": 400 }'></div>
<div id="match_title"><p>Matched Skills Word Cloud</p></div>
<div id="word-cloud"></div>

<script type="text/javascript" src="{{asset('boottheme/assets/js/scanningResultsPDF.js')}}"></script>
<script>
function genPDFfunction()
{
  genPDF();
}

</script>
</body>

<script>

/**
 * Functions to add/remove class on div.ta-container to emulate focus removed from textarea by CSS line 37 (outline:none)
 */
document.getElementById('Progress_Status').style.display = "none";

document.getElementById('container_scan_results').style.display = "none";
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
  localStorage.clear();

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


function update() {
  document.getElementById('Progress_Status').style.display = "block";
  var element = document.getElementById("myprogressBar");   
  var width = 1;
  var identity = setInterval(scene, 10);
  function scene() {
    if (width >= 100) {
     clearInterval(identity);
    myFunctionWordMatch();
      
    } 
    
  else {
      width++; 

      element.style.width = width + '%'; 
      element.innerHTML = "Scanning " + width * 1  + '%';
    }
    
  }
 
 
    
}

function myFunctionWordMatch() {

    //for counting matches in resume..like education, job posting etc
    
    var resume_match_count = 0;
   
    if(numChars>0)
    {
    document.getElementById('container_scan_results').style.display = "block";
    localStorage.setItem('number Chars', numChars); 
    }
    
    var myTable = document.getElementById("myTable");
    /*characters count*/
    if(numChars>=400)
    {
    myTable.rows[5].cells[1].textContent = "Character count of resume: " + numChars;
    myTable.rows[5].cells[3].textContent = "";
    }
    else if (numChars<400 && numChars>0)
    {
      myTable.rows[5].cells[1].textContent = "Character count of resume: " + numChars;
    myTable.rows[5].cells[2].textContent = "";
    }
    else
    {
      numChars=0;
      myTable.rows[5].cells[1].textContent = "Character count of resume: " + numChars;
    myTable.rows[5].cells[2].textContent = "";
      
    }
    var str_resume_match = document.getElementById('about-yourself').value;
    var str_resume_match_withoutcommas = str_resume_match.replace(",", "");
    var str_resume_match_withoutSemicolons = str_resume_match_withoutcommas.replace(";", "");
    var arr_resume_match = str_resume_match_withoutSemicolons.split(' ');
    var str_resume = document.getElementById('about-yourself').value;
    var str_resume = str_resume.toLocaleLowerCase();
    var str_posting = document.getElementById('your-proposal').value;
    var str_posting = str_posting.toLocaleLowerCase();
    
    /* for education*/
    var arr_resume_previous = str_resume.split(' ');
    var arr_resume_withoutspaces = arr_resume_previous.filter(word => word.trim().length > 0);
    var arr_resume = arr_resume_withoutspaces.map(v => v.toLowerCase());
    var arr_posting_previous = str_posting.split(' ');
    var arr_posting_withoutspaces = arr_posting_previous.filter(word => word.trim().length > 0);
    var arr_posting = arr_posting_withoutspaces.map(v => v.toLowerCase());
    
    
    //Matching Education//
    var found_education=0;
   
    var education_level = ["bachelor’s", "bachelor", "bachelors", "masters", "master", "doctorate", "graduate", "postgraduate", "postgraduation", "graduation"];
   for(var i=0;i<education_level.length;i++)
   {
    if((str_resume.search(education_level[i]))>0)
    {
    found_education=1;
    
    }
   }
    var arr_resume_previous_education = str_resume.split('\n');
    var arr_resume_final_education = arr_resume_previous_education.map(v => v.toLowerCase());
    var education_degree = false;
    if (found_education==1) {
       
            myTable.rows[2].cells[1].textContent = "Education is found in the resume. Professional degree is there. Excellent job!";
            myTable.rows[2].cells[3].textContent = "";
            resume_match_count = resume_match_count + 1;

            localStorage.setItem('education','Education is found in the resume. Professional degree is there. Excellent job!');
        
    } else {
        //  console.log("Education Not Found");
        myTable.rows[2].cells[1].textContent = "No Education related information found. ";
        myTable.rows[2].cells[2].textContent = "";

        localStorage.setItem('education','No Education related information found.');
    }

    //experience

   var found_experience = 0;
    var experience_list = ["experience", "experiences", "project", "projects","experienced"];
   for(var i=0;i<experience_list.length;i++)
   {
    if((str_resume.search(experience_list[i]))>0)
    {
      found_experience=1;
    
    }
   }
    
    if (found_experience==1) {
        //  console.log("Experience found");
        myTable.rows[3].cells[1].textContent = "Valid Experience is found in the resume. Excellent job!";
        myTable.rows[3].cells[3].textContent = "";
        resume_match_count = resume_match_count + 1;

        
        localStorage.setItem('experience','Valid Experience is found in the resume. Excellent job!');
    } else {
        //  console.log("Experience not found");
        myTable.rows[3].cells[1].textContent = "No Valid Experience found in the resume.";
        myTable.rows[3].cells[2].textContent = "";

        
        localStorage.setItem('experience','No Valid Experience found in the resume.');
    }
    //Certifications

    var found_certification = 0;
    var certification_list = ["certification", "certifications", "training", "trainings","certified"];
   for(var i=0;i<certification_list.length;i++)
   {
    if((str_resume.search(certification_list[i]))>0)
    {
      found_certification=1;
    
    }
   }
   
    if (found_certification==1) {       
        myTable.rows[4].cells[1].textContent = "Valid Certifications/Trainings are found in the resume. Excellent job!";
        myTable.rows[4].cells[3].textContent = "";
        resume_match_count = resume_match_count + 1;


        localStorage.setItem('certification','Valid Certifications/Trainings are found in the resume. Excellent job!');

    } else {
        
        myTable.rows[4].cells[1].textContent = "No Valid certifications/Trainings found in the resume.";
        myTable.rows[4].cells[2].textContent = "";

        localStorage.setItem('certification','No Valid certifications/Trainings found in the resume.');

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
        myTable.rows[1].cells[1].textContent = "The resume shows linkedIn link " + result_linkedin[0] + "; This is highly appreciated!";
        myTable.rows[1].cells[3].textContent = "";
        resume_match_count = resume_match_count + 1;

        localStorage.setItem('linkedin','The resume shows LinkedIn link ' + result_linkedin[0] + ' This is highly appreciated!'); 
  
    } else {
        myTable.rows[1].cells[1].textContent = "The resume does not shows any linkedIn link; This is disappointing!";
        myTable.rows[1].cells[2].textContent = "";

        localStorage.setItem('linkedin','The resume does not shows any linkedIn link; This is disappointing!'); 
  
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

        localStorage.setItem('email','The resume shows email address ' + result_email[0] + ' This is highly appreciated!'); 
  
        
    } else {
        myTable.rows[0].cells[1].textContent = "The resume does not shows any email address; This is disappointing!";
        myTable.rows[0].cells[2].textContent = "";

        localStorage.setItem('email','The resume does not shows any email address; This is disappointing!'); 
  
    }
    /////hard skills/////
    var arr_found_hard_skills_posting = [];
    var arr_found_hard_skills_posting_index = 0;
    var arr_found_hard_skills_resume = [];
    var arr_found_hard_skills_resume_index = 0;
    var keyword="";
   
    
    localStorage.setItem("hard_skills_posting",JSON.stringify(["Required Keywords: "]));
    
    localStorage.setItem("hard_skills_resume",JSON.stringify(["Matched Keywords: "]));
    @foreach($hard_skills_keywords as $hard_skills_keyword)
    {
     
     keyword = '{{$hard_skills_keyword['hard_skill_keyword']}}';
     var found_posting = str_posting.search(keyword);
        if (found_posting > 0) {
            arr_found_hard_skills_posting[arr_found_hard_skills_posting_index] = keyword +', ';
            arr_found_hard_skills_posting_index++;
           
            var hard_skills_posting= JSON.parse(localStorage.getItem("hard_skills_posting"));
            hard_skills_posting.push(keyword);
            localStorage.setItem("hard_skills_posting",JSON.stringify(hard_skills_posting));
            var found_resume = str_resume.search(keyword);
            if (found_resume > 0) {
                arr_found_hard_skills_resume[arr_found_hard_skills_resume_index] = keyword + ', ';
                arr_found_hard_skills_resume_index++;

                var hard_skills_resume= JSON.parse(localStorage.getItem("hard_skills_resume"));
                hard_skills_resume.push(keyword);
              localStorage.setItem("hard_skills_resume",JSON.stringify(hard_skills_resume));
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

    localStorage.setItem("soft_skills_posting",JSON.stringify(["Required Keywords: "]));
    
    localStorage.setItem("soft_skills_resume",JSON.stringify(["Matched Keywords: "]));
    @foreach($soft_skills_keywords as $soft_skills_keyword)
    {
     keyword = '{{$soft_skills_keyword['soft_skill_keyword']}}';
     var found_posting = str_posting.search(keyword);
        if (found_posting > 0) {

          var soft_skills_posting= JSON.parse(localStorage.getItem("soft_skills_posting"));
          soft_skills_posting.push(keyword);
            localStorage.setItem("soft_skills_posting",JSON.stringify(soft_skills_posting));

          arr_found_soft_skills_posting[arr_found_soft_skills_posting_index] = keyword +', ';
          arr_found_soft_skills_posting_index++;
            var found_resume = str_resume.search(keyword);
            if (found_resume > 0) {

              var soft_skills_resume= JSON.parse(localStorage.getItem("soft_skills_resume"));
              soft_skills_resume.push(keyword);
            localStorage.setItem("soft_skills_resume",JSON.stringify(soft_skills_resume));


              arr_found_soft_skills_resume[arr_found_soft_skills_resume_index] = keyword + ', ';
              arr_found_soft_skills_resume_index++;
            }
        }
      }
    @endforeach

    
    
////Word cloud
/*  ======================= SETUP ======================= */
var config = {
    trace: true,
    spiralResolution: 1, //Lower = better resolution
    spiralLimit: 360 * 5,
    lineHeight: 0.8,
    xWordPadding: 0,
    yWordPadding: 3,
    font: "sans-serif"
}
var word_cloud_array = arr_found_soft_skills_resume.concat(arr_found_hard_skills_resume);
var words = word_cloud_array.map(function(word) {
    return {
        word: word,
        freq: Math.floor(Math.random() * 50) + 10
    }
})

word_cloud_array.sort(function(a, b) {
    return -1 * (a.freq - b.freq);
});

var cloud = document.getElementById("word-cloud");
cloud.style.position = "relative";
cloud.style.fontFamily = config.font;

var traceCanvas = document.createElement("canvas");
traceCanvas.width = cloud.offsetWidth;
traceCanvas.height = cloud.offsetHeight;
var traceCanvasCtx = traceCanvas.getContext("2d");
cloud.appendChild(traceCanvas);

var startPoint = {
    x: cloud.offsetWidth / 2,
    y: cloud.offsetHeight / 2
};

var wordsDown = [];
/* ======================= END SETUP ======================= */





/* =======================  PLACEMENT FUNCTIONS =======================  */
function createWordObject(word, freq) {
    var wordContainer = document.createElement("div");
    wordContainer.style.position = "absolute";
    wordContainer.style.fontSize = freq + "px";
    wordContainer.style.lineHeight = config.lineHeight;
/*    wordContainer.style.transform = "translateX(-50%) translateY(-50%)";*/
    wordContainer.appendChild(document.createTextNode(word));

    return wordContainer;
}

function placeWord(word, x, y) {

    cloud.appendChild(word);
    word.style.left = x - word.offsetWidth/2 + "px";
    word.style.top = y - word.offsetHeight/2 + "px";

    wordsDown.push(word.getBoundingClientRect());
}

function trace(x, y) {
//     traceCanvasCtx.lineTo(x, y);
//     traceCanvasCtx.stroke();
    traceCanvasCtx.fillRect(x, y, 1, 1);
}

function spiral(i, callback) {
    angle = config.spiralResolution * i;
    x = (1 + angle) * Math.cos(angle);
    y = (1 + angle) * Math.sin(angle);
    return callback ? callback() : null;
}

function intersect(word, x, y) {
    cloud.appendChild(word);    
    
    word.style.left = x - word.offsetWidth/2 + "px";
    word.style.top = y - word.offsetHeight/2 + "px";
    
    var currentWord = word.getBoundingClientRect();
    
    cloud.removeChild(word);
    
    for(var i = 0; i < wordsDown.length; i+=1){
        var comparisonWord = wordsDown[i];
        
        if(!(currentWord.right + config.xWordPadding < comparisonWord.left - config.xWordPadding ||
             currentWord.left - config.xWordPadding > comparisonWord.right + config.wXordPadding ||
             currentWord.bottom + config.yWordPadding < comparisonWord.top - config.yWordPadding ||
             currentWord.top - config.yWordPadding > comparisonWord.bottom + config.yWordPadding)){
            
            return true;
        }
    }
    
    return false;
}
/* =======================  END PLACEMENT FUNCTIONS =======================  */





/* =======================  LETS GO! =======================  */
(function placeWords() {
    for (var i = 0; i < words.length; i += 1) {

        var word = createWordObject(words[i].word, words[i].freq);

        for (var j = 0; j < config.spiralLimit; j++) {
            //If the spiral function returns true, we've placed the word down and can break from the j loop
            if (spiral(j, function() {
                    if (!intersect(word, startPoint.x + x, startPoint.y + y)) {
                        placeWord(word, startPoint.x + x, startPoint.y + y);
                        return true;
                    }
                })) {
                break;
            }
        }
    }
})();
/* ======================= WHEW. THAT WAS FUN. We should do that again sometime ... ======================= */



/* =======================  Draw the placement spiral if trace lines is on ======================= */
(function traceSpiral() {
    
    traceCanvasCtx.beginPath();
    
    if (config.trace) {
        var frame = 1;

        function animate() {
            spiral(frame, function() {
                trace(startPoint.x + x, startPoint.y + y);
            });

            frame += 1;

            if (frame < config.spiralLimit) {
                window.requestAnimationFrame(animate);
            }
        }

        animate();
    }
})();

////cloud ends

    //displying ATS average
    var average_bestpractices_perc = 0;
    if (resume_match_count>0) {
        average_bestpractices_perc = Math.round((resume_match_count / 5) * 100);
    } else {
        average_bestpractices_perc = 0;
    }
    
    document.getElementById('ats_match_average').innerHTML=" " + average_bestpractices_perc + "% ";
    //
    localStorage.setItem('ats_match',average_bestpractices_perc + "% ");

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
   
    document.getElementById('hard_skills_match').innerHTML=" " + matched_perc_hard_skills + "% ";
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
    
    document.getElementById('soft_skills_match').innerHTML=" " + matched_perc_soft_skills + "% ";
    ///final result
    var finalResult_perc = 0;
    
    finalResult_perc= Math.round((matched_perc_soft_skills+ matched_perc_hard_skills + average_bestpractices_perc) / 3);
    document.getElementById('results_percentage').innerHTML =finalResult_perc + "%";
    //result description

    var comment_result;
    
    if(finalResult_perc==100)
    {
      comment_result= "The resume is the absolute match for the corresponding job posting";
        document.getElementById('result_description').innerHTML =comment_result;
    }
    else if(finalResult_perc>=90 && finalResult_perc<100 )
    {

      comment_result= "The resume is the excellent match for the corresponding job posting";
        document.getElementById('result_description').innerHTML =comment_result;
        
    }
    else if(finalResult_perc>=75 && finalResult_perc<90)
    {

      comment_result= "The resume is the best match for the corresponding job posting";
        document.getElementById('result_description').innerHTML =comment_result;
       
       
    }
    else if(finalResult_perc>= 50 && finalResult_perc<75)
    {
      comment_result=  "The resume is the good match for the corresponding job posting";
        document.getElementById('result_description').innerHTML =comment_result;
       
    }
    else if(finalResult_perc>= 30 && finalResult_perc<50)
    {

      comment_result= "The resume is the average match for the corresponding job posting";
        document.getElementById('result_description').innerHTML =comment_result;
       
        
    }
    else if(finalResult_perc>=10 && finalResult_perc<30)
    {

      comment_result= "The resume is not good match for the corresponding job posting";
        document.getElementById('result_description').innerHTML =comment_result;
       
    }
    else if(finalResult_perc>=0 && finalResult_perc<10)
    {
      comment_result="The resume is the worst match for the corresponding job posting";
        document.getElementById('result_description').innerHTML =comment_result;
        
    }

//progress bar
var progressBarVal=finalResult_perc;    
   var html="<div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow="+progressBarVal+" aria-valuemin='0' aria-valuemax='100' style='width:"+progressBarVal+"%'>"+progressBarVal+"%</div>";    
   $(".progress").append(html);    

   localStorage.setItem('overallmatch',finalResult_perc + '%');
  
  //ats progress
  
  var progressBarVal_ats=average_bestpractices_perc;    
   var html="<div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow="+progressBarVal_ats+" aria-valuemin='0' aria-valuemax='100' style='width:"+progressBarVal_ats+"%'>"+progressBarVal_ats+"%</div>";    
   $(".ats_progress").append(html);
   
   //hard skills progress
  
  var progressBarVal_hardskills=matched_perc_hard_skills;    
   var html="<div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow="+progressBarVal_hardskills+" aria-valuemin='0' aria-valuemax='100' style='width:"+progressBarVal_hardskills+"%'>"+progressBarVal_hardskills+"%</div>";    
   $(".hard_skills_progress").append(html);
   localStorage.setItem('hard_skills_match',matched_perc_hard_skills + '%');
   hard_skills_match
   //soft skills progress
  
  var progressBarVal_softskills=matched_perc_soft_skills;    
   var html="<div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow="+progressBarVal_softskills+" aria-valuemin='0' aria-valuemax='100' style='width:"+progressBarVal_softskills+"%'>"+progressBarVal_softskills+"%</div>";    
   $(".soft_skills_progress").append(html);

   localStorage.setItem('soft_skills_match',matched_perc_soft_skills + '%');

  localStorage.setItem('result_description', comment_result);
 
}

initialise()
</script>
</main>
</body>
@endsection
