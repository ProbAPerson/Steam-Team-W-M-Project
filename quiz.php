<?php
$path = "./";
$page = "Quiz";
include($path . "inc/header.php");
include('../../../dbConn.php'); 
?>
        <h2>Quiz</h2>
        <div class="questions"> 
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="quizform"> <!--Add onsubmit="return validateForm();" validateForm() function should also checkAnswers() if true-->
                <?php 
                    $result = $mysqli -> query('SELECT * FROM questions_bank'); 
                    $data = [];
                    $questions = [];
                    $answerAs = [];
                    $answerBs = [];
                    $answerCs = [];
                    $answerDs = [];
                    $answerKeys = []; //everything needs to be in the same index order for answer keys to work 
                    // fetches everything from questions bank, sorts into arrays, and randomly chooses ten of the items to put in the form
                    while ($row = $result->fetch_assoc()) {
                        $data[] = $row; 
                    } // I know its so many arrays I'm sorry
                    foreach ($data as $row) {
                        $questions[] = $row['question'];
                        $answerAs[] = $row['answerA'];
                        $answerBs[] = $row['answerB'];
                        $answerCs[] = $row['answerC'];
                        $answerDs[] = $row['answerD'];
                        $answerKeys[] = $row['answerkey']; //Also, the answerkey is an int for index comparison purposes (e.g. 3 = C)
                    }
                    $selectedQuestions = []; //checks if the randomly picked question num has already been picked
                    for ($x = 0; $x < 10; $x++) { //displays 10 out of 19 questions
                        $questionNum = rand(0, 19);
                        while (in_array($questionNum, $selectedQuestions)){
                            $questionNum = rand(0, 19);
                        }
                        $selectedQuestions = [$questionNum];
                        echo "<div class='questionBox'>" . 
                        $questions[$questionNum] . "<fieldset id='question'>" . 
                        $answerAs[$questionNum] . $answerBs[$questionNum] . $answerCs[$questionNum] . $answerDs[$questionNum] . 
                        "</fieldset></div>";
                    }
                ?>
                <textarea name="name" id="name" placeholder="Jennie was here"></textarea>
                <input type="submit" value="Check answers">
            </form>
            <p id="score"></p> <!-- Use DHTML/ innerHTML here in order to update text with score OR show error message if not everything is filled out -->
        </div>
    </body>
</html>