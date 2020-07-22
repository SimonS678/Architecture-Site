<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2006 - 2007 Palguin Alto, Chile';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2006 - 2007 Palguin Alto, Chile';
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Neubau', 'active'];
            $link4 = ['index.php','Gebaut', ''];
            $links = [$link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/03Neubau/2006-01NeubauChile.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/03Neubau/2006-02NeubauChile.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/03Neubau/2006-03NeubauChile.jpg);"></div>
        </div>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/03Neubau/2006-06NeubauChile.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/03Neubau/2006-04NeubauChile.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/03Neubau/2006-05NeubauChile.jpg);"></div>
        </div>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/03Neubau/2006-11NeubauChile.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/03Neubau/2006-07NeubauChile.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/03Neubau/2006-08NeubauChile.jpg);"></div>
        </div>


        <img class="responsive-img" src="imgs/03Neubau/2006-09NeubauChile.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Neubau/2006-10NeubauChile.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>