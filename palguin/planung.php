<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2006 - 2007 Palguin Alto, Chile';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '2006 - 2007 Palguin Alto, Chile';
            $link2 = ['planung.php','Planung', 'active'];
            $link3 = ['umbau.php','Neubau', ''];
            $link4 = ['index.php','Gebaut', ''];
            $links = [$link2, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/02Planung/2006-01ChileGrundriss.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/02Planung/2006-02ChileSchnitt.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/02Planung/2006-03ChileWest.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/02Planung/2006-04ChileNord.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2006-05ChileOst.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/02Planung/2006-06ChileSued.jpg" alt="Bild">
       
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>