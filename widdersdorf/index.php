<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2014 Köln Widdersdorf';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2014 Köln Widdersdorf';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', ''];
            $link4 = ['index.php','Nachher', 'active'];
            $links = [$link1, $link2, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2014-01WiddersdorfNachher.JPG);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2014-03WiddersdorfNachher.JPG);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2014-07WiddersdorfNachher.JPG);"></div>
        </div>

        <p class="caption" ><strong>2014 Köln Widdersdorf</strong> 
        <br>Umbau und Sanierung eines kleinen Hauses im alten Dorfkern von Köln-Widdersdorf für ein Paar.<br>  
        </p>


        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2014-02WiddersdorfNachher.JPG);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2014-09WiddersdorfNachher.JPG);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2014-10WiddersdorfNachher.JPG);"></div>
        </div>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2014-04WiddersdorfNachher.JPG);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2014-11WiddersdorfNachher.JPG);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2014-12WiddersdorfNachher.JPG);"></div>
        </div>

        <div class="slide__container slide__grid_2 slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2014-05WiddersdorfNachher.JPG);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2014-06WiddersdorfNachher.JPG);"></div>
        </div>

        <div class="slide__container slide__grid_2 slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2014-08WiddersdorfNachher.JPG);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2014-13WiddersdorfNachher.JPG);"></div>
        </div>

        <div class="slide__container slide__grid_2 slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2014-14WiddersdorfNachher.JPG);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2014-15WiddersdorfNachher.JPG);"></div>
        </div>

    </main>
    <?php 
        include_once('../partials/footer.php');
        
    ?>
</body>
</html>