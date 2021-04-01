function genPDF() {
    var doc = new jsPDF();
    doc.setFontSize(10);
    doc.setFontSize(22);
    doc.text(75, 20, 'SCANNING REPORT');
    doc.setFontSize(18);
    doc.text(60, 40, 'OVERALL MATCH RESULTS :' + localStorage.getItem('overallmatch'));
    doc.setDrawColor(255, 0, 0);
    doc.line(15, 30, 200, 30);

    doc.setDrawColor(255, 0, 0);
    doc.line(15, 50, 200, 50);
    doc.setFontSize(15);
    doc.text(90, 60, 'ATS MATCH:' + localStorage.getItem('ats_match'));

    doc.text(10, 70, '');
    doc.setFontSize(13);
    doc.text(10, 80, 'RESUME WORD COUNT: ' + localStorage.getItem('number Chars'));
    doc.text(10, 90, 'LINKED IN MATCH:');
    doc.setFontSize(10);
    doc.text(10, 100, localStorage.getItem('linkedin'));
    doc.setFontSize(13);
    doc.text(10, 110, 'JOB TITLE MATCH:');
    doc.setFontSize(10);
    doc.text(10, 120, localStorage.getItem('job title'));
    doc.setFontSize(13);
    doc.text(10, 130, 'EMAIL MATCH:');
    doc.setFontSize(10);
    doc.text(10, 140, localStorage.getItem('email'));
    doc.setFontSize(13);
    doc.text(10, 150, 'EDUCATION MATCH:');
    doc.setFontSize(10);
    doc.text(10, 160, localStorage.getItem('education'));
    doc.setFontSize(13);
    doc.text(10, 170, 'EXPERIENCE MATCH:');
    doc.setFontSize(10);
    doc.text(10, 180, localStorage.getItem('experience'));
    doc.setFontSize(13);
    doc.text(10, 190, 'CERTIFICATIONS/TRAININGS MATCH:');
    doc.setFontSize(10);
    doc.text(10, 200, localStorage.getItem('certification'));



    doc.addPage();
    doc.setFontSize(15);
    doc.setDrawColor(255, 0, 0);
    doc.line(15, 30, 200, 30);
    doc.setDrawColor(255, 0, 0);
    doc.line(15, 50, 200, 50);
    doc.text(80, 40, 'HARD SKILLS MATCH :' + localStorage.getItem('hard_skills_match'));
    doc.setFontSize(13);
    doc.text(20, 60, 'Hard Skills Required:');
    doc.setFontSize(10);
    var hard_skills_posting = (localStorage.getItem("hard_skills_posting"));
    doc.text(20, 70, hard_skills_posting);
    doc.setFontSize(13);
    doc.text(20, 80, 'Hard Skills Matched:');
    doc.setFontSize(10);
    var hard_skills_resume = (localStorage.getItem("hard_skills_resume"));
    doc.text(20, 90, hard_skills_resume);

    doc.setDrawColor(255, 0, 0);
    doc.line(15, 100, 200, 100);
    doc.setDrawColor(255, 0, 0);
    doc.line(15, 120, 200, 120);
    doc.setFontSize(15);
    doc.text(80, 110, 'SOFT SKILLS MATCH :' + localStorage.getItem('soft_skills_match'));
    doc.setFontSize(13);
    doc.text(20, 130, 'Soft Skills Required:');
    doc.setFontSize(10);
    var soft_skills_posting = (localStorage.getItem("soft_skills_posting"));
    doc.text(20, 140, soft_skills_posting);
    doc.setFontSize(13);
    doc.text(20, 150, 'Soft Skills Matched:');
    doc.setFontSize(10);
    var soft_skills_resume = (localStorage.getItem("soft_skills_resume"));

    doc.text(20, 160, soft_skills_resume);
    doc.save('ScanningResults.pdf');
}