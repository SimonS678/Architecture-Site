<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2004 Köln, TÜV Rheinland';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '2004 Köln, TÜV Rheinland';
            $link2 = ['planung.php','Planung', 'active'];
            $links = [$link2];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img no-margin" src="imgs/02Planung/2004TUEVRheinland.jpg" alt="Bild">

        <p class="caption" ><strong>2004 Köln, TÜV Rheinland</strong> 
            <br>Planung von Schulungsräumen für
            eine IT-Seminarfirma im Gebäude
            des TÜV-Rheinland in Köln.
        </p>

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>