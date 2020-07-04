<header>
    <div class="logo-line"></div>
    <a href="../index.html">
        <img class="header-text" src="../imgs/Kai-Matzak-Schrift.svg" alt="Kai-Matzak-Schrift">
    </a>
    <a href="../index.html"> 
        <img class="logo" src="../imgs/Kai-Matzak-Logo.svg" alt="Kai-Matzak-Logo">
    </a>
    <div class="site-info"><?php echo $siteInfo; ?></div>
    <nav>
    <?php 
        foreach($links as $link) {
            echo '<a href="'.$link[0].'" class="'.$link[2].'">'.$link[1].'</a>';
        }
    ?>
    </nav>
</header>