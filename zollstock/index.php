<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2013 Köln Zollstock';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2013 Köln Zollstock';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', 'active'];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2013-02ZollstockNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2013-03ZollstockNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2013-04ZollstockNachher.jpg);"></div>
        </div>

        <p class="caption" ><strong>2013 Köln Zollstock</strong> 
        <br>Nutzungsänderung für eine Kölner Wohnungsbaugenossenschaft. 

        <br>Eine ehemalige Apotheke wurde zur Thailändischen Massagepraxis umgebaut.

        </p>

        <img class="responsive-img" src="imgs/04Nachher/2013-05ZollstockNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2013-06ZollstockNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2013-07ZollstockNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2013-08ZollstockNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2013-09ZollstockNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2013-10ZollstockNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2013-11ZollstockNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2013-12ZollstockNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2013-13ZollstockNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2013-14ZollstockNachher.jpg">


    </main>
    <?php 
        include_once('../partials/footer.php');
        
    ?>
</body>
</html>