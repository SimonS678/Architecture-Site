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
            $link1 = ['vorher.php','Vorher', 'active'];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/01Vorher/2011-01PulheimVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2011-02PulheimVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2011-03PulheimVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2011-04PulheimVorher.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>