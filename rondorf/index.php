<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2017 Köln Rondorf';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2017 Köln Rondorf';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', 'active'];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2017-05RondorfNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2017-04RondorfNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2017-03RondorfNachher.jpg);"></div>
        </div>

        <p class="caption" ><strong>2017, Köln Rondorf</strong> <br> Entkernung eines Vierkanthofes.        
        Sanierung, Ausbau und Umbau der Hofanlage.
        </p>

        <img class="responsive-img" src="imgs/04Nachher/2017-01RondorfNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2017-02RondorfNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2017-07RondorfNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2017-08RondorfNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2017-09RondorfNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2017-10RondorfNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2017-11RondorfNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2017-12RondorfNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2017-13RondorfNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2017-14RondorfNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2017-16RondorfNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2017-17RondorfNachher.jpg">


    </main>
    <?php 
        include_once('../partials/footer.php');
        
    ?>
</body>
</html>