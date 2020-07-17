<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2012 Köln Porz';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2012 Köln Porz';
            $link1 = ['vorher.php','Vorher', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', 'active'];
            $links = [$link1, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2012-01PorzNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2012-02PorzNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2012-03PorzNachher.jpg);"></div>
        </div>

        <p class="caption" ><strong>2012 Köln Porz</strong> <br>Umbau in einem Mehrfamilienhauses.

        <br>Wohnungen werden für eine Familie zusammengelegt und neu erschlossen.

        <br>Ein Deckendurchbruch verbindet die Etagen.
        </p>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2012-08PorzNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2012-04PorzNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2012-06PorzNachher.jpg);"></div>
        </div>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2012-15PorzNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2012-07PorzNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2012-09PorzNachher.jpg);"></div>
        </div>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2012-16PorzNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2012-12PorzNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2012-13PorzNachher.jpg);"></div>
        </div>

            <img class="responsive-img" src="imgs/04Nachher/2012-17PorzNachher.jpg" alt="Bild">
            <img class="responsive-img" src="imgs/04Nachher/2012-18PorzNachher.jpg" alt="Bild">


    </main>
    <?php 
        include_once('../partials/footer.php');
        
    ?>
</body>
</html>