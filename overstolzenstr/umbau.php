<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2010 Köln Südstadt';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2010 Köln Südstadt';
            $link1 = ['vorher.php','Vorher', ''];
            $link3 = ['umbau.php','Umbau', 'active'];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/03Umbau/2010-04OverstolzenUmbau.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/03Umbau/2010-01OverstolzenUmbau.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/03Umbau/2010-02OverstolzenUmbau.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/03Umbau/2010-03OverstolzenUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2010-05OverstolzenUmbau.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>