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
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2013-03MüngersdorfNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2013-01MüngersdorfNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2013-02MüngersdorfNachher.jpg);"></div>
        </div>

        <p class="caption" ><strong>2013 Köln Müngersdorf</strong> <br>Am Serviesberg
        Entkernung und Umbau für ein Einfamilienhaus.
        </p>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2013-08MüngersdorfNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2013-04MüngersdorfNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2013-06MüngersdorfNachher.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/04Nachher/2013-07MüngersdorfNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2013-09MüngersdorfNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2013-10MüngersdorfNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2013-11MüngersdorfNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2013-12MüngersdorfNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2013-14MüngersdorfNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2013-15MüngersdorfNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2013-16MüngersdorfNachher.jpg" alt="Bild">


    </main>
    <?php 
        include_once('../partials/footer.php');
        
    ?>
</body>
</html>