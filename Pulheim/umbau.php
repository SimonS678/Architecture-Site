<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2011 Pulheim';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2011 Pulheim';
            $link1 = ['vorher.php','Vorher', ''];
            $link3 = ['umbau.php','Umbau', 'active'];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/03Umbau/2011-01PulheimUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2011-05PulheimUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2011-03PulheimUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2011-04PulheimUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2011-06PulheimUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2011-02PulheimUmbau.jpg" alt="Bild">
        

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>