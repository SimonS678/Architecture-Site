<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2014 Köln Sürth';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '2014 Köln Sürth';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', 'active'];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/02Planung/2014-01FischerhausPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-02FischerhausPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-03FischerhausPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-04FischerhausPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-05FischerhausPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-06FischerhausPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-07FischerhausPlanung.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>