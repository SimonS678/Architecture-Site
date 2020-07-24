<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2004 Köln Ehrenfeld';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '2004 Köln Ehrenfeld';
            $link2 = ['planung.php','Planung', 'active'];
            $links = [$link2];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img no-margin" src="imgs/02Planung/2005HinterhofwerkstattAnsicht.jpg" alt="Bild">

        <p class="caption" ><strong>2004 Köln Ehrenfeld</strong> 
            <br>Hinterhofwerkstatt für eine Hutmacherin.
            <br>Nutzungsänderung und Umbau einer Hinterhofwerkstatt für eine Familie in Köln-Ehrenfeld.
        </p>

        <img class="responsive-img" src="imgs/02Planung/2005HinterhofwerkstattGrundriss.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2005HinterhofwerkstattSchnitt.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>