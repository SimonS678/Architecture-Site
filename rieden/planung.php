<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2007 Rieden, Rheinland-Pfalz (Eifel)';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '2007 Rieden, Rheinland-Pfalz (Eifel)';
            $link1 = ['vorher.php','Ansichten', ''];
            $link2 = ['planung.php','Planung', 'active'];
            $links = [$link1, $link2];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/02Planung/2007-01RiedenGrundriss.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2007-02RiedenSchnittA-A.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2007-03RiedenSchnittB-B.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2007-04RiedenSued.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2007-05RiedenWest.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2007-06RiedenNord.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2007-07RiedenOst.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>