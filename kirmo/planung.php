<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 1998 Helsinki, Finnland
    Entwurf Bibliothek';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '1998 Helsinki, Finnland
            Entwurf Bibliothek';
            $link2 = ['planung.php','Planung', 'active'];
            $links = [$link2];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img no-margin" src="imgs/02Planung/1998-01Mikkola.jpg" alt="Bild">

        <p class="caption" ><strong>1998 Helsinki, Finnland Entwurf Bibliothek</strong> 
            <br>Entwurf einer Bibliothek für den finnischen Architekten und Autor Kirmo Nikkola.
        </p>

        <img class="responsive-img" src="imgs/02Planung/1998-02Mikkola.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>