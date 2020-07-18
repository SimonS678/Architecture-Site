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
    ?><a href="../index.html">Zurück</a>
    </nav>
</header>

<div class="kontakt__container">
    <div class="kontakt__slide-container">
        <div class="kontakt__text"><div class="kontakt__text-inner">KONTAKT</div></div>
        <div class="kontakt__info">Freier Architekt<br>
            Kai Matzak<br>
            Diplom Ingenieur AKNW<br>
            Master of Architecture<br><br>
            Kartäuserhof 19<br>
            D- 50678 Köln<br><br>
            Tel: 0221 / 2616845<br>
            Fax: 0221 / 9916778<br><br>
            <a href="mailto:architektur@kai-matzak.de">architektur@kai-matzak.de</a></div>
    </div>
</div>