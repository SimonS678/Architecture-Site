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
            $link1 = ['vorher.php','Vorher', 'active'];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/01Vorher/2010-03OverstolzenVorher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/01Vorher/2010-01OverstolzenVorher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/01Vorher/2010-02OverstolzenVorher.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/01Vorher/2010-04OverstolzenVorher.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>