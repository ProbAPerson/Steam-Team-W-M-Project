<?php
$path = "./";
$page = "Quiz";
include($path . "navbar.php");
include('dbCon.php'); 
?>
    <body>
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
                    } // I know its so many arrays its more organized this way for answer-checking and selecting 
                    foreach ($data as $row) {
                        $questions[] = $row['question'];
                        $answerAs[] = $row['answerA'];
                        $answerBs[] = $row['answerB'];
                        $answerCs[] = $row['answerC'];
                        $answerDs[] = $row['answerD'];
                        $answerKeys[] = $row['answerKey']; //Also, the answerkey is an int for index comparison purposes (e.g. 3 = C)
                    }
                    $selectedQuestions = []; //checks if the randomly picked question num has already been picked
                    for ($x = 0; $x < 10; $x++) { //displays 10 out of 19 questions
                        $questionNum = rand(0, 18);
                        while (in_array($questionNum, $selectedQuestions)){
                            $questionNum = rand(0, 18);
                        }
                        $selectedQuestions[] = $questionNum;
                        echo "<div class='questionBox'>
                        <p>{$questions[$questionNum]}</p>
                        <fieldset id='question'>";
                        echo "<label><input type='radio' name='answer_$questionNum' value='1'> {$answerAs[$questionNum]}</label><br>";
                        echo "<label><input type='radio' name='answer_$questionNum' value='2'> {$answerBs[$questionNum]}</label><br>";
                        echo "<label><input type='radio' name='answer_$questionNum' value='3'> {$answerCs[$questionNum]}</label><br>";
                        echo "<label><input type='radio' name='answer_$questionNum' value='4'> {$answerDs[$questionNum]}</label>";
                        echo "</fieldset></div>";
                    }
                ?>
                <textarea name="name" id="quizname" placeholder="Jennie was here"></textarea>
                <input type="submit" value="Check answers">
            </form>
            <p id="score"></p> <!-- Use DHTML/ innerHTML here in order to update text with score OR show error message if not everything is filled out -->
        </div>
        <div id="leaderboard">
            <h2>Leaderboard</h2>
                <!--Takes the first 10 highest scores from leaderboard db and displays in a table -->
            <?php
                $leaderboard_result = $mysqli -> query('SELECT * FROM leaderboard ORDER BY score LIMIT 10');
                if ($leaderboard_result) {
                    echo "<table border='1'>";
                    echo "<tr><th>Name</th><th>Score</th></tr>";
                    while ($row = $leaderboard_result -> fetch_assoc()) {
                        echo "<tr><td>{$row['name']}</td><td>{$row['score']}</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p>No leaderboard data found.</p>";
                }
            ?>
        </div>
    </body>
</html>
<?php
    $mysqli->close();
?>