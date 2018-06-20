<?php
	$pagename="demande-de-devis-sac-a-pain-publicitaire.php";
    $PAGE_name = "contact";
    include '_header.php';
?>

    <body>
        <div id="skrollr-body">
            <header class="h370 bg-boulangerie" data-0="background-position: center 0px;" data-10000="background-position: center 5000px;">
                <div id="header-top" class="width960 blanc">
                    <a href="<?php echo $NAV_accueil; ?>" title="La Poche à Pain">
                        <img src="svg/logo-header.svg" alt="Logo La Poche à Pain" width="220" id="logo"/>
                    </a>

                    <?php include '_menu.php'; ?>

                </div>
                <div id="header-bottom" class="width960 center blanc">
                    <p class="oleo font40">Demande de devis</p>
                </div>
            </header>

            <section id="devis">
                <div id="form-contact" class="width960 noir font16 lato">
                    <div id="devis-txt">
                        <h1 class="oleo font40 vertclair">Contacter la Poche à Pain</h1>
                        <p>Pour toute demande de renseignements, de devis ou de prise de rendez-vous, vous pouvez contacter la Poche à Pain par téléphone, par e-mail ou en remplissant le formulaire de contact <span class="desktop">ci-contre</span><span class="mobile">ci-dessous</span>.</p>
                        <p class="font30 vertfonce"><span class="desktop">Tél. 05 61 55 12 11</span><a href="tel:0561551211" class="mobile vertfonce">Tél. 05 61 55 12 11</a></p>
                        <p class="latobold font20"><a href="mailto:contact@lapocheapain.com" class="noir">contact@lapocheapain.com</a></p>
                        <p class="vertclair font20">La Poche à Pain
                            <br /> 14 bis Impasse Couzinet
                            <br /> 1er étage
                            <br /> 31500 TOULOUSE</p>
                        <p class="latobold">Pour toute demande de devis, merci de nous indiquer la quantité désirée, ainsi que le nombre de couleurs du visuel (monochromie / bichromie / trichromie / quadrichromie).</p>
                    </div>

                    <?php 
            
            if(isset($_GET['message']) && $_GET['message']=='sent')
            {
                echo "<p id=\"merci\" class=\"oleo font30 vertfonce\">Votre message a bien été envoyé. Merci!</p>";
            }
            else { 
                
                ?>

                        <form id="formcontact" method="POST" action="mail.php">
                            <input type="text" name="Nom" tabindex="10" required placeholder="Nom, prénom :" />
                            <br/>
                            <input type="text" name="Societe" tabindex="20" required placeholder="Société :" />
                            <br/>
                            <input type="text" name="Adresse" tabindex="30" required placeholder="Adresse :" />
                            <br/>
                            <input type="text" name="Telephone" tabindex="40" required placeholder="Téléphone :" />
                            <br/>
							<input type="text" name="Ville" tabindex="45" required placeholder="Ville :" />
                            <br/>
                            <input type="text" name="Code-postal" tabindex="50" required placeholder="Code Postal :" />
                            <br/>
                            <input type="email" name="Mail" tabindex="60" required placeholder="Mail :" />
                            <br/>
                            <input type="text" name="host" id="host" value="OK" style="display:none;" tabindex="65" />
                            <input type="hidden" name="page" value="<?php echo $NAV_contact; ?>" tabindex="66" />
                            <textarea name="Message" id="Message" required tabindex="70" placeholder="Message :"></textarea>
                            <br/>
                            <p>
                                <input type="checkbox" id="consentement" name="Consentement" value="Exploitation des données dans le cadre de la demande de contact et de la relation commerciale pouvant en découler." onclick="removeConsentement();">
                            </p>
                            <p class="consentement">
                                En soumettant ce formulaire, j'accepte que les informations saisies soient exploitées dans le cadre de la demande de contact, et de la relation commerciale pouvant en découler.
                            </p>
                            <br/>
                            <input type="submit" value="ENVOYER" id="submit" class="bouton latobold font14 noir uppercase" />
                            <br/>
                            <p>
                                Pour connaître et exercer vos droits, notamment de retrait de votre consentement à l'utilisation des données collectées par ce formulaire, veuillez consulter <a href="<?php echo $NAV_mentions; ?>" class="vertclair" title="<?php echo $NAV_TITLE_mentions; ?>" target="_blank">notre politique de confidentialité</a>.
                            </p>
                        </form>
                        
                        <?php } ?>

                </div>
            </section>

            <aside id="map" style="font-size:0;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3437.1526947210095!2d1.4939336386897626!3d43.579688437749304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebda5143f253f%3A0xb69f5fc54c14000c!2s14+Impasse+Ren%C3%A9+Couzinet%2C+31500+Toulouse!5e0!3m2!1sfr!2sfr!4v1518108017699" width="100%" height="500" style="border:0;" allowfullscreen></iframe>
            </aside>

            <?php include '_footer.php'; ?>