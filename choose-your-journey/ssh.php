<?php
$path = "../";
$page = "Getting Started - SSH";
include($path . "inc/navbar.php");
?>
<div class="tutorial">
    <h1>SSH</h1>
    <p>
        SSH (Secure Shell), at a simple level, is used to run commands on another computer over a network.
        Use this if you have a separate Unix computer you wish to connect to, or if you’re in an organization that has unix machines on their network.
    </p>
    <h2>Windows</h2>
    <p>
        To SSH to a Unix machine from a Windows machine, use Microsoft Powershell.
        Open-ssh is included in modern Windows installations.
        You can ensure it’s installed with ssh -V.
    </p>
    <h2>macOS</h2>
    <p>
        You can SSH to a Unix machine from macOS using the built-in terminal.
    </p>
    <h2>Linux</h2>
    <p>
        As long as you have an ssh package installed, you can ssh from your terminal.
        If you’re unsure if you have it installed, just type ssh into your terminal and hit enter.
    </p>
    <p>
        Now, to SSH, use this:
        <p class="codeExample">[username]@[machine’s address]</p>
        It’ll ask for your password. You’ll note that you won't receive feedback as you type, but the keys you press are still being entered.
    </p>
    <p>
        Once connected, you can proceed to our first topic, <a href="../topics/t1.php">Basic File Operations</a>.
    </p>
</div>

