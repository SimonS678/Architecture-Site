<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2017 Köln Rondorf';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2017 Köln Rondorf';
            $link1 = ['vorher.php','Vorher', 'active'];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/01Vorher/2017-01RondorfVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2017-02RondorfVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2017-03RondorfVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2017-04RondorfVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2017-05RondorfVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2017-06RondorfVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2017-07RondorfVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2017-08RondorfVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2017-09RondorfVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2017-10RondorfVorher.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>