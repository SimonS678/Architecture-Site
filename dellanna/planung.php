<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2001 Köln Braunsfeld';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '2001 Köln Braunsfeld';
            $link2 = ['planung.php','Planung', 'active'];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link2, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/02Planung/2002-01DellannaPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2002-02DellannaPlanung.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2002-03DellannaPlanung.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>