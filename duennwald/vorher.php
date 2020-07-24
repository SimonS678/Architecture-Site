<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2006 Köln Dünnwald';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2006 Köln Dünnwald';
            $link1 = ['vorher.php','Ansichten', 'active'];
            $link2 = ['planung.php','Planung', ''];
            $links = [$link1, $link2];
            include_once('../partials/header.php');
        ?>

        <div class="slide__container slide__grid">
            <div class="slide__left" style="background-image: url(imgs/01Ansichten/2006-04NeubauDuennwald.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/01Ansichten/2006-01NeubauDuennwald.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/01Ansichten/2006-02NeubauDuennwald.jpg);"></div>
        </div>

        <p class="caption" ><strong>2006 Köln Dünnwald</strong> 
            <br>Neubauplanung Einfamilienhauses
            <br>Entwurf Einfamilienhaus mit Einliegerwohnung in Köln-Dünnwald.
        
        </p>

        <img class="responsive-img" src="imgs/01Ansichten/2006-03NeubauDuennwald.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Ansichten/2006-05NeubauDuennwald.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>