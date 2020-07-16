<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2014 Köln Südstadt';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2014 Köln Südstadt';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', 'active'];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/03Umbau/2014-16K19-3Umbau.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/03Umbau/2014-01K19-3Umbau.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/03Umbau/2014-02K19-3Umbau.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/03Umbau/2014-03K19-3Umbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2014-04K19-3Umbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2014-05K19-3Umbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2014-06K19-3Umbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2014-07K19-3Umbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2014-08K19-3Umbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2014-09K19-3Umbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2014-10K19-3Umbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2014-11K19-3Umbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2014-12K19-3Umbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2014-13K19-3Umbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2014-15K19-3Umbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2014-17K19-3Umbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2014-18K19-3Umbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2014-19K19-3Umbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2014-20K19-3Umbau.jpg" alt="Bild">
        
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>