<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2019, Bonn Oberkassel';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2019, Bonn Oberkassel';
            $link1 = ['vorher.php','Vorher', 'active'];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/01Vorher/2019-02BonnVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2019-01BonnVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2019-03BonnVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2019-04BonnVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2019-05BonnVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2019-07BonnVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2019-08BonnVorher.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>