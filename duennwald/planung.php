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
            $link1 = ['vorher.php','Ansichten', ''];
            $link2 = ['planung.php','Planung', 'active'];
            $links = [$link1, $link2];
            include_once('../partials/header.php');
        ?>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/02Planung/2006-01NeubauDuennwaldEG.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/02Planung/2006-02NeubauDuennwaldKG.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/02Planung/2006-03NeubauDuennwaldOG.jpg);"></div>
        </div>

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>