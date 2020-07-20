<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2010 Köln Südstadt';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2010 Köln Südstadt';
            $link1 = ['vorher.php','Vorher', 'active'];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/01Vorher/2010-01K19Vorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2010-02K19Vorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2010-03K19Vorher.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>