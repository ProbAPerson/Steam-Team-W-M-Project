<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title><?php echo $page ?></title>
    <link rel="stylesheet" href="assets/styles.css">
    <!-- <script src="assets/scripts.js"></script>   Add when we add js-->
</head>
<body>
    <nav>
        <div class="topbarnav">
            <h1>Steam Team Unix Tutorial</h1>
        </div>
        <div class="bottombarnav">
            <!-- x5 or however many links, make sure to space evenly 
             The reason for the php is to use css to style it differently in the nav when actively on this page-->
            <a href="quiz.php" class="<?php echo ($page == 'Quiz')? 'activenav' : ''; ?>">Quiz</a>
        </div>
    </nav>