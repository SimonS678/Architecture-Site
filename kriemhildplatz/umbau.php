<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2008-2009 Köln Mauenheim';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2008-2009 Köln Mauenheim';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', 'active'];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/03Umbau/2008-02KriemhildUmbau.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/03Umbau/2008-01KriemhildUmbau.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/03Umbau/2008-03KriemhildUmbau.jpg);"></div>
        </div>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/03Umbau/2008-04KriemhildUmbau.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/03Umbau/2008-05KriemhildUmbau.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/03Umbau/2008-06KriemhildUmbau.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/03Umbau/2008-07KriemhildUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2008-08KriemhildUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2008-09KriemhildUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2008-10KriemhildUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2008-11KriemhildUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2008-12KriemhildUmbau.jpg" alt="Bild">
        
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>