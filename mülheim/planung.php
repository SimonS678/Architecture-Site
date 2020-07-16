<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2014 Köln Mülheim';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '2014 Köln Mülheim';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', 'active'];
            $links = [$link1, $link2];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/02Planung/2014-01MülheimPlanungKG.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-02MülheimPlanungEG.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-03MülheimPlanung1.OG.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-04MülheimPlanung2.OG.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-05MülheimPlanungDG.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-06MülheimPlanungSpitzboden.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-07MülheimPlanungA-A.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-08MülheimPlanungStrasse.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-09MülheimPlanungHof.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>