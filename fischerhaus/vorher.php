<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2014 Köln Sürth';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2014 Köln Sürth';
            $link1 = ['vorher.php','Vorher', 'active'];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/01Vorher/2014-01FischerhausVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-02FischerhausVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-03FischerhausVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-04FischerhausVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-05FischerhausVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-06FischerhausVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-07FischerhausVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-08FischerhausVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-09FischerhausVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-10FischerhausVorher.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>