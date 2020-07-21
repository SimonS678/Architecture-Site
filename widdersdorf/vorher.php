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
            $link1 = ['vorher.php','Vorher', 'active'];
            $link2 = ['planung.php','Planung', ''];
            $link4 = ['index.php','Nachher', ''];
            $links = [$link1, $link2, $link4];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img" src="imgs/01Vorher/2014-01WiddersdorfVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-02WiddersdorfVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-03WiddersdorfVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-04WiddersdorfVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-05WiddersdorfVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-06WiddersdorfVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-07WiddersdorfVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-08WiddersdorfVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-09WiddersdorfVorher.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-10WiddersdorfVorher.jpg" alt="Bild">
        
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>