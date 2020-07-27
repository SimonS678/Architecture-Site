<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2001 Köln Severinviertel';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2001 Köln Severinviertel';
            $link1 = ['vorher.php','Vorher', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', 'active'];
            $links = [$link1, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2001-06BildSeverin13.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2001-05BildSeverin13.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2001-07BildSeverin13.jpg);"></div>
        </div>

        <p class="caption"><strong>2001 Köln Severinviertel</strong>
        <br>Umbau und Sanierung eines denkmalgeschützten Hauses (Baujahr 1877) in der Kölner Südstadt - Severinstraße.
        <br>Die historische Fassade wurden von den Nachkriegsfliesen befreit. Im Erdgeschoß ist wieder die gusseiserne Konstruktion sichtbar.
        <br>Kleinteilige Wohnungen wurden für heutige Ansprüche modifiziert.
        <br>Großflächige Durchbrüche verbinden unterschiedliche Funktionsbereiche - halbhohe Wände gliedern die Wohnungen.   
        </p>

        <div class="slide__container slide__grid_2 slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2001-04BildSeverin13.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2001-03BildSeverin13.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/04Nachher/2001-01BildSeverin13.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2001-02BildSeverin13.jpg" alt="Bild">


    </main>
    <?php 
        include_once('../partials/footer.php');
        
    ?>
</body>
</html>