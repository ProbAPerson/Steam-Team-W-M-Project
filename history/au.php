<?php
$path = "../";
$page = "Apple & UNIX";
include($path . "inc/navbar.php");
?>
<article>
    <h1>Apple’s History with Unix</h1>
    <p>
        The current version of macOS has an XNU kernel, which incorporates Unix-like features and is certified as a Unix system.
        macOS has been Unix-based since Mac OS X 10.0 Cheetah in 2001, though it did not receive official UNIX 03 certification until OSX 10.5 Leopard in 2007.
        However, even before that, Apple has had a long history of involvement in Unix.
    </p>
    <p>
        In the late 80’s, Apple looked to compete with the growing Unix market, notably consisting of governments and universities.
        However, due to the way Apple had designed the Macintosh line, it wasn’t compatible with Unix, and creating a port would be a serious undertaking.
    </p>
    <div class="imageContainer">
        <img src="../images/s.jpg" alt="Macintosh II System">
        <p>Image from <a href="https://apple-history.com/images/models/II.jpg">Apple-History</a></p>
    </div>
    <p>
        Thus, Apple worked with UniSoft to port a version of Unix, specifically AT&T UNIX system V, to the Macintosh.
        This port would become A/UX, and it would be released for select 68k-based Macs in 1988.
        While it used the Macintosh Finder as a GUI, the GUI itself lacked integration with Unix applications.
        Additionally, while the initial version could run existing Macintosh applications, it could only run one at a time, and only ~10% of the existing software library.
        This did improve over time, but development on the Operating System would effectively stall in 1992, with the final release being in 1995 with the release of version 3.1.1.
        While at this point it was considered a good unification of Mac OS and Unix, it ultimately failed to gain significant market share, or help to sell Macintosh units, and it was ultimately abandoned.
    </p>
    <div class="imageContainer">
        <img src="../images/AppleUnix.png" alt="A/UX">
        <p>Image from <a href="https://upload.wikimedia.org/wikipedia/en/d/d7/Apple_Unix_with_Netscape.png">Wikipedia</a></p>
    </div>
    <p>
        At this point in time, Apple’s main Macintosh operating system, System 7 (later Mac OS 7), was showing its age.
        While Apple had been working on a revamp, codenamed Copland and intended to release as Mac OS 8, the project had stalled primarily due to feature creep and poor project management.
        Thus, Apple looked to purchase a new operating system for the Macintosh.
        Apple ultimately decided to purchase NeXT for their NeXTSTEP operating system.
    </p>
    <div class="imageContainer">
        <img src="../images/NeXT.png" alt="NeXT Logo">
        <p>Image from <a href="https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/NeXT_logo.svg/220px-NeXT_logo.svg.png">Wikipedia</a></p>
    </div>
    <p>
        NeXT was founded by Steve Jobs after being ousted from Apple.
        It was initially focused on high-end workstations for education and business, but when hardware sales lagged, NeXT pivoted to software, making NeXTSTEP available for other platforms.
        NeXTSTEP itself was based on BSD, a Unix-based operating system developed by the Computer Systems Research Group, initially based on AT&T’s version of Unix.
    </p>
    <p>
        Apple’s first major Unix-based consumer version of Mac OS would be Mac OS X 10.0 Cheetah.
        It would support classic Mac OS 9 applications through a compatibility layer, but would allow developers to take advantage of OSX’s Unix features in newer applications.
    </p>
    <div class="imageContainer">
        <img src="../images/OSX.png" alt="Macintosh II System">
        <p>Image from <a href="https://ia801504.us.archive.org/34/items/mac-oscheetah/10-0-Cheetah-About-This-Mac.png">Archive.org</a></p>
    </div>
</article>
<?php
include($path . "inc/footer.php");
?>
