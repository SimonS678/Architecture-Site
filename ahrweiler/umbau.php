<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt Kartäuserhof 19, Köln';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2020, Bad Neuenahr-Ahrweiler';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', 'active'];
            $links = [$link1, $link2, $link3];
            include_once('../partials/header.php');
        ?>
        <img class="responsive-img no-margin" src="imgs/03Umbau/20-01AhrweilerUmbau.jpg" alt="Bild">

        <p class="caption" ><strong>2020 Bad Neuenahr-Ahrweiler</strong> 
        <br> Entkernung, Sanierung und Umbau eines Einfamilienhauses für eine Familie.<br> 
            
        Ausbau Dachgeschoss. Austausch Heizungstechnik.</p>

        <img class="responsive-img" src="imgs/03Umbau/20-02AhrweilerVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/20-03AhrweilerVorher.jpg" alt="Bild">

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/03Umbau/20-05AhrweilerVorher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/03Umbau/20-06AhrweilerVorher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/03Umbau/20-04AhrweilerVorher.jpg);"></div>
        </div>


        <img class="responsive-img" src="imgs/03Umbau/20-07AhrweilerVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/20-08AhrweilerVorher.jpg" alt="Bild">
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>