<?php
$path = "../";
$page = "History";
include($path . "inc/navbar.php");
?>
<article>
    <h1></h1>
    <p>The first version of Unix was released in 1969, but originated in the late 1960s with Multics, a project born of a collaboration between MIT, Bell Labs, and General Electric.
        Multics was meant to be a time-sharing operating system for the GE-645 mainframe, but was complex and difficult to accomplish.
        So, Bell Labs drew out.
    </p>
    <p>
        After Bell Labs left the Multics project, Ken Thompson, a researcher at Bell Labs, instead started developing a simpler operating system that took some features from Multics like the hierarchical file system but changed other details like removing the single-level store for data.
        Due to some work constraints and also the fact that he was trying to make a video game at the same time, he moved from making it for the GE-645 to the PDP-7 as well. 
    </p>
    <p>
        With help from Dennis Ritchie, he wrote the first version of Unix in 1970, originally named Unics as a pun on Multics.
    </p>
    <p>
        They then added word processing capabilities, as requested by Bell Labs,  written in PDP-11/20 assembly language once they got funding for a larger computer such as the PDP-11.
        By 1973, Version 4 Unix was rewritten in C.
        This made Unix one of the first operating systems that could be easily ported to different hardware platforms.
    </p>
    <p>
        At the 1973 Symposium on Operating Systems Principles, Ritchie and Thompson first formally presented Unix to the outside world and began to grow in recognition but could not be turned into a product due to Bell Labs requirements. 
    </p>
    <p>
        Throughout the 1970s, Unix gained popularity in numerous academic institutions, particularly after Version 6 (1975), which was first to be widely available outside of Bell Labs, and Version 7 (1979), which had C, UUCP and the Bourne shell and was considered a significant improvement. 
        In the early 1980s, Unix had evolved into various commercial and open-source versions, expanding its usability. For example, in 1982, AT&T released UNIX System III, in 1984 University of California at Berkeley released 4.2BSD, which most notably added TCP/IP network code to the mainstream Unix kernel. 
    </p>
    <p>
        Companies like DEC and IBM continued to support it and in 1983 Thompson and Ritchie were given the Turing Award for their work on Unix.
        Halfway through the 1980s, largely due to AT&T’s innovation, people began to recognize Unix as viable for commercial installations and not strictly for academic or niche technical purposes. 
    </p>
    <p>
        Because there were so many implementations, a vendor rivalry called the Unix wars emerged, and people naturally soon began to call for standardization.
        And naturally, everyone tried to offer their own standard, so the Unix wars continued into the 1990s.
        By 1993, most commercial vendors changed their variants of Unix to be based on System V, while BSD innovation continued separately.
        Additionally, the UNIX trademark and certification rights were transferred to the X/Open Consortium, which later became Open Group, some of whose standards still define what is and is not a UNIX operating system. 
    </p>
    <p>
        By the late 1990s, multiple famous operating systems such as Apple’s Macintosh OS and Linux had been based on or developed with the help of Unix.
        Although, plenty of lawsuit drama arose against Linux because of this. 
    </p>
    <p>
        Since the 2000s, Unix and its variants have only continued to grow and expand, and now many Unix-like systems thrive and are widely supported on all sorts of machines. 
    </p>
</article>
<?php
include($path . "inc/footer.php");
?>
