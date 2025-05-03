<?php
$path = "../../";
$page = "Getting Started - macOS";
include($path . "inc/navbar.php");
?>
<div class="tutorial">
    <h1>macOS Terminal</h1>
    <p>
        There’s a few things to note about macOS compared to other typical Unix distributions.
        For one, macOS XNU Kernel is based on an older version of Berkeley Software Distribution (BSD), whereas most modern Linux distros use bash.
        Thus, some commands will differ slightly, though typically just in their options.<br>
        Another thing is that macOS doesn’t come with a package manager (If you’re unsure of what this is, don’t worry too much about it - We’ll come back to it later).
        If you need a package manager, the most popular one for macs is Brew.<br>
        To open Terminal, simply open the application from Launchpad (it’s likely to be located in a folder called “other”).<br>
        Or, type “Terminal.app” into Spotlight search.
    </p>
    <p>
        Let’s continue to the first topic, Basic File operations.
    </p>
</div> 
<?php
include($path . "inc/footer.php");
?>
