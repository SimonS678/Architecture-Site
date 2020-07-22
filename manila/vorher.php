<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2006 Manila, Philippinen';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2006 Manila, Philippinen';
            $link1 = ['vorher.php','Ansichten', 'active'];
            $link2 = ['planung.php','Planung', ''];
            $links = [$link1, $link2];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img no-margin" src="imgs/01Ansichten/2006-01Manila.jpg" alt="Bild">

        <p class="caption" ><strong>2006 Manila, Philippinen</strong> 
            <br>One Package House
            <br>Planung von Notunterkünften für den Wiederaufbau nach Naturkatastrophen für die "National Housing Authority", Republic of the Philippines
        
        </p>

        <img class="responsive-img" src="imgs/01Ansichten/2006-02Manila.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Ansichten/2006-03Manila.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Ansichten/2006-04Manila.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Ansichten/2006-05Manila.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Ansichten/2006-06Manila.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Ansichten/2006-07Manila.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Ansichten/2006-08Manila.jpg" alt="Bild">

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>