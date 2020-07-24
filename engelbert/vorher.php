<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2004 Engelbertstrasse, Köln';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2004 Engelbertstrasse, Köln';
            $link1 = ['vorher.php','Vorher', 'active'];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/01Vorher/04-01EngelbertVorher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/01Vorher/04-02EngelbertVorher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/01Vorher/04-03EngelbertVorher.jpg);"></div>
        </div>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/01Vorher/04-06EngelbertVorher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/01Vorher/04-04EngelbertVorher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/01Vorher/04-05EngelbertVorher.jpg);"></div>
        </div>

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>