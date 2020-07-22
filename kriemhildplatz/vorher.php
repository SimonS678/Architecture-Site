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
            $link1 = ['vorher.php','Vorher', 'active'];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/01Vorher/2008-01KriemhildVorher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/01Vorher/2008-03KriemhildVorher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/01Vorher/2008-05KriemhildVorher.jpg);"></div>
        </div>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/01Vorher/2008-02KriemhildVorher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/01Vorher/2008-06KriemhildVorher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/01Vorher/2008-08KriemhildVorher.jpg);"></div>
        </div>

        <div class="slide__container slide__grid_2 slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/01Vorher/2008-04KriemhildVorher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/01Vorher/2008-07KriemhildVorher.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/01Vorher/2008-09KriemhildVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2008-10KriemhildVorher.jpg" alt="Bild">
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>