<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2011-2012 Bergisch-Gladbach';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2011-2012 Bergisch-Gladbach';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', 'active'];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2011-12GLNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2011-01GLNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2011-02GLNachher.jpg);"></div>
        </div>

        <p class="caption" ><strong>2011-2012 Bergisch-Gladbach</strong> 
        <br>Kernsanierung und vollständiger Umbau eines kleinen Einfamilienhauses
        Terrassenanbau und Garagenerweiterung
        </p>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2011-13GLNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2011-03GLNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2011-04GLNachher.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/04Nachher/2011-05GLNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2011-06GLNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2011-07GLNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2011-08GLNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2011-09GLNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2011-10GLNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/2011-11GLNachher.jpg">


    </main>
    <?php 
        include_once('../partials/footer.php');
        
    ?>
</body>
</html>