<?php
// dynamic page names
//dynamic names
$currentPage = basename($_SERVER['SCRIPT_NAME']);
$requestUri = $_SERVER['REQUEST_URI'];
    $pageNames = [
        'index.php' => 'Home',
        't1.php' => 'Topic 1',
        't2.php' => 'Topic 2',
        't3.php' => 'Topic 3',
        't4.php' => 'Topic 4',
        't5.php' => 'Topic 5',
        'wc.php' => 'Why Care',
        'quiz.php' => 'Quiz',
        'hs.php' => 'History',
        'au.php' => 'Apple & Unix',
        'cyj.php' => 'Choose your Journey',
        'ssh.php' => 'SSH',
        'mos.php' => 'MacOS',
        'lx.php' => 'Linux',
        'wsl.php' => 'WSL'

    ];
$currentPageName = $pageNames[$currentPage] ?? 'Page';
?>
<!DOCTYPE html>
<html>
<head> <!-- head -->
    <meta charset="UTF-8" />
    <title> <?php echo $currentPageName; ?></title>
    <link rel="stylesheet" href="../styles.css">
    <script src="../scripts.js"></script>
</head>
<nav class="navbar">
    <div class="navContainer">
        <span class="name">
            <?php echo $currentPageName; ?>
        </span>
<!--Home Item-->
        <ul class="navLinks">
            <li class="nav-item">
                <a href="https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/" class="active">Home</a>\
            </li>
<!--item 2-->
            <li class="nav-item">
                <a class = "">Topics</a>
                <ul class="dropdown">
                <a href = "https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/topic-1/" class = "">Topic 1</a>
                <a href = "https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/topic-2/" class = "">Topic 2</a>
                <a href = "https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/topic-3/" class = "">Topic 3</a>
                <a href = "https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/topic-4/" class = "">Topic 4</a>
                <a href = "https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/topic-5/" class = "">Topic 5</a>
                </ul>
            </li>
<!--item 3-->
            <li class="nav-item">
                <a href = "https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/choose-your-journey/" class = "">Choose your journey</a>
                <ul class="dropdown">
                <a href = "https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/choose-your-journey/linux/" class = "">Linux</a>
                <a href = "https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/choose-your-journey/macos/" class = "">MacOS</a>
                <a href = "https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/choose-your-journey/ssh/" class = "">SSH</a>
                <a href = "https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/choose-your-journey/wsl/" class = "">WSL</a>
                </ul>
            </li>
<!--item 4-->
            <li class="nav-item">
            <a href = "https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/history/" class = "">History</a>
            <ul class="dropdown">
                <a href = "https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/history/apple-and-unix/" class = "">Apple and Unix</a>
                <a href = "https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/why-care/" class = "">Why Care?</a>
                </ul>
            </li>
            <li class="nav-item">
                <a href="https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/quiz.php" class="">Quiz</a>
            </li>
        </ul>
    </div>
</nav>
