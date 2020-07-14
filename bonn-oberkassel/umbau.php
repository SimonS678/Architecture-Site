<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2019, Bonn Oberkassel';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2019, Bonn Oberkassel';
            $link1 = ['vorher.php','Vorher', ''];
            $link3 = ['umbau.php','Umbau', 'active'];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/03Umbau/2019-01BonnUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2019-02BonnUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2019-03BonnUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2019-04BonnUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2019-05BonnUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2019-06BonnUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2019-07BonnUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2019-08BonnUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2019-09BonnUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2019-10BonnUmbau.jpg" alt="Bild">
        
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>