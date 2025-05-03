<?php
//dynamic names
$currentPage = basename($_SERVER['SCRIPT_NAME']);
$requestUri = $_SERVER['REQUEST_URI'];
    $pageNames = [
        // enter pagenames in this format 'page.php' => 'Page',
    ];
    $currentPageName = $pageNames[$currentPage] ?? 'Page';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $currentPageName ?></title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="scripts.js"></script>
</head>
<nav class="navbar">
    <div class="navContainer">
        <span class="name">
            <?php echo $currentPageName; ?>
        </span>
<!--Home Item-->
        <ul class="navLinks">
            <li class="nav-item">
            </li>
<!--item 2-->
            <li class="nav-item">
                <ul class="dropdown">
                </ul>
            </li>
<!--item 3-->
            <li class="nav-item">
                <ul class="dropdown">
                </ul>
            </li>
<!--item 4-->
            <li class="nav-item">
            </li>
        </ul>
    </div>
</nav>
