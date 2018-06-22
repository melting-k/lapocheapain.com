<nav class="uppercase font14 latobold">
    <ul>
        <li <?php if($PAGE_name == "accueil" ) {echo "class='active'";}?> >
            <a href="<?php echo $NAV_accueil; ?>" title="<?php echo $NAV_TITLE_accueil; ?>">Accueil</a>
        </li>
        <li <?php if($PAGE_name == "concept" ) {echo "class='active'";}?>>
            <a href="<?php echo $NAV_concept; ?>" title="<?php echo $NAV_TITLE_concept; ?>">Le Concept</a>
        </li>
        <li <?php if($PAGE_name == "realisations" ) {echo "class='active'";}?>>
            <a href="<?php echo $NAV_realisations; ?>" title="<?php echo $NAV_TITLE_realisations; ?>">Nos Réalisations</a>
        </li>
        <li <?php if($PAGE_name == "contact" ) {echo "class='active'";}?>>
            <a href="<?php echo $NAV_contact; ?>" title="<?php echo $NAV_TITLE_contact; ?>">Demande de devis</a>
        </li>
        <li>
            <span class="desktop">05 61 55 12 11</span><a href="tel:0561551211" class="mobile">05 61 55 12 11</a>
        </li>
    </ul>
</nav>
<button id="bt-menu" class="mobile">
    <span class="barre-menu"></span>
</button>