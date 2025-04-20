<!-- UPDATE LOL REGGIE AND I AGREED HAVING A TEMPLATE SIMPLY OVERCOMPLICATED THINGS SO IGNORE!! -->

<!-- 
Assuming this is a sort of template page, the variables that would need to be inserted include text for the <p>s 
and image links. 
In other words, making a content page with stuff on it would look like 
1. setting variables for page, path, one image, and text (including header titles)
2. include header
3. include this (contentPage) 

Although this keeps our design strict, in fairness, it also makes styling it significantly easier 
-->

<!-- In all cases, if the variable is not set, it uses an empty string instead to avoid errors --> 
<section class="content">
        <?php echo $image ?? '';// image var should be $image = 'img src="" alt="" id="">' ?> 
        <!-- All text vars can be just their strings -->
        <div class="paragraph1">
            <h1><?php echo $header1 ?? ''; ?></h1>
            <p><?php echo $p1 ?? ''; ?></p> 
        </div>
        <div class="paragraph2">
            <h2><?php echo $header2 ?? ''; ?></h2>
            <p><?php echo $p2 ?? ''; ?></p> 
        </div>
        <div class="paragraph3">
            <h2><?php echo $header3 ?? ''; ?></h2>
            <p><?php echo $p3 ?? ''; ?></p> 
        </div>
</section>
    