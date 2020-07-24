<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2004 Engelbertstrasse, Köln';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2004 Engelbertstrasse, Köln';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', 'active'];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/04-01EngelbertGebaut.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/04-04EngelbertGebaut.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/04-07EngelbertGebaut.jpg);"></div>
        </div>

        <p class="caption" ><strong>2004 Engelbertstrasse, Köln</strong> 
            <br>Sanierung, Umbau und Erweiterung eines denkmalgeschützten Mehrfamilienhauses in Köln.
            <br>Das Dachgeschoss und der ungenutzte Spitzboden wurden zu einer Maisonettewohnung zusammen gelegt. 
            <br>Fassade, Fenster und Dach wurden saniert. 
            <br>
            
            Bauzeit: 3 Monate
            </p>


        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/04-02EngelbertGebaut.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/04-10EngelbertGebaut.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/04-12EngelbertGebaut.jpg);"></div>
        </div>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/04-03EngelbertGebaut.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/04-13EngelbertGebaut.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/04-14EngelbertGebaut.jpg);"></div>
        </div>

        <div class="slide__container slide__grid_2 slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/04-05EngelbertGebaut.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/04-06EngelbertGebaut.jpg);"></div>
        </div>

        <div class="slide__container slide__grid_2 slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/04-08EngelbertGebaut.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/04-09EngelbertGebaut.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/04Nachher/04-11EngelbertGebaut.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/04-15EngelbertGebaut.jpg" alt="Bild">



    </main>
    <?php 
        include_once('../partials/footer.php');
        
    ?>
</body>
</html>