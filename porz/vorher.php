<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2012 Köln Porz';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2012 Köln Porz';
            $link1 = ['vorher.php','Vorher', 'active'];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/01Vorher/2012-01PorzVorher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/01Vorher/2012-05PorzVorher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/01Vorher/2012-06PorzVorher.jpg);"></div>
        </div>

        <div class="slide__container slide__grid_2 slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/01Vorher/2012-02PorzVorher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/01Vorher/2012-03PorzVorher.jpg);"></div>
        </div>

        <div class="slide__container slide__grid_2 slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/01Vorher/2012-04PorzVorher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/01Vorher/2012-08PorzVorher.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/01Vorher/2012-07PorzVorher.jpg" alt="Bild">
        
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>