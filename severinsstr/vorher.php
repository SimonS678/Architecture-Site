<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2001 Köln Severinviertel';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2001 Köln Severinviertel';
            $link1 = ['vorher.php','Vorher', 'active'];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/01Vorher/2001-01VorherSeverin13.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/01Vorher/2001-02VorherSeverin13.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/01Vorher/2001-03VorherSeverin13.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/01Vorher/2001-04VorherSeverin13.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2001-05VorherSeverin13.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>