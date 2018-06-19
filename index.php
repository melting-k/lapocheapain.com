<?php
	$pagename="http://www.lapocheapain.com";
    $PAGE_name = "accueil";
    include '_header.php';
?>

    <body>

        <div id="skrollr-body">

            <header class="h490 bg-cuisine" data-0="background-position: center 0px;" data-10000="background-position: center 5000px;">
                <div id="header-top" class="width960 blanc">
                    <a href="<?php echo $NAV_accueil; ?>" title="La Poche à Pain">
                        <img src="svg/logo-header.svg" alt="Logo La Poche à Pain" width="220" />
                    </a>
                    
                    <?php include '_menu.php'; ?>
                    
                </div>
                <div id="header-bottom" class="width960 center blanc">
                    <p class="oleo font34">Entrez enfin dans le quotidien de vos prospects !</p>
                    <p class="lato font20">La Poche à pain, un support innovant, vous offrant une visibilité exceptionnelle</p>
                    <img src="images/poche-index.png" alt="poche à pain" />
                </div>
            </header>
            <section class="center noir width720" id="presentation-index">
                <h1 class="vertclair oleo font40">la Poche à Pain <br/>
                    <span class="vertfonce uppercase latobold font17">
                        Impression de publicité sur sacs à pain publicitaires.
                    </span>
                </h1>    
                <p class="font17 mb40">
                    Avec l'encombrement publicitaire de nos jours, il devient de plus en plus difficile d'être remarqué. Nous sommes chaque jour exposés à plus de 300 messages publicitaires.<br/>
                    Alors comment se démarquer, et comment faire en sorte que vos supports publicitaires soient vus, et reconnus par vos prospects ?
                    <br/><br/>
                    C'est de cette problématique qu'est né notre concept : <strong>La Poche à Pain</strong> !
                    <br/><br/>
                    <b class="vertclair oleo font30">Pourquoi "la poche" à pain ?</b><br/>
                    Il n'est pas question ici de <em>"poche"</em>, au sens littéral du terme. Dans la région de Toulouse, où nous sommes implantés depuis plus de 10 ans, une "poche" signifie un sac, ou un sachet.<br/>
                    C'est une expression très répandue, qui fait pleinement partie du vocabulaire local. Ainsi, donner le nom de "Poche à pain" à notre support était pour nous le moyen de lui donner un petit accent du Sud-Ouest ! La poche à pain, c'est donc un sac à pain, mais prononcé " à la toulousaine ".
                    <br/><br/>
                    Reste maintenant à vous présenter le concept du sac à pain publicitaire, et les raisons pour lesquelles il représente un support de communication original, statégique et efficace. Pour cela, nous vous invitons à découvrir notre concept en détails :
                </p>
                    <a href="<?php echo $NAV_concept; ?>" title="<?php echo $NAV_TITLE_concept; ?>" class="bouton noir uppercase latobold font14">Découvrir le concept</a>
            </section>
            <section id="actions">
                <div class="width960">
                    <h2 class="blanc oleo font40 titre">
                        Les atouts du sac à pain publicitaire
                    </h2>
                    <div class="action noir center">
                        <img src="svg/ciblage-blanc-01.svg" alt="Icone Conseil Ciblage" width="60" />

                        <h3 class="oleo font30">1. Conseil / Ciblage</h3>
                        <p class="font18">Accompagnement stratégique sur le message publicitaire, la zone de chalandise.</p>
                    </div>
                    <div class="action noir center">
                        <img src="svg/crea-blanc-01.svg" alt="Icone Création graphique" width="60" />
                        <h3 class="oleo font30">2. Création graphique</h3>
                        <p class="font18">Nous créons votre encart publicitaire adapté
                            <br />à la poche à pain, à partir de votre logo.</p>
                    </div>
                    <div class="action noir center">
                        <img src="svg/print-blanc-01.svg" alt="Icone Impression" width="60" />
                        <h3 class="oleo font30">3. Impression</h3>
                        <p class="font18">Nous imprimons la quantité convenue
                            <br />de poches à pain en moins de 15 jours.</p>
                    </div>
                    <div class="action noir center">
                        <img src="svg/distrib-blanc-01.svg" alt="Icone Distribution" width="60" />
                        <h3 class="oleo font30">4. Distribution</h3>
                        <p class="font18">Nous livrons les boulangeries partenaires
                            <br />qui distribuent votre publicité.</p>
                    </div>
                </div>
            </section>
            <section id="zoomsur">
                <div id="zoomsur-img" class="bgsimu">
                    <img src="images/realisations/Simulation-SPI-POCHE-A-PAIN-2016.jpg" alt="Poche à Pain Stéphane Plaza Immobilier" />
                </div>
                <div id="zoomsur-content" class="width960">
                    <h2 class="oleo vertclair font30">Zoom sur...</h2>
                    <h3 class="uppercase noir font18">Stéphane Plaza Immobilier</h3>
                    <p class="noir font17 mb40">Nous accompagnons plusieurs agences Stéphane Plaza Immobilier dans leur implantation à travers l’hexagone !</p>
                    <a href="<?php echo $NAV_realisations; ?>" title="<?php echo $NAV_TITLE_realisations; ?>" class="bouton noir uppercase latobold font14">NOS RÉFÉRENCES</a>
                </div>
            </section>

            <?php include '_footer.php'; ?>