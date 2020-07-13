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
            $link1 = ['vorher.php','Vorher', 'active'];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $links = [$link1, $link2, $link3];
            include_once('../partials/header.php');
        ?>
        

        <img class="responsive-img" src="imgs/01Vorher/20-01AhrweilerVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/20-02AhrweilerVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/20-03AhrweilerVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/20-04AhrweilerVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/20-05AhrweilerVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/20-06AhrweilerVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/20-07AhrweilerVorher.jpg" alt="Bild">
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>