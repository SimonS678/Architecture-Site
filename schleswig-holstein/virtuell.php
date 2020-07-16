<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2013 Schleswig-Holstein, Köthel
    Gästehaus';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2013 Schleswig-Holstein, Köthel
            Gästehaus';
            $link1 = ['virtuell.php','Virtuell', 'active'];
            $link2 = ['planung.php','Planung', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/01Virtuell/2013-06KöthelVirtuell.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/01Virtuell/2013-01KöthelVirtuell.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/01Virtuell/2013-02KöthelVirtuell.jpg);"></div>
        </div>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/01Virtuell/2013-10KöthelVirtuell.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/01Virtuell/2013-03KöthelVirtuell.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/01Virtuell/2013-04KöthelVirtuell.jpg);"></div>
        </div>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/01Virtuell/2013-12KöthelVirtuell.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/01Virtuell/2013-05KöthelVirtuell.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/01Virtuell/2013-07KöthelVirtuell.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/01Virtuell/2013-08KöthelVirtuell.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Virtuell/2013-09KöthelVirtuell.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Virtuell/2013-11KöthelVirtuell.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>