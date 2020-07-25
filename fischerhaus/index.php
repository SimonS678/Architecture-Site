<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2014 Köln Sürth';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2014 Köln Sürth';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', 'active'];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2014-03FischerhausNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2014-01FischerhausNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2014-02FischerhausNachher.jpg);"></div>
        </div>

        <p class="caption" ><strong>2014 Köln Sürth</strong> 
        <br>Umbau und Sanierung eines historischen Fischerhauses in Rheinnähe.
        </p>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2014-05FischerhausNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2014-04FischerhausNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2014-07FischerhausNachher.jpg);"></div>
        </div>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2014-06FischerhausNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2014-08FischerhausNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2014-09FischerhausNachher.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/04Nachher/2014-10FischerhausNachher.jpg">


    </main>
    <?php 
        include_once('../partials/footer.php');
        
    ?>
</body>
</html>