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
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', 'active'];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/03Umbau/2013-01ZollstockUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2013-02ZollstockUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2013-03ZollstockUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2013-04ZollstockUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2013-05ZollstockUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2013-06ZollstockUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2013-07ZollstockUmbau.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>