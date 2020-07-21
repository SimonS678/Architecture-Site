<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2016 Köln Sürth';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2016 Köln Sürth';
            $link1 = ['vorher.php','Vorher', 'active'];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/01Vorher/2016-01SuerthVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2016-02SuerthVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2016-03SuerthVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2016-04SuerthVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2016-05SuerthVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2016-06SuerthVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2016-07SuerthVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2016-08SuerthVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2016-09SuerthVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2016-10SuerthVorher.jpg" alt="Bild">
        
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>