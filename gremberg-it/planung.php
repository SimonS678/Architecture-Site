<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2015 Köln-Gremberg';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '2015 Köln-Gremberg';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', 'active'];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/02Planung/2016-01GfUPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2016-02GfUPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2016-03GfUPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2016-04GfUPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2016-05GfUPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2016-06GfUPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2016-07GfUplanung.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>