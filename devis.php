<?php
	$current="devis";
	$pagename="devis.php";

    include '_header.php';
?>

    <body>
        <div id="skrollr-body">
            <header class="h370 bg-boulangerie" data-0="background-position: center 0px;" data-10000="background-position: center 5000px;">
                <div id="header-top" class="width960 blanc">
                    <a href="http://www.lapocheapain.com" title="La Poche à Pain">
                        <img src="svg/logo-header.svg" alt="Logo La Poche à Pain" width="220" />
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
                        <p>Pour toute demande de renseignements, de devis ou de prise de rendez-vous, vous pouvez contacter la Poche à Pain par téléphone, mail ou en remplissant le formulaire de contact ci-contre.</p>
                        <p class="font30 vertfonce">Tél. 05 61 55 12 11
                            <br /> Fax. 09 72 32 45 35</p>
                        <p class="latobold font20">contact@lapocheapain.com</p>
                        <p class="vertclair font20">La Poche à Pain
                            <br /> 5 Avenue Marcel Dassault
                            <br /> Bât.A - 6° étage
                            <br /> 31400 TOULOUSE</p>
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
                            <input type="hidden" name="page" value="devis.php" tabindex="66" />
                            <textarea name="Message" id="Message" required tabindex="70" placeholder="Message :"></textarea>
                            <br/>
                            <input type="submit" value="ENVOYER" class="bouton latobold font14 noir uppercase" />
                        </form>

                        <?php } ?>

                </div>
            </section>

            <aside id="map" style="font-size:0;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d38887.04358962901!2d1.4690309158086354!3d43.57953370662816!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebdb98c393fd9%3A0x2408cb290ae34993!2s5+Avenue+Marcel+Dassault%2C+31500+Toulouse!5e0!3m2!1sfr!2sfr!4v1462368347569" width="100%" height="500" style="border:0" style="pointer-events:none;" allowfullscreen></iframe>
            </aside>

            <?php include '_footer.php'; ?>