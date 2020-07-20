<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2010 Köln Südstadt';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2010 Köln Südstadt';
            $link1 = ['vorher.php','Vorher', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', 'active'];
            $links = [$link1, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2010-03OverstolzenNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2010-01OverstolzenNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2010-02OverstolzenNachher.jpg);"></div>
        </div>

        <p class="caption" ><strong>2010 Köln Südstadt</strong> 
        <br>Wohnungssanierung 

        <br>Umbau und Sanierung einer
        Wohnung in der Kölner Südstadt.

        </p>

        <div class="slide__container slide__grid_2 slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2010-04OverstolzenNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2010-05OverstolzenNachher.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/04Nachher/2010-07OverstolzenNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2010-06OverstolzenNachher.jpg">
    </main>
    <?php 
        include_once('../partials/footer.php');
        
    ?>
</body>
</html>