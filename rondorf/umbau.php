<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2017 Köln Rondorf';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2017 Köln Rondorf';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', 'active'];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/03Umbau/2017-01RondorfUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2017-02RondorfUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2017-03RondorfUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2017-04RondorfUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2017-05RondorfUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2017-06RondorfUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2017-07RondorfUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2017-08RondorfUmbau.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>