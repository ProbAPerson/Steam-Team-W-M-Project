<?php
$path = "./";
$page = "Quiz";
include($path . "inc/header.php");
?>
        <h2>Quiz</h2>
        <div class="questions">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="quizform"> <!--Add onsubmit="return validateForm();" validateForm() function should also checkAnswers() if true-->
                <div class="questionBox">



                </div>
                <div class="questionBox">



                </div>
                <!--As many boxes as questions -->


                <input type="submit" value="Check answers">
            </form>
            <p id="score">Score</p> <!-- Use DHTML/ innerHTML here in order to update text with score OR show error message if not everything is filled out -->
        </div>
    </body>
</html>