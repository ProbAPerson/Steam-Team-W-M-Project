<?php
$path = "../";
$page = "Topic 4";
include($path . "inc/header.php");
?>
<div class="tutorial">
    <h1>Sudo, Package Managers, flatpak</h1>
    <h2>sudo</h2>
    <p>
        Sudo allows you to run commands with root privileges, sort of like running an app as administrator in Windows, but much more powerful.
        Keep in mind that not all users have access to sudo privileges.
        If you’re using a Unix machine in your organization, chances are you don’t have sudo privileges.
        If you’re new to Unix, you might want to take a second to think about the command you’re running before using sudo.<br>
        To run a command using sudo, simply type sudo before the rest of the command:
        <p class="codeBlock">sudo [command]</p>
        If your account doesn’t have sudo access, but you have access to the root login, you can add your user to the sudoers file to gain sudo privileges.
        Once logged in, use the command <i>adduser [username] sudo</i> to add a user to the sudo group.
        Alternatively, you could edit the sudoers file directly.
    </p>
    <h2>Package Managers</h2>
    <p>
        A package manager automates installing, updating, and removing software.
        It fetches this software and its dependencies from a remote repository.
        Package managers make managing software on a Unix machine easier.
        Different distros use different package managers. 
    </p>
    <h3>
        Debian, Ubuntu, Linux Mint, LMDE, Pop!OS - APT
    </h3>
    <p>
        APT (Advanced Package Tool) is the standard package manager for these distros.<br>
        To update the package list, use:
        <p class="codeBlock">sudo apt update</p>
        To install a package, you can use:
        <p class="codeBlock">sudo apt install [package]</p>
        You can also reinstall a package using:
        <p class="codeBlock">sudo apt reinstall [package]</p>
        To update your packages, you can use:
        <p class="codeBlock">sudo apt update && sudo apt upgrade</p>
        <p class="note">Tip: This is two separate commands (note the &&). This updates the package list, and updates your packages in one command.</p>
        If you wish to remove a package, use this:
        <p class="codeBlock">sudo apt remove [package]</p>
    </p>
    <h3>Fedora - dnf</h3>
    <p>
        Fedora uses the dnf package manager.<br>
        To install a package, you can use:
        <p class="codeBlock">sudo dnf install [package]</p>
        You can also reinstall a package using:
        <p class="codeBlock">sudo dnf reinstall [package]</p>
        To update your packages, you can use:
        <p class="codeBlock">sudo dnf update</p>
    </p>
    <h3>macOS - brew</h3>
    <p>macOS doesn’t come with a package manager, but the most popular one to install is homebrew. The official guide to installing Homebrew can be found <a href="https://brew.sh/">here</a>.
        Brew will automatically do things by default that many package managers will not do, such as updating packages and updating package lists.<br>
        To install a package with brew, simply use:
        <p class="codeBlock">brew install [package]</p>
    </p>
    <h2>Flatpak</h2>
    <p>
        Flatpaks are containerized applications, complete with their own copies of dependencies. This increases application reliability, as well as improving overall security. Flatpak itself can be installed like any other package.<br>
        If you have apt as your package manager, you can use this to install flatpak:
        <p class="codeBlock">sudo apt install flatpak </p>
        <p class="warn">Flatpak is not compatible with macOS.</p>
    </p>
</div>
<?php
include($path . "inc/footer.php");
?>
