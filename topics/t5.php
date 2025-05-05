<?php
$path = "../";
$page = "Topic 5";
include($path . "inc/navbar.php");
?>
<div class="tutorial">
    <h1>SSH, remote file transfers, Filezilla</h1>
    <p>This guide will cover using SSH, scp, and the basics of using Filezilla.</p>
    <h2>SSH</h2>
    <p>
        SSH (Secure Shell) is a communication protocol for securely connecting to a remote Unix machine. The connection is encrypted.
        The default SSH port is 22.<br>
        To use it, use it like this:
        <p class="codeBlock">ssh [username]@[RemoteUnixMachineAddress]</p>
        A more detailed guide on SSH can be found on our site <a href="../">here</a>.
    </p>
    <h2>SCP</h2>
    <p>
        SCP (Secure Copy Protocol) allows you to transfer files from your host machine to a remote Unix machine.
        <p class="codeBlock">scp [local file path] [username]@[RemoteUnixMachineAddress]:/remote/directory/</p>
    </p>
    <h2>Filezilla</h2>
    <p>
        FileZilla is a file transfer tool that supports FTP, FTPS, and SFTP.
        While its functions can be accomplished through a command line interface, FileZilla’s GUI makes it easier for beginners to manage files on a Unix server. 
        The download site for can be found <a href="https://filezilla-project.org/">here</a>.<br>
        <div class="imageContainer">
            <img src="../images/Filezilla.png" alt="Filezilla site">
            <p>Screenshot of the <a href="https://filezilla-project.org/">Filezilla</a> site</p>
        </div>
        Note that when downloading to download the FileZilla Client.<br>
        <div class="imageContainer">
            <img src="../images/FilezillaUI.png" alt="Filezilla UI">
            <p>Screenshot of <a href="https://filezilla-project.org/">Filezilla</a></p>
        </div>
        When using FileZilla, you’ll need to know the host (and its protocol), your remote username, its password, and the port that it's on. The standard port is 22.
        Once connected to the remote server, you can use FileZilla almost like a standard File Manager.
        You can also change permissions of a file by right clicking it, and changing its properties.
        If you need a refresher on what file permission values do what, check out the File Permissions section of the guide.
    </p>
</div> 

