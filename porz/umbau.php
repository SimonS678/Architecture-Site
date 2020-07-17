<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2012 Köln Porz';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2012 Köln Porz';
            $link1 = ['vorher.php','Vorher', ''];
            $link3 = ['umbau.php','Umbau', 'active'];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link3, $link4];
            include_once('../partials/header.php');
        ?>

        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/03Umbau/2012-01PorzUmbau.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/03Umbau/2012-02PorzUmbau.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/03Umbau/2012-04PorzUmbau.jpg);"></div>
        </div>
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/03Umbau/2012-03PorzUmbau.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/03Umbau/2012-05PorzUmbau.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/03Umbau/2012-07PorzUmbau.jpg);"></div>
        </div>
        <div class="slide__container slide__grid slide__grid--margin">
            <div class="slide__left" style="background-image: url(imgs/03Umbau/2012-06PorzUmbau.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/03Umbau/2012-08PorzUmbau.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/03Umbau/2012-09PorzUmbau.jpg);"></div>
        </div>

        <img class="responsive-img" src="imgs/03Umbau/2012-10PorzUmbau.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>