<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2011 Pulheim';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2011 Pulheim';
            $link1 = ['vorher.php','Vorher', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', 'active'];
            $links = [$link1, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2011-01PulheimNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2011-04PulheimNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2011-06PulheimNachher.jpg);"></div>
        </div>

        <p class="caption" ><strong>2011 Pulheim</strong> 
        <br>Umbau und Sanierung in einem Einfamilienhaus.
        </p>

        <div class="slide__container slide__grid_2 slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2011-02PulheimNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2011-03PulheimNachher.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/04Nachher/2011-05PulheimNachher.jpg">

    </main>
    <?php 
        include_once('../partials/footer.php');
        
    ?>
</body>
</html>