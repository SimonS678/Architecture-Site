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
            $link1 = ['vorher.php','Vorher', 'active'];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/01Vorher/2016-01SürthVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2016-02SürthVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2016-03SürthVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2016-04SürthVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2016-05SürthVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2016-06SürthVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2016-07SürthVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2016-08SürthVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2016-09SürthVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2016-10SürthVorher.jpg" alt="Bild">
        
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>