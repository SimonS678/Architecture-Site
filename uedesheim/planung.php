<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 1999 Neuss-Uedesheim Wettbewerb';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '1999 Neuss-Uedesheim Wettbewerb';
            $link2 = ['planung.php','Planung', 'active'];
            $links = [$link2];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img no-margin" src="imgs/02Planung/1999-01NeussWettbewerb.jpg" alt="Bild">

        <p class="caption" ><strong>1999  Neuss-Uedesheim Wettbewerb</strong> 
            <br>Kostengünstiger Wohnungsbau
            <br>Verdichtung des Ortszentrums in Uedesheim mit kostengünstigen Wohnbauten.
            <br>Soziale Durchmischung durch verschiedene Hausvarianten.
            <br>Schaffung von kleinteiligen Höfen und Plätzen als Begegnungs-, Spiel- und Gemeinschaftsorte.
        </p>

        <img class="responsive-img" src="imgs/02Planung/1999-02NeussWettbewerb.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>