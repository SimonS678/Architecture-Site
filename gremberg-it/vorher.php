<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2015 Köln-Gremberg';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2015 Köln-Gremberg';
            $link1 = ['vorher.php','Vorher', 'active'];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/01Vorher/2016-01GfUVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2016-02GfUVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2016-03GfUVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2016-04GfUVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2016-05GfUVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2016-06GfUVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2016-07GfUVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2016-08GfUVorher.jpg" alt="Bild">
        
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>