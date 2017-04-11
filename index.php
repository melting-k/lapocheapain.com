<?php
	$current="index";
	$pagename="http://www.lapocheapain.com";

    include '_header.php';
?>

    <body>

        <div id="skrollr-body">

            <header class="h490 bg-cuisine" data-0="background-position: center 0px;" data-10000="background-position: center 5000px;">
                <div id="header-top" class="width960 blanc">
                    <a href="http://www.lapocheapain.com" title="La Poche à Pain">
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
                <h1 class="vertclair oleo font40">la Poche à Pain</h1>
                <p class="vertfonce uppercase latobold font17">Impression de publicité sur poches et sacs à pain publicitaires.
                    <br/>
                    <br/>
                </p>
                <p class="font17 mb40">Avec l'encombrement publicitaire de nos jours, il devient de plus en plus difficile d'être remarqué. Nous sommes chaque jour exposés à plus de 300 messages publicitaires.
                    <br />
                    <br />Optez pour un emplacement tactique et innovant, au coeur des foyers de vos prospects :
                    <br />le sac à pain publicitaire !</p>
                <a href="concept.php" title="Le concept Poche à Pain" class="bouton noir uppercase latobold font14">En savoir plus</a>
            </section>
            <section id="actions">
                <div class="width960">
                    <div class="action noir center">
                        <img src="svg/ciblage-blanc-01.svg" alt="Icone Conseil Ciblage" width="60" />

                        <h2 class="oleo font30">1. Conseil / Ciblage</h2>
                        <p class="font18">Accompagnement stratégique sur le message publicitaire, la zone de chalandise.</p>
                    </div>
                    <div class="action noir center">
                        <img src="svg/crea-blanc-01.svg" alt="Icone Création graphique" width="60" />
                        <h2 class="oleo font30">2. Création graphique</h2>
                        <p class="font18">Nous créons votre encart publicitaire adapté
                            <br />à la poche à pain, à partir de votre logo.</p>
                    </div>
                    <div class="action noir center">
                        <img src="svg/print-blanc-01.svg" alt="Icone Impression" width="60" />
                        <h2 class="oleo font30">3. Impression</h2>
                        <p class="font18">Nous imprimons la quantité convenue
                            <br />de poches à pain en moins de 15 jours.</p>
                    </div>
                    <div class="action noir center">
                        <img src="svg/distrib-blanc-01.svg" alt="Icone Distribution" width="60" />
                        <h2 class="oleo font30">4. Distribution</h2>
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
                    <h1 class="oleo vertclair font30">Zoom sur...</h1>
                    <h2 class="uppercase noir font18">Stéphane Plaza Immobilier</h2>
                    <p class="noir font17 mb40">Nous accompagnons plusieurs agences Stéphane Plaza Immobilier dans leur implantation à travers l’hexagone !</p>
                    <a href="realisations.php" title="Découvrir nos réalisations" class="bouton noir uppercase latobold font14">En savoir plus</a>
                </div>
            </section>

            <?php include '_footer.php'; ?>