<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2018-2019 Köln Zollstock';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2018-2019 Köln Zollstock';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', 'active'];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/03Umbau/2019-01HoeningerUmbau.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/03Umbau/2019-04HoeningerUmbau.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/03Umbau/2019-06HoeningerUmbau.jpg);"></div>
        </div>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/03Umbau/2019-02HoeningerUmbau.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/03Umbau/2019-07HoeningerUmbau.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/03Umbau/2019-08HoeningerUmbau.jpg);"></div>
        </div>

        <div class="slide__container slide__grid_2 slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/03Umbau/2020-03HoeningerUmbau.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/03Umbau/2020-05HoeningerUmbau.jpg);"></div>
        </div>

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>