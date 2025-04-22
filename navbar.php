<?php
//dynamic names
$currentPage = basename($_SERVER['SCRIPT_NAME']);
$requestUri = $_SERVER['REQUEST_URI'];
    $pageNames = [
        // enter pagenames in this format 'page.php' => 'Page',
    ];
    $currentPageName = $pageNames[$currentPage] ?? 'Page';
?>
<nav class="navbar">
    <div class="navContainer">
        <span class="name">
            <?php echo $currentPageName; ?>
        </span>

        <ul class="navLinks">
            <li class="nav-item">
            </li>

            <li class="nav-item">
                <ul class="dropdown">
                </ul>
            </li>

            <li class="nav-item">
                <ul class="dropdown">
                </ul>
            </li>

            <li class="nav-item">
            </li>
        </ul>
    </div>
</nav>
