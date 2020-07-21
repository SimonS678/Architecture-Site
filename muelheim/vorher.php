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

        <img class="responsive-img.no-margin" src="imgs/01Vorher/2014-01MuelheimVorher.JPG" alt="Bild">

        <p class="caption" ><strong>2014 Köln Mülheim</strong> 
        <br>Planung für einen Umbau eines Vorkriegs-Mehrfamilienhauses. <br>
            Barrierefreier Umbau von Dachgeschoss und Spitzboden</p>

        <img class="responsive-img" src="imgs/01Vorher/2014-02MuelheimVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-03MuelheimVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-04MuelheimVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-05MuelheimVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-06MuelheimVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-07MuelheimVorher.jpg" alt="Bild">
        
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>