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
            <div class="slide__left" style="background-image: url(imgs/03Umbau/2016-12SürthUmbau.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/03Umbau/2016-01SürthUmbau.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/03Umbau/2016-02SürthUmbau.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/03Umbau/2016-03SürthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-04SürthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-05SürthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-06SürthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-07SürthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-08SürthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-09SürthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-10SürthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-11SürthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-14SürthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-15SürthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-16SürthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-17SürthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-18SürthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-19SürthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-20SürthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-21SürthUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-22SürthUmbau.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>