<?php
$path = "../";
$page = "Choose your Journey";
include($path . "inc/navbar.php");
?>
<div class="tutorial">
    <h1>Choose your UNIX journey</h1>
    <p>
        These guides have follow-along examples for those new to UNIX.
        There are several ways you can get started with your UNIX journey.
        Alternatively, you may wish to skip to the first tutorial.
    </p>
    <div class="choose">
        <a href="linux/">
            <div class="chooseOption">
                Linux
            </div>
        </a>
        <a href="ssh/">
            <div class="chooseOption">
                SSH
            </div>
        </a>
        <a href="macos/">
            <div class="chooseOption">
                macOS Terminal
            </div>
        </a>
        <a href="wsl/">
            <div class="chooseOption">
                WSL
            </div>
        </a>
        <a href="[TEMP]-TUTORIAL-1">
            <div class="chooseOption">
                I don't care, let's get on with it!
            </div>
        </a>
    </div>
</div>

