<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2019, Bonn Oberkassel';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2019, Bonn Oberkassel';
            $link1 = ['vorher.php','Vorher', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', 'active'];
            $links = [$link1, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2019-01BonnNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2019-02BonnNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2019-03BonnNachher.jpg);"></div>
        </div>

        <p class="caption"><strong>2019, Bonn Oberkassel</strong>
        <br>Öffnung und Zusammenlegung von kleinteiligen Räumen in einem historischen Fachwerkhaus.<br> 
            
        Konstruktive Kernsanierung einer Etage.</p>

        <div class="slide__container slide__grid_2 slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2019-07BonnNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2019-08BonnNachher.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/04Nachher/2019-04BonnNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2019-05BonnNachher.jpg" alt="Bild">


    </main>
    <?php 
        include_once('../partials/footer.php');
        
    ?>
</body>
</html>