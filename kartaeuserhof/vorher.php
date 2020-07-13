<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt Kartäuserhof 19, Köln';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2006, Kartäuserhof 19, Köln';
            $link1 = ['vorher.php','Vorher', 'active'];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(../kartaeuserhof/imgs/01Vorher/Kartäuserhof1.JPG);"></div> 
            <div class="slide__right-up" style="background-image: url(../kartaeuserhof/imgs/01Vorher/05-08K19Vorher.JPG);"></div>
            <div class="slide__right-down" style="background-image: url(../kartaeuserhof/imgs/01Vorher/05-04K19Vorher.JPG);"></div>
        </div>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(../kartaeuserhof/imgs/01Vorher/Vorher.JPG);"></div> 
            <div class="slide__right-up" style="background-image: url(../kartaeuserhof/imgs/01Vorher/05-06K19Vorher.JPG);"></div>
            <div class="slide__right-down" style="background-image: url(../kartaeuserhof/imgs/01Vorher/05-07K19Vorher.JPG);"></div>
        </div>

        <img class="responsive-img" src="../kartaeuserhof/imgs/01Vorher/05-02K19Vorher.JPG" alt="Bild">
        <img class="responsive-img" src="../kartaeuserhof/imgs/01Vorher/05-05K19Vorher.JPG" alt="Bild">
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>