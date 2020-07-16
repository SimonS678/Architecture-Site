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
            $link2 = ['planung.php','Planung', 'active'];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/02Planung/2014-01KöthelEG.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-02KöthelDG.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-03KöthelA-A.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-04KöthelNord.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-05KöthelSüd.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-06KöthelOst.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2014-07KöthelWest.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>