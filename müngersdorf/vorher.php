<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2013 Köln Müngersdorf';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2013 Köln Müngersdorf';
            $link1 = ['vorher.php','Vorher', 'active'];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/01Vorher/2013-06MüngersdorfVorher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/01Vorher/2013-01MüngersdorfVorher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/01Vorher/2013-02MüngersdorfVorher.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/01Vorher/2013-03MüngersdorfVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2013-04MüngersdorfVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2013-05MüngersdorfVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2013-07MüngersdorfVorher.jpg" alt="Bild">
        
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>