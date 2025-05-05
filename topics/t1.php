<?php
$path = "../";
$page = "Topic 1";
include($path . "inc/navbar.php");
?>

<div class="tutorial">
            <h1>Basic File Operations</h1>
            <p>The Unix terminal may not be the most intuitive, but it’s a powerful tool.
                Rather than a traditional GUI-driven file explorer, you’ll be learning how to use commands for file operations.
            </p>
            <p>
                This topic will cover:
                <ul>
                    <li>mkdir</li>
                    <li>ls</li>
                    <li>cd</li>
                    <li>touch</li>
                    <li>rm</li>
                </ul>
                If you’re comfortable with these commands already, you may wish to move to Topic 2.
            </p>
            <p>Note that Unix is case sensitive.
                Additionally, many commands may not give feedback if they succeed, and will only give feedback if they fail or require user intervention.
            </p>
                <h2>mkdir</h2>
                    <p>mkdir, or “make directory”, is the command used to make a directory in unix.
                        <p class="codeBlock">mkdir [name]</p>
                        It’s much like creating a folder using a file explorer.
                        For this example, let's make a directory simply called “myDirectory”:
                        <p class="codeExample">mkdir myDirectory</p>
                        As you’ll see, you won’t receive feedback from the terminal if the directory was created successfully.
                    </p>
            <h2>ls:</h2>
            <p>ls can be used to list the contents of the current directory.
                You can specify different command options.
                Here’s some of the more helpful ones:
                <table>
                    <tr>
                        <th>Option</th>
                        <th>Function</th>
                    </tr>
                    <tr>
                        <td>ls -a</td>
                        <td>List all hidden files (files that start with ".")</td>
                    </tr>
                    <tr>
                        <td>ls -d</td>
                        <td>List directories</td>
                    </tr>
                    <tr>
                        <td>ls -s</td>
                        <td>List file sizes</td>
                    </tr>
                    <tr>
                        <td>ls -l</td>
                        <td>List files with permissions and file sizes</td>
                    </tr>
                    <tr>
                        <td>ls -lh</td>
                        <td>ist files with permissions and human-readable sizes</td>
                    </tr>
                </table>
                Lets try it:
                <p class="codeExample">ls</p>
                You should see the “myDirectory” directory we just created. How do we enter it?
            </p>
                    <h2>cd</h2>
                    <p>
                        cd allows you to change the directory you’re currently in.
                        <p class="codeBlock">cd [directory path]</p>
                        Let’s try to enter the newly created directory:
                        <p class="codeExample">cd myDirectory</p>
                        To go the directory your current directory is in, you can use:
                        <p class="codeExample">cd ../</p>
                        And let's go back in
                        <p class="codeExample">cd</p>
                    </p>
                <h2>touch</h2>
                    <p>
                        What if we want to make a file?
                        Say, for example, a .txt file?
                        The touch command allows us to do just that.
                        <p class="codeBlock">touch [filename]</p>
                        Lets try it:
                        <p class="codeExample">touch example.txt</p>
                    </p>
        <h2>rm</h2>
            <p>
                What about deleting a file? rm lets you do exactly that.
                <p class="codeBlock">rm [filename]</p>
                Let's delete the file we just created
                <p class="codeExample">rm example.txt</p>
                rm can also be used to delete entire directories using:
                <p class="codeBlock">rm -r</p>
                Let’s make a temporary directory
                <p class="codeExample">mkdir deleteMe</p>
                And now, let’s delete it
                <p class="codeExample">rm -r deleteMe</p>
                rm -r deleteMe
                <p class="warn">Warning: Be very careful with rm -r. It will delete everything in a directory, with no way to undo.</p>
            </p>
            <h2>tree</h2>
                <p>
                    If you want an overview of your files, you can use the tree command
                    <p class="codeBlock">tree</p>
                    <p class="info">Note: This command is not built into macOS</p>
                </p>

</div>
