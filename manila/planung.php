<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2006 Manila, Philippinen';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '2006 Manila, Philippinen';
            $link1 = ['vorher.php','Ansichten', ''];
            $link2 = ['planung.php','Planung', 'active'];
            $links = [$link1, $link2];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/02Planung/2006-01ManilaGroundFloor.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2006-02ManilaA-A.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2006-03Manila.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2006-04Manila.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2006-05Manila.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2006-06Manila.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>