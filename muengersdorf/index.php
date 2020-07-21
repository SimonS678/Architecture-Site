<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2013 Köln Müngersdorfg';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2013 Köln Müngersdorf';
            $link1 = ['vorher.php','Vorher', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', 'active'];
            $links = [$link1, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2013-03MuengersdorfNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2013-01MuengersdorfNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2013-02MuengersdorfNachher.jpg);"></div>
        </div>

        <p class="caption" ><strong>2013 Köln Müngersdorf</strong> <br>Am Serviesberg
        Entkernung und Umbau für ein Einfamilienhaus.
        </p>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2013-08MuengersdorfNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2013-04MuengersdorfNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2013-06MuengersdorfNachher.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/04Nachher/2013-07MuengersdorfNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2013-09MuengersdorfNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2013-10MuengersdorfNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2013-11MuengersdorfNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2013-12MuengersdorfNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2013-14MuengersdorfNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2013-15MuengersdorfNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2013-16MuengersdorfNachher.jpg" alt="Bild">


    </main>
    <?php 
        include_once('../partials/footer.php');
        
    ?>
</body>
</html>