<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2015 Bonn Bad Godesberg';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2015 Bonn Bad Godesberg';
            $link1 = ['vorher.php','Vorher', ''];
            $link3 = ['umbau.php','Umbau', 'active'];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/03Umbau/2015-01BadGodesbergUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2015-02BadGodesbergUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2015-03BadGodesbergUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2015-04BadGodesbergUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2015-05BadGodesbergUmbau.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/03Umbau/2015-06BadGodesbergUmbau.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>