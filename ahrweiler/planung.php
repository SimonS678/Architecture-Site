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
            $link2 = ['planung.php','Planung', 'active'];
            $link3 = ['umbau.php','Umbau', ''];
            $links = [$link1, $link2, $link3];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/02Planung/20-01AhrweilerPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/20-02AhrweilerPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/20-03AhrweilerPlanung.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>