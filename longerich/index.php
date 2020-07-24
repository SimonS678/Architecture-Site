<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2012 Köln Longerich';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2012 Köln Longerich';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', 'active'];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2012-12LongerichNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2012-01LongerichNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2012-02LongerichNachher.jpg);"></div>
        </div>

        <p class="caption" ><strong>2012 Köln Longerich</strong> 
            <br>Umbau einer Hinterhofwerkstatt zu Wohnzwecken. 
            <br>Kernsanierung und Ausbau Ober- und Dachgeschoss. 
            </p>

        <img class="responsive-img" src="imgs/04Nachher/2012-03LongerichNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2012-04LongerichNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2012-05LongerichNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2012-06LongerichNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2012-07LongerichNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2012-08LongerichNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2012-09LongerichNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2012-10LongerichNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2012-11LongerichNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2012-13LongerichNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2012-14LongerichNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2012-15LongerichNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2012-16LongerichNachher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/04Nachher/2012-17LongerichNachher.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
        
    ?>
</body>
</html>