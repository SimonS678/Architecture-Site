<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2015 Swisttal-Heimerzheim';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2015 Swisttal-Heimerzheim';
            $link1 = ['ansichten.php','Ansichten', 'active'];
            $link2 = ['planung.php','Planung', ''];
            $links = [$link1, $link2];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img no-margin" src="imgs/01Ansichten/2015-01SwisttalAnsicht.jpg" alt="Bild">

        <p class="caption" ><strong>2015 Swisttal-Heimerzheim</strong> 
        <br>Neubauplanung für ein Bürogebäude für eine Gerüstbaufirma
        Leistungsphasen 1-4<br> 
        </p>

        <img class="responsive-img" src="imgs/01Ansichten/2015-02SwisttalAnsicht.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Ansichten/2015-03SwisttalAnsicht.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Ansichten/2015-04SwisttalAnsicht.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Ansichten/2015-05SwisttalAnsicht.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Ansichten/2015-06SwisttalAnsicht.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>