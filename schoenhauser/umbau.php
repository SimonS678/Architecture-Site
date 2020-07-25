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
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', 'active'];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/03Umbau/2007-06SchoenhauserUmbau.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/03Umbau/2007-01SchoenhauserUmbau.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/03Umbau/2007-02SchoenhauserUmbau.jpg);"></div>
        </div>
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/03Umbau/2007-09SchoenhauserUmbau.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/03Umbau/2007-03SchoenhauserUmbau.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/03Umbau/2007-04SchoenhauserUmbau.jpg);"></div>
        </div>
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/03Umbau/2007-17SchoenhauserUmbau.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/03Umbau/2007-05SchoenhauserUmbau.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/03Umbau/2007-07SchoenhauserUmbau.jpg);"></div>
        </div>
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/03Umbau/2007-18SchoenhauserUmbau.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/03Umbau/2007-08SchoenhauserUmbau.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/03Umbau/2007-10SchoenhauserUmbau.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/03Umbau/2007-11SchoenhauserUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2007-12SchoenhauserUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2007-13SchoenhauserUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2007-14SchoenhauserUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2007-15SchoenhauserUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2007-16SchoenhauserUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2007-19SchoenhauserUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2007-20SchoenhauserUmbau.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>