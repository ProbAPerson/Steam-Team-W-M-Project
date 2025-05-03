
function validateForm() {
    let name = document.getElementById("quizname").value;
    if (name === ""){
        var scoremsg = document.getElementById("score"); 
        scoremsg.innerHTML = "Error: Please answer all questions.";
        scoremsg.style.color = "red";
        scoremsg.style.display = "block";
        return false;
    }else{
        scoremsg.style.color = "green";
        scoremsg.style.display = "block";
        return true;
    }
}