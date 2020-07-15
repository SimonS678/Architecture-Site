<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2015 Köln-Gremberg';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2015 Köln-Gremberg';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', 'active'];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/03Umbau/2016-07GfUUmbau.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/03Umbau/2016-08GfUUmbau.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/03Umbau/2016-09GfUUmbau.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/03Umbau/2016-01GfUUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-02GfUUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-03GfUUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-04GfUUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-05GfUUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-06GfUUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2016-10GfUUmbau.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>