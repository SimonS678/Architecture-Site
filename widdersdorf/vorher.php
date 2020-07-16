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

        <img class="responsive-img" src="imgs/01Vorher/2014-01WiddersdorfVorher.JPG" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-02WiddersdorfVorher.JPG" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-03WiddersdorfVorher.JPG" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-04WiddersdorfVorher.JPG" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-05WiddersdorfVorher.JPG" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-06WiddersdorfVorher.JPG" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-07WiddersdorfVorher.JPG" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-08WiddersdorfVorher.JPG" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-09WiddersdorfVorher.JPG" alt="Bild">
        <img class="responsive-img" src="imgs/01Vorher/2014-10WiddersdorfVorher.JPG" alt="Bild">
        
    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>