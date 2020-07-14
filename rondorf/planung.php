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
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', 'active'];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/02Planung/2017-01RondorfPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2017-02RondorfPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2017-03RondorfPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2017-04RondorfPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2017-05RondorfPlanung.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>