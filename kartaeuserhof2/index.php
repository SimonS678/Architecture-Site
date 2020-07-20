<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2010 Köln Südstadt';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2010 Köln Südstadt';
            $link1 = ['vorher.php','Vorher', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', 'active'];
            $links = [$link1, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid_2">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2010-02K19Nachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2010-03K19Nachher.jpg);"></div>
        </div>

        <p class="caption" ><strong>2010 Köln Südstadt</strong> 
        <br>Wohnungssanierung
        <br>Sanierung einer Wohnung
        in der Kölner Südstadt.
        <br>Bauzeit: 1 Monat.
        </p>

        <div class="slide__container slide__grid_2 slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2010-04K19Nachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2010-05K19Nachher.jpg);"></div>
        </div>

        

        <img class="responsive-img" src="imgs/04Nachher/2010-01K19Nachher.jpg">


    </main>
    <?php 
        include_once('../partials/footer.php');
        
    ?>
</body>
</html>