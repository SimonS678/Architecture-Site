<!DOCTYPE html>
<html lang="de">
<?php
    $title = 'Kai Matzak Architekt 2003 Haus 9';
    include_once('../partials/head.php')
?>

<body>
    <main>
        <?php
            $siteInfo = '2003 Haus 9';
            $link1 = ['vorher.php','Ansichten', 'active'];
            $link2 = ['planung.php','Planung', ''];
            $links = [$link1, $link2];
            include_once('../partials/header.php');
        ?>

        <img class="responsive-img no-margin" src="imgs/01Ansichten/2003-01Haus9.jpg" alt="Bild">

        <p class="caption" ><strong>2003 Haus 9</strong> 
            <br>Planung eines Einfamilienhauses
                in Rösrath-Hoffnungstal.
        </p>

        <img class="responsive-img" src="imgs/01Ansichten/2003-02Haus9.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Ansichten/2003-03Haus9.jpg" alt="Bild">
        <img class="responsive-img" src="imgs/01Ansichten/2003-04Haus9.jpg" alt="Bild">
        

    </main>
    <?php 
        include_once('../partials/footer.php');
    ?>
</body>
</html>