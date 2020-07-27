<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2003 Bergisch-Gladbach';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2003 Bergisch-Gladbach';
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', 'active'];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/03Umbau/2003-12PrumbaumUmbau.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/03Umbau/2003-01PrumbaumUmbau.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/03Umbau/2003-02PrumbaumUmbau.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/03Umbau/2003-03PrumbaumUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2003-04PrumbaumUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2003-05PrumbaumUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2003-06PrumbaumUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2003-07PrumbaumUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2003-08PrumbaumUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2003-09PrumbaumUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2003-10PrumbaumUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2003-11PrumbaumUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2003-13PrumbaumUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2003-14PrumbaumUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2003-15PrumbaumUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2003-16PrumbaumUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2003-17PrumbaumUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2003-18PrumbaumUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2003-19PrumbaumUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2003-20PrumbaumUmbau.jpg" alt="Bild">
        
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>