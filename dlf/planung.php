<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2000-2001 DLF - Deutschlandfunk
    Das gläserne Studio';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '2000-2001 DLF - Deutschlandfunk
            Das gläserne Studio';
            $link2 = ['planung.php','Planung', 'active'];
            $links = [$link2];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img no-margin" src="imgs/02Planung/2000-01DLF.jpg" alt="Bild">

        <p class="caption" ><strong>2000-2001 DLF - Deutschlandfunk Das gläserne Studio</strong> 
            <br>Planung eines mobilen Studios für temporäre Veranstaltungen mit einer transparenten Aussenhülle.
            <br>Interviews werden öffentlich erlebbar (Übertragung des Interviews durch Lautsprecher in den Aussenbereich), ohne dass Umgebungsgeräusche das Gespräch stören.
        </p>

        <img class="responsive-img" src="imgs/02Planung/2000-02DLF.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2000-03DLF.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>