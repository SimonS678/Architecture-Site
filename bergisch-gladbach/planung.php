<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2011-2012 Bergisch-Gladbach';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '2011-2012 Bergisch-Gladbach';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', 'active'];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/02Planung/2011-01KGGLPlanung.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/02Planung/2011-05Sued-WestGLPlanung.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/02Planung/2011-06SuedOstGLPlanung.jpg);"></div>
        </div>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/02Planung/2011-02EGGLPlanung.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/02Planung/2011-07Nord-OstGLPlanung.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/02Planung/2011-08Nord-WestGLPlanung.jpg);"></div>
        </div>

        <div class="slide__container slide__grid_2 slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/02Planung/2011-03DGGLPlanung.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/02Planung/2011-04A-AGLPlanung.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/02Planung/2011-09TerrasseGLPlanung.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>