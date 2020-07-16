<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2014 Köln Widdersdorf';
    include_once('../partials/head.php')
?>

<body>
    <main>
    <?php
            $siteInfo = '2014 Köln Widdersdorf';
            $link1 = ['vorher.php','Vorher', ''];
            $link2 = ['planung.php','Planung', 'active'];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/02Planung/2014-03WiddrsdorfA-A.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/02Planung/2014-02WiddrsdorfDG.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/02Planung/2014-01WiddrsdorfEG.jpg);"></div>
        </div>

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>