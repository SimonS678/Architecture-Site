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
            $link2 = ['planung.php','Planung', ''];
            $link4 = ['index.php','Nachher', 'active'];
            $links = [$link2, $link4];
            include_once('../partials/header.php');
        ?>
        
        <img class="responsive-img no-margin" src="imgs/04Nachher/02-01DellannaNachher.jpg">

        <p class="caption" ><strong>2001 Köln Braunsfeld Haus Dellanna</strong> 
        <br>Ein 30er-Jahre Haus in Köln-Braunsfeld mit einer Grundsücksbreite von 6 Metern wurde teilsaniert und mit einer Stahl-Holzterrasse erweitert.
        <br>Die leichte Konstruktion ist von Küche und Wohnzimmer erreichbar.
        </p>

        <img class="responsive-img" src="imgs/04Nachher/02-02DellannaNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/02-03DellannaNachher.jpg">
        <img class="responsive-img" src="imgs/04Nachher/02-04DellannaNachher.jpg">


    </main>
    <?php 
        include_once('../partials/footer.php');
        
    ?>
</body>
</html>