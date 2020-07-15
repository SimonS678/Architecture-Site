<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2015 Köln-Gremberg';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2015 Köln-Gremberg';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', 'active'];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2016-11GfUNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2016-01GfUNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2016-02GfUNachher.jpg);"></div>
        </div>

        <p class="caption" ><strong>2015 Köln-Gremberg</strong> 
        <br> Umbau für eine IT-Schulungsfirma.
        Neuplanung Empfang, Mitarbeiterbüros, Pausen- und Servicebereich.
        </p>

        <img class="responsive-img" src="imgs/04Nachher/2016-03GfUNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-04GfUNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-05GfUNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-06GfUNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-07GfUNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-08GfUNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-09GfUNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2016-10GfUNachher.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
        
    ?>
</body>
</html>