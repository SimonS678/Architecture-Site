<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2009 Köln-Deutz';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2009 Köln-Deutz';
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', 'active'];
            $links = [$link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2009-01DeutzNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2009-02DeutzNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2009-05DeutzNachher.jpg);"></div>
        </div>

        <p class="caption" ><strong>2009 Köln-Deutz</strong> 
        <br>Wohnungsumbau 

        <br>Umbau und Kernsanierung
        einer Wohnung in der Köln Deutz.

        </p>

        <div class="slide__container slide__grid_2 slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2009-03DeutzNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2009-04DeutzNachher.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/04Nachher/2009-07DeutzNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2009-06DeutzNachher.jpg">

    </main>
    <?php 
        include_once('../partials/footer.php');
        
    ?>
</body>
</html>