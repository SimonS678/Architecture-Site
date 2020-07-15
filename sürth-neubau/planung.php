<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2016 Köln Sürth';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '2016 Köln Sürth';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', 'active'];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/02Planung/2016-01SürthPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2016-02SürthPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2016-03SürthPlanung.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>