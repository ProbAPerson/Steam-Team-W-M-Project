
function validateForm() {
    let name = document.getElementById("quizname").value;
    let radios = document.getElementById("quizform").querySelectorAll('input[type="radio"]');
    var scoremsg = document.getElementById("score");
    let questionsAnswered = [];
    radios.forEach(radio => {
        if (radio.checked) {
            const questionId = radio.name;
            questionsAnswered.push(questionId);
        }
    });
    if (name === "" || questionsAnswered.length < 10){ 
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