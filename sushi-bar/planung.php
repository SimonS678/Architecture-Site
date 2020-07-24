<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2004 Sushi Bar, Köln Südstadt';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '2004 Sushi Bar, Köln Südstadt';
            $link2 = ['planung.php','Planung', 'active'];
            $link4 = ['index.php','Gebaut', ''];
            $links = [$link2, $link4];
            include_once('../partials/header.php');
        ?>
        
        <img class="responsive-img" src="imgs/02Planung/2004-01SushiBarGrundriß.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>