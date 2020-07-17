<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2013 Köln Müngersdorf';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2013 Köln Müngersdorf';
            $link1 = ['vorher.php','Vorher', ''];
            $link3 = ['umbau.php','Umbau', 'active'];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/03Umbau/2013-01MüngersdorfUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2013-03MüngersdorfUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2013-04MüngersdorfUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2013-05MüngersdorfUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2013-06MüngersdorfUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2013-07MüngersdorfUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2013-07MüngersdorfVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2013-08MüngersdorfUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2013-09MüngersdorfUmbau.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>