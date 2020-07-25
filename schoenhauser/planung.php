<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2007 - 2008 Köln Bayenthal';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '2007 - 2008 Köln Bayenthal';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', 'active'];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/02Planung/2007-01SchoenhauserKG.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2007-02SchoenhauserEG.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2007-03SchoenhauserOG.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2007-04SchoenhauserDG.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2007-05SchoenhauserSpitzboden.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2007-06SchoenhauserA-A.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2007-07SchoenhauserSueden.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2007-08SchoenhauserNorden.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2007-09SchoenhauserOsten.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>