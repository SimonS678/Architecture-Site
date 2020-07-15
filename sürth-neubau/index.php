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
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2016-07SürthNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2016-03SürthNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2016-04SürthNachher.jpg);"></div>
        </div>

        <p class="caption" ><strong>2016 Köln Sürth</strong> 
        <br>Neubau an ein Einfamilienhaus für Küche, Schlafraum und Bad.<br> 
            
        Abriss Nebengebäude, Öffnung Bestandsbau und Erstellung Anbau.
        Bauzeit: 4 Monate<br>
        </p>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2016-05SürthNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2016-01SürthNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2016-02SürthNachher.jpg);"></div>
        </div>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2016-11SürthNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2016-06SürthNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2016-08SürthNachher.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/04Nachher/2016-09SürthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-10SürthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-12SürthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-13SürthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-14SürthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-15SürthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-16SürthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-17SürthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-18SürthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-19SürthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-20SürthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-21SürthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-22SürthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-23SürthNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-24SürthNachher.jpg" alt="Bild">
    </main>
    <?php 
        include_once('../partials/footer.php');
        
    ?>
</body>
</html>