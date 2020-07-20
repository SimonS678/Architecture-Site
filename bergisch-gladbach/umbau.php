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
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', 'active'];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/03Umbau/2011-10GLUmbau.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/03Umbau/2011-01GLUmbau.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/03Umbau/2011-02GLUmbau.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/03Umbau/2011-03GLumbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2011-04GLumbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2011-05GLumbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2011-06GLumbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2011-07GLumbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2011-08GLumbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2011-09GLumbau.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>