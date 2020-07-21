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

        <img class="responsive-img" src="imgs/03Umbau/2013-01MuengersdorfUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2013-03MuengersdorfUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2013-04MuengersdorfUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2013-05MuengersdorfUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2013-06MuengersdorfUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2013-07MuengersdorfUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2013-07MuengersdorfVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2013-08MuengersdorfUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2013-09MuengersdorfUmbau.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>