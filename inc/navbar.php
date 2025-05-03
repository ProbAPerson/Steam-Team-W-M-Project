<?php
// dynamic page names
$requestUri = $_SERVER['REQUEST_URI'];
$path = parse_url($requestUri, PHP_URL_PATH);
$pathSegments = explode('/', trim($path, '/'));
$currentPage = !empty($pathSegments[0]) ? $pathSegments[0] : 'home';
$pageNames = [
    'home' => 'Home',
    'topic-1' => 'Topic 1',
    'topic-2' => 'Topic 2',
    'topic-3' => 'Topic 3',
    'topic-4' => 'Topic 4',
    'topic-5' => 'Topic 5',
    'choose-your-journey' => 'Choose Your Journey',
    'linux' => 'Linux',
    'macos' => 'MacOS',
    'ssh' => 'SSH',
    'wsl' => 'WSL',
    'history' => 'History',
    'apple-and-unix' => 'Apple & Unix',
    'quiz' => 'Quiz'
];
$currentPageName = $pageNames[$currentPage] ?? 'Page';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
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
                </ul>
            </li>
            <li class="nav-item">
                <a href="https://solace.ist.rit.edu/~iste240t21/Steam-Team-W-M-Project/quiz.php" class="">Quiz</a>
            </li>
        </ul>
    </div>
</nav>
