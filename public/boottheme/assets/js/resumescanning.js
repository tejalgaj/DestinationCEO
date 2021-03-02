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

    document.getElementById('container_scan').style.display = "block";
    var myTable = document.getElementById("myTable");
    /*characters count*/
    myTable.rows[5].cells[1].textContent = "Character count of resume: " + numChars;


    var str_resume_match = document.getElementById('about-yourself').value;
    var arr_resume_match = str_resume_match.split(' ');

    var str_resume = document.getElementById('about-yourself').value;
    var str_resume = str_resume.toLocaleLowerCase();

    var str_posting = document.getElementById('your-proposal').value;

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
        console.log("Job title Found");
        myTable.rows[2].cells[1].textContent = "The job title described : " + str_job_title + " matches with the resume. Excellent!";
        resume_match_count = resume_match_count + 1;
        myTable.rows[2].cells[3].textContent = "";
    } else {
        console.log("Not Found");
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
        console.log("Education found");

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
            console.log("Professional degree found");
            myTable.rows[3].cells[1].textContent = "Education is found in the resume. Professional degree is there. Excellent job!";
            myTable.rows[3].cells[3].textContent = "";
            resume_match_count = resume_match_count + 1;
        } else {
            console.log("Professional degree not found");
            myTable.rows[3].cells[1].textContent = "Education is found in the resume. Professional degree is not there.";
            myTable.rows[3].cells[3].textContent = "";
        }
    } else {
        console.log("Education Not Found");

        myTable.rows[3].cells[1].textContent = "No Education related information found. ";
        myTable.rows[3].cells[2].textContent = "";
    }

    //experience

    var found_experience = str_resume.search("experience");
    if (found_experience > 0) {
        console.log("Experience found");

        myTable.rows[4].cells[1].textContent = "Valid Experience is found in the resume. Excellent job!";
        myTable.rows[4].cells[3].textContent = "";
        resume_match_count = resume_match_count + 1;
    } else {
        console.log("Experience not found");
        myTable.rows[4].cells[1].textContent = "No Valid Experience found in the resume.";
        myTable.rows[4].cells[2].textContent = "";
    }

    //Certifications
    var found_certifications = false;
    var arr_resume_previous_hard_skills = str_resume.split('\n');
    var arr_resume_withoutspaces_hard_skills = arr_resume_previous_hard_skills.map(el => el.trim());
    var arr_resume_final_hard_skills = arr_resume_withoutspaces_hard_skills.map(v => v.toLowerCase());
    for (var i = 0; i < arr_resume_final_hard_skills.length; i++) {

        var temp_posting_str = arr_resume_final_hard_skills[i];
        var temp_posting_arr = temp_posting_str.split(',');
        var temp_posting_arr_withoutspaces = temp_posting_arr.map(el => el.trim());
        for (var j = 0; j < temp_posting_arr_withoutspaces.length; j++) {
            console.log(temp_posting_arr_withoutspaces[j]);
            if (temp_posting_arr_withoutspaces[j].search("certifications") || temp_posting_arr_withoutspaces[j].search("certifications:") || temp_posting_arr_withoutspaces[j].search("certificates") || temp_posting_arr_withoutspaces[j].search("certificate") || temp_posting_arr_withoutspaces[j].search("certification") || temp_posting_arr_withoutspaces[j].search("certificates:")) {
                found_certifications = true;
            }
        }
    }
    if (found_certifications == true) {
        console.log("Certifications found");
    } else {
        console.log("Certifications not found");
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
            console.log(result_linkedin[0]);
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
            console.log(result[0]);
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

    /*Match hard skills*/
    var arr_resume_previous_hard_skills = str_resume.split('\n');
    var arr_resume_withoutspaces_hard_skills = arr_resume_previous_hard_skills.map(el => el.trim());
    var arr_resume_final_hard_skills = arr_resume_withoutspaces_hard_skills.map(v => v.toLowerCase());

    var arr_posting_previous_hard_skills = str_posting.split('\n');
    var arr_posting_withoutspaces_hard_skills = arr_posting_previous_hard_skills.map(el => el.trim());
    var arr_posting_final_hard_skills = arr_posting_withoutspaces_hard_skills.map(v => v.toLowerCase());


    /*
        var hard_skills = ["html", "css", "php", "javascript", "java", "ajax"];
        for (var i = 0; i < arr_posting_final_hard_skills.length; i++) {
            var temp_posting_str = arr_posting_final_hard_skills[i];
            var temp_posting_arr = temp_posting_str.split(',');
            var temp_posting_arr_withoutspaces = temp_posting_arr.map(el => el.trim());
            for (var temp = 0; temp < temp_posting_arr_withoutspaces.length; temp++) {
                console.log(temp_posting_arr_withoutspaces[temp])
            }
        }

        for (var j = 0; j < arr_resume_final_hard_skills.length; j++) {

            var temp_resume_str = arr_resume_final_hard_skills[j];
            var temp_resume_arr = temp_resume_str.split(',');
            var temp_resume_arr_withoutspaces = temp_resume_arr.map(el => el.trim());
            for (var temp = 0; temp < temp_resume_arr_withoutspaces.length; temp++) {

                console.log(temp_resume_arr_withoutspaces[temp]);
            }

        }
    */

    var hard_skills = ["html", "mysql", "cloud", "css", "php", "javascript", "java", "ajax", "sql", "c", "c++", "adobe flex", "asp", "jsp", "olap tools", "perl", "python", "ruby", "sas", "xml"];
    var filetered_hard_skills = [];
    var num = 0;
    for (var i = 0; i < arr_posting_final_hard_skills.length; i++) {
        var temp_posting_str = arr_posting_final_hard_skills[i];
        var temp_posting_arr = temp_posting_str.split(',');
        var temp_posting_arr_withoutspaces = temp_posting_arr.map(el => el.trim());
        for (var temp = 0; temp < temp_posting_arr_withoutspaces.length; temp++) {
            var posting_char = temp_posting_arr_withoutspaces[temp];

            for (var k = 0; k < hard_skills.length; k++) {
                if (posting_char == hard_skills[k]) {

                    filetered_hard_skills[num] = posting_char;
                    num++;


                }
            }
        }

    }
    var resume_matched_hard_skills = [];
    var index = 0;
    for (var j = 0; j < arr_resume_final_hard_skills.length; j++) {

        var temp_resume_str = arr_resume_final_hard_skills[j];
        var temp_resume_arr = temp_resume_str.split(',');
        var temp_resume_arr_withoutspaces = temp_resume_arr.map(el => el.trim());
        for (var temp = 0; temp < temp_resume_arr_withoutspaces.length; temp++) {
            for (var k = 0; k < filetered_hard_skills.length; k++) {
                if (temp_resume_arr_withoutspaces[temp] == filetered_hard_skills[k]) {
                    resume_matched_hard_skills[index] = filetered_hard_skills[k];
                    console.log(filetered_hard_skills[k]);
                    index++;
                }
            }
        }
    }
    var required_hard_skills_count = filetered_hard_skills.length;
    //console.log(filetered_hard_skills);
    //console.log(arr_resume_final_hard_skills);
    //console.log(arr_posting_final_hard_skills);
    var myTableHardSkills = document.getElementById("myTableHardSkills");
    myTableHardSkills.rows[0].cells[1].textContent = "";

    for (var i = 0; i < filetered_hard_skills.length; i++) {
        myTableHardSkills.rows[0].cells[1].textContent = myTableHardSkills.rows[0].cells[1].textContent + " " + filetered_hard_skills[i];
    }

    function onlyUnique(value, index, self) {
        return self.indexOf(value) === index;
    }

    var unique_hardskills = resume_matched_hard_skills.filter(onlyUnique);

    var matched_hard_skills_count = unique_hardskills.length;
    myTableHardSkills.rows[1].cells[1].textContent = "";
    for (var i = 0; i < unique_hardskills.length; i++) {
        myTableHardSkills.rows[1].cells[1].textContent = myTableHardSkills.rows[1].cells[1].textContent + " " + unique_hardskills[i];
    }

    var matched_perc_hard_skills = Math.round((matched_hard_skills_count / required_hard_skills_count) * 100);
    myTableHardSkills.rows[2].cells[1].textContent = " " + matched_perc_hard_skills + "% ";
    document.getElementById('results_percentage').innerHTML = Math.round((matched_perc_hard_skills + (resume_match_count / 5) * 100) / 2) + "%";

}
initialise()