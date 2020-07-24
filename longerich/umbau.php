<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2012 Köln Longerich';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2012 Köln Longerich';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', 'active'];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/03Umbau/2012-08LongerichUmbau.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/03Umbau/2012-01LongerichUmbau.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/03Umbau/2012-02LongerichUmbau.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/03Umbau/2012-03LongerichUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2012-04LongerichUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2012-05LongerichUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2012-06LongerichUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2012-07LongerichUmbau.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>