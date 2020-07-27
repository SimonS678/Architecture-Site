<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2002 Köln Schau-Rhein';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2002 Köln Schau-Rhein';
            $link2 = ['planung.php','Planung', 'active'];
            $links = [$link2];
            include_once('../partials/header.php');
        ?>
        
        <img class="responsive-img no-margin" src="imgs/02Planung/2002schau-rhein.jpg" alt="Bild">

        <p class="caption" ><strong>2002 Köln Schau-Rhein</strong> 
        <br>Wettbewerb
        <br>Ideenstudie für ein Haus der Architektur in Köln im Rahmen der PLAN 2002.
        <br>Erstellung einer VR-Präsentation.       
        </p>
        
    </main>
    <?php 
        include_once('../partials/footer.php');
        
    ?>
</body>
</html>