<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2015 Köln Braunsfeld';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2015 Köln Braunsfeld';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', 'active'];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/03Umbau/2015-01BraunsfeldUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2015-01BraunsfeldVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2015-02BraunsfeldUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2015-03BraunsfeldUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2015-04BraunsfeldUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2015-05BraunsfeldUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2015-06BraunsfeldUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2015-07BraunsfeldUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2015-08BraunsfeldUmbau.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>