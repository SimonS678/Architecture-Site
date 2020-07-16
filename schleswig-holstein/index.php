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
            $link1 = ['virtuell.php','Virtuell', ''];
            $link2 = ['planung.php','Planung', ''];
            $link4 = ['index.php','Nachher', 'active'];
            $links = [$link1, $link2, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid">
            <div class="slide__left" style="background-image: url(imgs/04Gebaut/2013-01KöthelGebaut.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Gebaut/2013-02KöthelGebaut.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Gebaut/2013-04KöthelGebaut.jpg);"></div>
        </div>

        <p class="caption" ><strong>2013 Schleswig-Holstein, Köthel
        Gästehaus</strong> <br> Neubau eines Gästehauses in Norddeutschland.
        Minimallösung für ein Solitärhaus.<br> 
        </p>

            <img class="responsive-img" src="imgs/04Gebaut/2013-03KöthelGebaut.jpg" alt="Bild">
            <img class="responsive-img" src="imgs/04Gebaut/2013-05KöthelGebaut.jpg" alt="Bild">
       

    </main>
    <?php 
        include_once('../partials/footer.php');
        
    ?>
</body>
</html>