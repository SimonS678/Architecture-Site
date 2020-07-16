<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2014 Köln Mülheimn';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2014 Köln Mülheim';
            $link1 = ['vorher.php','Vorher', 'active'];
            $link2 = ['planung.php','Planung', ''];
            $links = [$link1, $link2];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img.no-margin" src="imgs/01Vorher/2014-01MülheimVorher.JPG" alt="Bild">

        <p class="caption" ><strong>2014 Köln Mülheim</strong> 
        <br>Planung für einen Umbau eines Vorkriegs-Mehrfamilienhauses. <br>
            Barrierefreier Umbau von Dachgeschoss und Spitzboden</p>

        <img class="responsive-img" src="imgs/01Vorher/2014-02MülheimVorher.JPG" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-03MülheimVorher.JPG" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-04MülheimVorher.JPG" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-05MülheimVorher.JPG" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-06MülheimVorher.JPG" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-07MülheimVorher.JPG" alt="Bild">
        
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>