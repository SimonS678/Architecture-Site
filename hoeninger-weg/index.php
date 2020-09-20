<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2019-2020 Köln Zollstock';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2019-2020 Köln Zollstock';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', 'active'];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2020-01HoeningerNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2020-02HoeningerNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2020-05HoeningerNachher.jpg);"></div>
        </div>

        <p class="caption" ><strong>2019-2020 Köln Zollstock</strong> 
            <br>Nutzungsänderung Gaststätte in Wohnraum.
            
            <br>Entkernung, Umbau, Sanierung und Brandschutzertüchtigung einer brachliegenden Kölner Kneipe in 2 Wohneinheiten im Kölner Süden.

           </p>


        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2020-03HoeningerNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2020-09HoeningerNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2020-10HoeningerNachher.jpg);"></div>
        </div>

        <div class="slide__container slide__grid_2 slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2020-04HoeningerNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2020-06HoeningerNachher.jpg);"></div>
        </div>

        <div class="slide__container slide__grid_2 slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2020-07HoeningerNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2020-08HoeningerNachher.jpg);"></div>
        </div>

        <div class="slide__container slide__grid_2 slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2020-11HoeningerNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2020-12HoeningerNachher.jpg);"></div>
        </div>

        <div class="slide__container slide__grid_2 slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2020-13HoeningerNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2020-14HoeningerNachher.jpg);"></div>
        </div>

    </main>
    <?php 
        include_once('../partials/footer.php');
        
    ?>
</body>
</html>