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
            $link1 = ['vorher.php','Vorher', 'active'];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/01Vorher/2012-02LongerichVorher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/01Vorher/2012-01LongerichVorher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/01Vorher/2012-03LongerichVorher.jpg);"></div>
        </div>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/01Vorher/2012-05LongerichVorher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/01Vorher/2012-04LongerichVorher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/01Vorher/2012-06LongerichVorher.jpg);"></div>
        </div>


    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>