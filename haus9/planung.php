<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2003 Haus 9';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '2003 Haus 9';
            $link1 = ['vorher.php','Ansichten', ''];
            $link2 = ['planung.php','Planung', 'active'];
            $links = [$link1, $link2];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/02Planung/2003-01Haus9EG.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2003-02Haus9OG.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2003-03Haus9A-A.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2003-04Haus9B-B.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2003-05Haus9West.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2003-06Haus9Nord.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2003-07Haus9Ost.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2003-08Haus9Sued.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2003-09Haus9EG.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>