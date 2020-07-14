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

        <img class="responsive-img" src="imgs/04Nachher/2019-02BonnNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2019-01BonnNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2019-03BonnNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2019-04BonnNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2019-05BonnNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2019-07BonnNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2019-08BonnNachher.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>