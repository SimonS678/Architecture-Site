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
            $link2 = ['planung.php','Planung', ''];
            $link4 = ['index.php','Gebaut', 'active'];
            $links = [$link2, $link4];
            include_once('../partials/header.php');
        ?>
        
        <img class="responsive-img no-margin" src="imgs/04Nachher/2004-01SushiBar.jpg" alt="Bild">

        <p class="caption" ><strong>2004 Sushi Bar, Köln Südstadt</strong> 
        <br>Entwurf eines Sushi-Restaurants in der Kölner Südstadt.
        <br>Nutzungsänderung von Kiosk und Wäscherei in Gastronomie.       
        </p>

        <img class="responsive-img" src="imgs/04Nachher/2004-02SushiBar.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2004-03SushiBar.jpg" alt="Bild">

        
    </main>
    <?php 
        include_once('../partials/footer.php');
        
    ?>
</body>
</html>