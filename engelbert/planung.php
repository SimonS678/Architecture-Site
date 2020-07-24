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
            $link2 = ['planung.php','Planung', 'active'];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/02Planung/04-01EngelbertPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/04-02EngelbertPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/04-03EngelbertPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/04-04EngelbertPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/04-05EngelbertPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/04-06EngelbertPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/04-07EngelbertPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/04-08EngelbertPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/04-09EngelbertPlanung.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>