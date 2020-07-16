<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2015 Bonn Bad Godesberg';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2015 Bonn Bad Godesberg';
            $link1 = ['vorher.php','Vorher', ''];
            $link3 = ['umbau.php','Umbau', ''];
            $link4 = ['index.php','Nachher', 'active'];
            $links = [$link1, $link3, $link4];
            include_once('../partials/header.php');
        ?>
        
        <div class="slide__container slide__grid">
            <div class="slide__left" style="background-image: url(imgs/04Nachher/2015-10BadGodesbergNachher.jpg);"></div> 
            <div class="slide__right-up" style="background-image: url(imgs/04Nachher/2015-01BadGodesbergNachher.jpg);"></div>
            <div class="slide__right-down" style="background-image: url(imgs/04Nachher/2015-02BadGodesbergNachher.jpg);"></div>
        </div>

        <p class="caption" ><strong>2015 Bonn Bad Godesberg</strong> <br>Falscher Text Text Helsinki</p>

            <img class="responsive-img" src="imgs/04Nachher/2015-03BadGodesbergNachher.jpg" alt="Bild">
            <img class="responsive-img" src="imgs/04Nachher/2015-04BadGodesbergNachher.jpg" alt="Bild">
            <img class="responsive-img" src="imgs/04Nachher/2015-05BadGodesbergNachher.jpg" alt="Bild">
            <img class="responsive-img" src="imgs/04Nachher/2015-06BadGodesbergNachher.jpg" alt="Bild">
            <img class="responsive-img" src="imgs/04Nachher/2015-07BadGodesbergNachher.jpg" alt="Bild">
            <img class="responsive-img" src="imgs/04Nachher/2015-08BadGodesbergNachher.jpg" alt="Bild">
            <img class="responsive-img" src="imgs/04Nachher/2015-09BadGodesbergNachher.jpg" alt="Bild">
            <img class="responsive-img" src="imgs/04Nachher/2015-11BadGodesbergNachher.jpg" alt="Bild">
            <img class="responsive-img" src="imgs/04Nachher/2015-12BadGodesbergNachher.jpg" alt="Bild">
            <img class="responsive-img" src="imgs/04Nachher/2015-13BadGodesbergNachher.jpg" alt="Bild">
            <img class="responsive-img" src="imgs/04Nachher/2015-14BadGodesbergNachher.jpg" alt="Bild">


    </main>
    <?php 
        include_once('../partials/footer.php');
        
    ?>
</body>
</html>