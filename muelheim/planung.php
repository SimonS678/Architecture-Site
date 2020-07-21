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

        <img class="responsive-img" src="imgs/02Planung/2014-01MuelheimPlanungKG.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-02MuelheimPlanungEG.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-03MuelheimPlanung1.OG.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-04MuelheimPlanung2.OG.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-05MuelheimPlanungDG.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-06MuelheimPlanungSpitzboden.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-07MuelheimPlanungA-A.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-08MuelheimPlanungStrasse.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-09MuelheimPlanungHof.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>