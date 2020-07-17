<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2013 Köln Zollstock';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2013 Köln Zollstock';
            $link1 = ['vorher.php','Vorher', 'active'];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/01Vorher/2013-01ZollstockVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2013-02ZollstockVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2013-03ZollstockVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2013-04ZollstockVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2013-05ZollstockVorher.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>