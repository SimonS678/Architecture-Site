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
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', 'active'];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(../kartaeuserhof/imgs/03Umbau/Umbau4.JPG);"></div> 
            <div class="slide__right-up" style="background-image: url(../kartaeuserhof/imgs/03Umbau/05-06K19Umbau.JPG);"></div>
            <div class="slide__right-down" style="background-image: url(../kartaeuserhof/imgs/03Umbau/05-13K19Umbau.jpg);"></div>
        </div>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(../kartaeuserhof/imgs/03Umbau/Umbau.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(../kartaeuserhof/imgs/03Umbau/05-01K19Umbau.JPG);"></div>
            <div class="slide__right-down" style="background-image: url(../kartaeuserhof/imgs/03Umbau/05-02K19Umbau.JPG);"></div>
        </div>

        <img class="responsive-img" src="../kartaeuserhof/imgs/03Umbau/05-03K19Umbau.JPG" alt="Bild">
        <img class="responsive-img" src="../kartaeuserhof/imgs/03Umbau/05-04K19Umbau.JPG" alt="Bild">
        <img class="responsive-img" src="../kartaeuserhof/imgs/03Umbau/05-05K19Umbau.JPG" alt="Bild">
        <img class="responsive-img" src="../kartaeuserhof/imgs/03Umbau/05-07K19Umbau.JPG" alt="Bild">
        <img class="responsive-img" src="../kartaeuserhof/imgs/03Umbau/05-08K19Umbau.JPG" alt="Bild">
        <img class="responsive-img" src="../kartaeuserhof/imgs/03Umbau/05-10K19Umbau.JPG" alt="Bild">
        <img class="responsive-img" src="../kartaeuserhof/imgs/03Umbau/05-11K19Umbau.JPG" alt="Bild">
        <img class="responsive-img" src="../kartaeuserhof/imgs/03Umbau/05-14K19Umbau.JPG" alt="Bild">
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>