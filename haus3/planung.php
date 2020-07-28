<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2001 Haus 3';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '2001 Haus 3';
            $link2 = ['planung.php','Planung', 'active'];
            $links = [$link2];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img no-margin" src="imgs/02Planung/2001-01Haus3.jpg" alt="Bild">

        <p class="caption" ><strong>2001 Haus 3</strong> 
            <br>Studie einer aufgeständerten Holz-Stahl-Konstruktion.
            <br>Einfache Rasteranordnungen erlauben die Erweiterung und Änderung des Grundrisses in Modulbauweise.
            <br>Wenige Wandelemente (geschlossen, verglast, Tür, Fenster) laden zum experimentieren ein.
            <br>Die Installationen werden durch die Bodenpaneele geführt und erschließen flexibel die Räume.
        </p>

        <img class="responsive-img" src="imgs/02Planung/2001-02Haus3.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2001-03Haus3.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2001-04Haus3.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>