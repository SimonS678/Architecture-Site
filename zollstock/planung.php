<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2013 Köln Zollstock';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '2013 Köln Zollstock';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', 'active'];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/02Planung/2013-01PlanungEG.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2013-02PlanungA-A.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2013-03PlanungKG.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2013-04PlanungAnsicht.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>