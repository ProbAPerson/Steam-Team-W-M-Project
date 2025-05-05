<?php
$path = "./";
$page = "Quiz";
include($path . "inc/navbar.php");
include('dbCon.php'); 

session_start();

function sanitize($str){
    $trimmed_str = trim($str);
    $cleaned_str = htmlentities($trimmed_str);
    return $cleaned_str;
}
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
if (isset($_POST['name'])) {
    $name = sanitize($_POST['name']);
    $score = 0;
    $answeredCount = 0;
    foreach ($answerKeys as $questionIndex => $correctAnswer) {
        if (isset($_POST["answer_$questionIndex"])) {
            $answeredCount++;
            $userAnswer = intval($_POST["answer_$questionIndex"]);
            if ($userAnswer === intval($correctAnswer)) {
                $score++;
            }
        }
    }
    if($answeredCount === 10){
        $_SESSION['latest_score'] = $score;
        $entry = $mysqli -> prepare("INSERT INTO `leaderboard` (`name`, `score`) VALUES (?, ?)");
        $entry -> bind_param("si", $name, $score);
        $entry -> execute();
        $entry -> close();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}
?>
    <body>
    <div class="quiz">
        <div class="questions"> 
            <h2>Quiz</h2>
            <form method="POST" id="quizform" onsubmit="return validateForm();"> <!--action="php echo $_SERVER['PHP_SELF'];" this erases score display though -->
                <?php 
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
                <textarea name="name" id="quizname" placeholder="Your name here!"></textarea>
                <input type="submit" value="Check answers">
            </form>
            <?php
                if (isset($_SESSION['latest_score'])) {
                    echo "<p id='score'>Your last score: {$_SESSION['latest_score']}</p>";
                    unset($_SESSION['latest_score']); 
                }else{
                    echo "<p id='score'></p>";
                }
            ?> <!-- DHTML/ innerHTML used here in order to update text with score OR show error message if not everything is filled out -->
        </div>
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
<?php
    $mysqli->close();
?>
