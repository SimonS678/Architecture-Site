<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2007 - 2008 Köln Bayenthal';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2007 - 2008 Köln Bayenthal';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', 'active'];
            $links = [$link1, $link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2007-04SchoenhauserNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2007-01SchoenhauserNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2007-02SchoenhauserNachher.jpg);"></div>
        </div>

        <p class="caption" ><strong>2007 - 2008 Köln Bayenthal</strong> 
        <br>Erweiterung/Umbau/Sanierung
        <br>Sanierung, Umbau und Erweiterung eines Einfamilienhauses in Köln Bayenthal.
        <br>Nach vollständiger Entkernung wurde eine Wohnfläche von ca. 170 qm geschaffen.
        <br>Gauben, Spitzboden und eine große gartenseitige Terrasse erweitern die vorhandene Wohnfläche.
        <br>Die Terrasse ist von der Küche und vom Esszimmer erreichbar.
        <br>Fensterschlitze in der Giebelfassade -Osten- bringen natürliche Belichtung in die anliegenden Räume.
        </p>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2007-06SchoenhauserNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2007-03SchoenhauserNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2007-05SchoenhauserNachher.jpg);"></div>
        </div>

    </main>
    <?php 
        include_once('../partials/footer.php');
        
    ?>
</body>
</html>