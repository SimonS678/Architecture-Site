<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2019-2020 Köln Zollstock';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '2019-2020 Köln Zollstock';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', 'active'];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid_2 slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/02Planung/20-05-15AnsichtStraßeHoeningerWeg288.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/02Planung/20-05-15GrundrissHoeningerWeg288.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/02Planung/20-05-15SchnittA-AHoeningerWeg288.pln Kopie.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>