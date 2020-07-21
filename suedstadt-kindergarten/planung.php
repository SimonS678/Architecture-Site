<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2018 - 2019 Köln Südstadt';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '2018 - 2019 Köln Südstadt';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', 'active'];
            $links = [$link1, $link2];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/02Planung/2018Kindergarten.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>