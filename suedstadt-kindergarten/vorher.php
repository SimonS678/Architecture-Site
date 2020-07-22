<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2018 - 2019 Köln Südstadt';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2018 - 2019 Köln Südstadt';
            $link1 = ['vorher.php','Vorher', 'active'];
            $link2 = ['planung.php','Planung', ''];
            $links = [$link1, $link2];
            include_once('../partials/header.php');
        ?>
        
        <img class="responsive-img no-margin" src="imgs/01Vorher/2018-02KindergartenVorher.jpg">

        <p class="caption"><strong>2018 - 2019 Köln Südstadt</strong><br>Kindergarten in privater Trägerschaft
            LPH 1-4
            Planung einer Kindergartenerweiterung im Bestand.<br> 
            
            Dachgeschoss und Terrasse werden zu einer neuen Gruppe für die Großen (3-6 Jahre) umgebaut.<br>
            
            Einbau eines Speisen-Aufzugs und Zugang über eine verlängerte Aussentreppe in den Freibereich erschließen die Gruppe.
        </p>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/01Vorher/2018-05KindergartenVorher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/01Vorher/2018-03KindergartenVorher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/01Vorher/2018-04KindergartenVorher.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/01Vorher/2018-01KindergartenVorher.jpg">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>