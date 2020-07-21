<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2016 Köln Sürth';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2016 Köln Sürth';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', 'active'];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/03Umbau/2016-12SuerthUmbau.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/03Umbau/2016-01SuerthUmbau.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/03Umbau/2016-02SuerthUmbau.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/03Umbau/2016-03SuerthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-04SuerthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-05SuerthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-06SuerthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-07SuerthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-08SuerthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-09SuerthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-10SuerthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-11SuerthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-14SuerthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-15SuerthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-16SuerthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-17SuerthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-18SuerthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-19SuerthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-20SuerthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-21SuerthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-22SuerthUmbau.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>