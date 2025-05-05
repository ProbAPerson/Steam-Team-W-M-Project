<?php 
$path = "./";
include($path . "inc/navbar.php"); ?>
<body>
    <section class="start">
        <a href="choose-your-journey/cyj.php">Start Your UNIX journey here!</a>
    </section>

    <section class="topics">
        <section>
            <a href="history/au.php">
                <div class="card" id="one">History Pt. I</div>
            </a>
        </section>
        
        <section>
            <a href="history/hs.php">
                <div class="card" id="two">History Pt. II</div>
            </a>
        </section>

        <section>
            <a href="why-care/wc.php">
                <div class="card" id="three">Why Care?</div>
            </a>
        </section>

        <section class="card" id="four">
            <p>Architechture</p>
        </section>

    </section>
<?php
include($path . "inc/footer.php");
?>
