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
            $link1 = ['vorher.php','Vorher', 'active'];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/01Vorher/2007-02SchoenhauserVorher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/01Vorher/2007-01SchoenhauserVorher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/01Vorher/2007-04SchoenhauserVorher.jpg);"></div>
        </div>
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/01Vorher/2007-03SchoenhauserVorher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/01Vorher/2007-05SchoenhauserVorher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/01Vorher/2007-07SchoenhauserVorher.jpg);"></div>
        </div>
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/01Vorher/2007-06SchoenhauserVorher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/01Vorher/2007-10SchoenhauserVorher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/01Vorher/2007-11SchoenhauserVorher.jpg);"></div>
        </div>
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/01Vorher/2007-08SchoenhauserVorher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/01Vorher/2007-12SchoenhauserVorher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/01Vorher/2007-14SchoenhauserVorher.jpg);"></div>
        </div>
        <div class="slide__container slide__grid_2 slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/01Vorher/2007-09SchoenhauserVorher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/01Vorher/2007-13SchoenhauserVorher.jpg);"></div>
        </div>

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>