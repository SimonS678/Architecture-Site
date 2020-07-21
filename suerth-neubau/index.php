<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2016 Köln Sürth';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2016 Köln Sürth';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', 'active'];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2016-07SuerthNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2016-03SuerthNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2016-04SuerthNachher.jpg);"></div>
        </div>

        <p class="caption" ><strong>2016 Köln Sürth</strong> 
        <br>Neubau an ein Einfamilienhaus für Küche, Schlafraum und Bad.<br> 
            
        Abriss Nebengebäude, Öffnung Bestandsbau und Erstellung Anbau.
        Bauzeit: 4 Monate<br>
        </p>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2016-05SuerthNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2016-01SuerthNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2016-02SuerthNachher.jpg);"></div>
        </div>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2016-11SuerthNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2016-06SuerthNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2016-08SuerthNachher.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/04Nachher/2016-09SuerthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-10SuerthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-12SuerthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-13SuerthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-14SuerthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-15SuerthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-16SuerthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-17SuerthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-18SuerthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-19SuerthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-20SuerthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-21SuerthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-22SuerthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-23SuerthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-24SuerthNachher.jpg" alt="Bild">
    </main>
    <?php 
        include_once('../partials/footer.php');
        
    ?>
</body>
</html>