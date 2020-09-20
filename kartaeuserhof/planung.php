<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt Köln Severinsviertel';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '2006, Köln Severinsviertel';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', 'active'];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(../kartaeuserhof/imgs/02Planung/05-02K19DGPlanung.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(../kartaeuserhof/imgs/02Planung/05-03K19DetailPlanung.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(../kartaeuserhof/imgs/02Planung/05-04K19BadPlanung.jpg);"></div>
        </div>

        <img class="responsive-img" src="../kartaeuserhof/imgs/02Planung/05-01K19OGPlanung.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>