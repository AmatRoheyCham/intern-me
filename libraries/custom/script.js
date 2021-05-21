
function displayCompanySignup(){
    document.getElementById("studentsForm").style.display = "none";
    document.getElementById("mentorsForm").style.display = "none";
    document.getElementById("companiesForm").style.display = "block";

}

function displayStudentSignup(){
    document.getElementById("companiesForm").style.display = "none";
    document.getElementById("mentorsForm").style.display = "none";
    document.getElementById("studentsForm").style.display = "block";
}

function displayMentorSignup(){
    document.getElementById("studentsForm").style.display = "none";
    document.getElementById("companiesForm").style.display = "none";
    document.getElementById("mentorsForm").style.display = "block";

}
