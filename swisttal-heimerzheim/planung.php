<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2015 Swisttal-Heimerzheim';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '2015 Swisttal-Heimerzheim';
            $link1 = ['ansichten.php','Ansichten', ''];
            $link2 = ['planung.php','Planung', 'active'];
            $links = [$link1, $link2];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/02Planung/01EG Kopie.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/02OG Kopie.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>