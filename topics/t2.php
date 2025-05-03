<?php
$path = "../";
$page = "Topic 2";
include($path . "inc/header.php");
?>
<div class="tutorial">
    <h1>Text editors</h1>
    <p>
        Unix Text editors allow you to edit files directly within your terminal.
        They’re lightweight, and it makes editing files over SSH incredibly easy.
        Two of the most common text editors in Unix are VIM and Nano.
        Nano is straightforward and easy to use, much like a notepad application directly inside your terminal.
        However, it does lack some more advanced features.
        Vim has a significantly steeper learning curve, but is an extremely powerful editor once mastered.
    </p>
    <h2>Nano:</h2>
    <p>
        To use nano, simply type:
        <p class="codeBlock">Nano [filename]</p>
        Note that filename can either be a pre-existing file, or a file you wish to create.
        If you’re creating a new file, it’ll be created once you save for the first time.
        If you exit nano without saving, the file will not be created.
        <p class="info">Tip: While Nano is limited, Nano does have copy/paste functions.</p>
    </p>
    <h2>Vim</h2>
    <p>
        Vim 
    </p>
</div>
<?php
include($path . "inc/footer.php");
?>
