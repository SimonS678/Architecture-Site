<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2003 Bergisch-Gladbach';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '2003 Bergisch-Gladbach';
            $link2 = ['planung.php','Planung', 'active'];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>

<img class="responsive-img" src="imgs/02Planung/2003-01PrumbaumEG.jpg" alt="Bild">
<img class="responsive-img" src="imgs/02Planung/2003-02PrumbaumOG.jpg" alt="Bild">
<img class="responsive-img" src="imgs/02Planung/2003-03PrumbaumDG.jpg" alt="Bild">
<img class="responsive-img" src="imgs/02Planung/2003-04PrumbaumA-A.jpg" alt="Bild">
<img class="responsive-img" src="imgs/02Planung/2003-05PrumbaumWesten.jpg" alt="Bild">
<img class="responsive-img" src="imgs/02Planung/2003-06PrumbaumSueden.jpg" alt="Bild">
<img class="responsive-img" src="imgs/02Planung/2003-07PrumbaumNorden.jpg" alt="Bild">
<img class="responsive-img" src="imgs/02Planung/2003-08PrumbaumInnen.jpg" alt="Bild">
<img class="responsive-img" src="imgs/02Planung/2003-09PrumbaumInnen.jpg" alt="Bild">
<img class="responsive-img" src="imgs/02Planung/2003-10PrumbaumAussen.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>