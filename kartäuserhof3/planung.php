<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2014 Köln Südstadt';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '2014 Köln Südstadt';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', 'active'];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid_2 slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/02Planung/01EGKartäuserhof19.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/02Planung/02-1.OGKartäuserhof19.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/02Planung/03PodestKartäuserhof19.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>