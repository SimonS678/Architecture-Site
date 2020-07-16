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
            $link1 = ['vorher.php','Vorher', 'active'];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/01Vorher/2015-01BadGodesbergVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2015-02BadGodesbergVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2015-03BadGodesbergVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2015-04BadGodesbergVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2015-05BadGodesbergVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2015-06BadGodesbergVorher.jpg" alt="Bild">
        
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>