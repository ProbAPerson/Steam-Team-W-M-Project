<?php
$path = "../";
$page = "Getting Started - WSL";
include($path . "inc/navbar.php");
?>
<div class="tutorial">
    <h1>WSL</h1>
    <p>
        Windows Subsystem for Linux is a way of using UNIX’s command line tools through a Linux distro installed in Windows 10 or Windows 11.
        The default WSL distro is Ubuntu.
    </p>
    <h2>How to Install:</h2>
    <p>
        Open Powershell or Command Prompt in administrator mode.<br>
        Run this command:
        <p class="codeExample">
            wsl --install
        </p>
        Restart your machine once this command finishes.<br>
        To open WSL, simply run the command wsl in PowerShell or Command Prompt<br>
        If you wish to use a different distro in WSL, you can use:
        <p class="codeBlock">wsl –list –online</p>
        <div class="imageContainer">
            <img src="../images/wsl1.png" alt="Windows Command Prompt">
        </div>
        That will give you a list of distros you can choose from. Then, run:
        <p class="codeBlock">wsl –install -d [distro name]</p>
        <div class="imageContainer">
            <img src="../images/wsl2.png" alt="Windows Command Prompt">
        </div>
    </p>
    <p>
        Now, let's continue to the first topic, <a href="../topics/t1.php">Basic file operations</a>.
    </p>
</div>

