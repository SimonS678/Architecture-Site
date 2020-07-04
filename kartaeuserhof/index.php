<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt Kartäuserhof 19, Köln';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = 'Kartäuserhof 19, Köln';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', 'active'];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid">
            <div class="slide__left" style="background-image: url(../kartaeuserhof/imgs/04Nachher/Nachher3.JPG);"></div> 
            <div class="slide__right-up" style="background-image: url(../kartaeuserhof/imgs/04Nachher/Nachher2.JPG);"></div>
            <div class="slide__right-down" style="background-image: url(../kartaeuserhof/imgs/04Nachher/Wohnzimmer.JPG);"></div>
        </div>
        <p class="caption">Sanierung, Umbau und Erweiterung eines
            Mehrfamilienhauses (1962) in der Kölner Südstadt. <br> 
            
            Dachgeschoss und die dritte Etage wurden vollständig entkernt und zusammengelegt.
            Eine Dachterrasse und der nutzbare Spitzboden erweitern die Flächen. <br>
            
            Bauzeit: 2 Monate
            </p>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(../kartaeuserhof/imgs/04Nachher/05-03K19Umbau.JPG);"></div> 
            <div class="slide__right-up" style="background-image: url(../kartaeuserhof/imgs/04Nachher/05-02K19Umbau.JPG);"></div>
            <div class="slide__right-down" style="background-image: url(../kartaeuserhof/imgs/04Nachher/05-06K19Umbau.JPG);"></div>
        </div>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(../kartaeuserhof/imgs/04Nachher/05-05K19Umbau.JPG);"></div> 
            <div class="slide__right-up" style="background-image: url(../kartaeuserhof/imgs/04Nachher/05-10K19Umbau.JPG);"></div>
            <div class="slide__right-down" style="background-image: url(../kartaeuserhof/imgs/04Nachher/05-11K19Umbau.JPG);"></div>
        </div>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(../kartaeuserhof/imgs/04Nachher/05-16K19Umbau.JPG);"></div> 
            <div class="slide__right-up" style="background-image: url(../kartaeuserhof/imgs/04Nachher/05-14K19Umbau.JPG);"></div>
            <div class="slide__right-down" style="background-image: url(../kartaeuserhof/imgs/04Nachher/Nachher1.JPG);"></div>
        </div>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(../kartaeuserhof/imgs/04Nachher/05-07K19Umbau.JPG);"></div> 
            <div class="slide__right-up" style="background-image: url(../kartaeuserhof/imgs/04Nachher/05-17K19Umbau.JPG);"></div>
            <div class="slide__right-down" style="background-image: url(../kartaeuserhof/imgs/04Nachher/05-18K19Umbau.JPG);"></div>
        </div>

        <img class="responsive-img" src="../kartaeuserhof/imgs/04Nachher/05-12K19Umbau.JPG" alt="Bild">
        <img class="responsive-img" src="../kartaeuserhof/imgs/04Nachher/05-13K19Umbau.JPG" alt="Bild">
        <img class="responsive-img" src="../kartaeuserhof/imgs/04Nachher/05-15K19Umbau.JPG" alt="Bild">
        <img class="responsive-img" src="../kartaeuserhof/imgs/04Nachher/05-19K19Umbau.JPG" alt="Bild">
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>