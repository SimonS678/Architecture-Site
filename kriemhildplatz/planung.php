<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2008-2009 Köln Mauenheim';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '2008-2009 Köln Mauenheim';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', 'active'];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/02Planung/2008-01PlanungKG.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/02Planung/2008-05PlanungA-A.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/02Planung/2008-07PlanungNord-West.jpg);"></div>
        </div>

        <div class="slide__container slide__grid_2 slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/02Planung/2008-02PlanungEG.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/02Planung/2008-03PlanungOG.jpg);"></div>
        </div>

        <div class="slide__container slide__grid_2 slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/02Planung/2008-04PlanungDG.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/02Planung/2008-06PlanungNord-Ost.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/02Planung/2008-08PlanungSued-West.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>