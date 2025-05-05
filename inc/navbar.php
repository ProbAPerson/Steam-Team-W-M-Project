<?php
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
    <link rel="stylesheet" href="<?= $path ?>styles.css">
    <script src="<?php $path ?>scripts.js"></script>
    <!--Google moment-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Public+Sans:ital,wght@0,100..900;1,100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gothic+A1&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Public+Sans:ital,wght@0,100..900;1,100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <!--End Google moment-->
</head>
<header>
        <h1>Steam Team UNIX Survival Guide</h1>
</header>
<button id="bttBTN" title="back to top">^</button>
<nav class="navbar">
    <div class="navContainer">
        <span class="name">
            <?php echo $currentPageName; ?>
        </span>
<!--Home Item-->
        <ul class="navLinks">
            <li class="nav-item">
                <a href="https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/" class="active">Home</a>
            </li>
<!--item 2-->
            <li class="nav-item">
                <a class = "">Topics</a>
                    <ul class="dropdown">
                    <li><a href = "https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/topics/t1.php" class = "">File Operations</a></li>
                    <li><a href = "https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/topics/t2.php" class = "">Text Editors</a></li>
                    <li><a href = "https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/topics/t3.php" class = "">File Permissions</a></li>
                    <li><a href = "https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/topics/t4.php" class = "">Management</a></li>
                    <li><a href = "https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/topics/t5.php" class = "">File Transfers</a></li>
                </ul>
            </li>
<!--item 3-->
            <li class="nav-item">
                <a href = "https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/choose-your-journey/cyj.php" class = "">Choose your journey</a>
                <ul class="dropdown">
                    <li><a href = "https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/choose-your-journey/lx.php" class = "">Linux</a></li>
                    <li><a href = "https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/choose-your-journey/mos.php" class = "">MacOS</a></li>
                    <li><a href = "https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/choose-your-journey/ssh.php" class = "">SSH</a></li>
                    <li><a href = "https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/choose-your-journey/wsl.php" class = "">WSL</a></li>
                </ul>
            </li>
<!--item 4-->
            <li class="nav-item">
            <a href = "https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/history/hs.php" class = "">History</a>
            <ul class="dropdown">
                <li><a href = "https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/history/au.php" class = "">Apple and Unix</a></li>
                <li><a href = "https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/why-care/wc.php" class = "">Why Care?</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/quiz.php" class="">Quiz</a>
            </li>
        </ul>
    </div>
</nav>
