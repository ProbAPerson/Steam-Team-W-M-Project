<?php
$path = "../";
$page = "Topic 2";
include($path . "inc/navbar.php");
?>

<div class="tutorial">
            <h1>UNIX Text Editors</h1>
            <p>
                Unix Text editors allow you to edit files directly within your terminal.
                They’re lightweight, and it makes editing files over SSH incredibly easy.
                Two of the most common text editors in Unix are VIM and Nano.
                Nano is straightforward and easy to use, much like a notepad application directly inside your terminal.
                However, it does lack some more advanced features.
                Vim has a significantly steeper learning curve, but is an extremely powerful editor once mastered.
                For this guide, we'll be focusing on Nano.
            </p>
        <h2>Nano</h2>
            <p>
                To use nano, simply type
                <p class="codeExample">
                    Nano [filename]
                </p>
                Note that filename can either be a pre-existing file, or a file you wish to create. If you’re creating a new file, it’ll be created once you save for the first time. If you exit nano without saving, the file will not be created.
                <p class="note">
                    Tip: While Nano is limited, Nano does have copy/paste functions.
                </p>
            </p>
            <p>
                From here, you’ll find nano is easy to operate. 
                If you need to move the cursor, simply use your arrow keys. 
                Try typing something simple.
            </p>
            <div class="imageContainer">
            <img src="../images/nano.png" alt="Nano">
            </div>
            <p>
                You’ll notice that nano gives you the important commands at the bottom.
                To “save”, press ctrl+O. The file has now been written.
                At this point, you can exit using ctrl+X.
                In the future, if you use ctrl+x to exit without saving first, it’ll give you the option to save.
            </p>
        <h2>cat</h2>
            <p>
                You can view the contents of the file in the terminal by using the cat command
            <p class="codeExample">
                cat [filename]
            </p>
                The contents will be printed directly to the terminal.
            </p>

</div>


