<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2009 Köln-Deutz';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2009 Köln-Deutz';
            $link3 = ['umbau.php','Umbau', 'active'];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link3, $link4];
            include_once('../partials/header.php');
        ?>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/03Umbau/2009-03DeutzUmbau.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/03Umbau/2009-01DeutzUmbau.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/03Umbau/2009-02DeutzUmbau.jpg);"></div>
        </div>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/03Umbau/2009-04DeutzUmbau.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/03Umbau/2009-05DeutzUmbau.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/03Umbau/2009-06DeutzUmbau.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/03Umbau/2009-07DeutzUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2009-08DeutzUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2009-09DeutzUmbau.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>