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
            $link1 = ['vorher.php','Vorher', 'active'];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/01Vorher/2019-08HoeningerVorher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/01Vorher/2019-01HoeningerVorher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/01Vorher/2019-02HoeningerVorher.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/01Vorher/2019-03HoeningerVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2019-04HoeningerVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2019-05HoeningerVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2019-06HoeningerVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2019-07HoeningerVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2019-09HoeningerVorher.jpg" alt="Bild">
        
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>