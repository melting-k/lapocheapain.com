<footer class="bgnoir">
    <div class="width960 font16">
        <div class="desktop">
        <?php include '_menu.php'; ?>
        </div>

            <p class="blanc font14">La Poche à Pain
                <br />by SARL MELTING K
                <br />
                <br />Tél. 05 61 55 12 11
                <br />
                <br />14 bis Impasse Couzinet
                <br />1er étage
                <br />31500 TOULOUSE</p>

            <p class="blanc font14">Copyright 2016 - La Poche à Pain
                <br />Tous droits réservés
                <br />
                <br />Impression sur sacs à pain - Imprimerie poche à pain<br />Poches à pain publicitaire - Publicité sur sacs à pain<br />Publicité sur poche à pain Toulouse
                <br />
                <br />
                <a href="http://www.melting-k.fr" target="_blank" title="Création de sites internet à Toulouse">Une création Melting K</a> - <a href="mentions-legales.php" title="<?php echo $NAV_TITLE_mentions; ?>">Mentions légales</a>
            </p>
            <a href="<?php echo $NAV_accueil; ?>" title="La Poche à Pain"><img src="svg/logo-footer.svg" alt="logo la Poche à Pain" width="150" /></a>
    </div>

</footer>


</div>
<div id="bandeau-cookies" class="closed">
    <p class="width960">
        En poursuivant votre navigation sur ce site, vous acceptez que nous utilisions des cookies pour mesurer l'audience de notre site. Pour en savoir plus et paramétrer vos cookies, <a href="mentions-legales.php" title="<?php echo $NAV_TITLE_mentions; ?>" class="closeCookies vertclair">cliquez ici</a>.
    </p>
    <button class="closeCookies"></button>
</div>
<!--[if lt IE 11]>
			<script src="js/placeholder.js"></script>
        <![endif]-->

<!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="js/slick/slick.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.slider').slick({
            dots: false,
            draggable: false,
            fade: true,
            speed: 400,
            autoplay: true,
            autoplaySpeed: 4000,
            pauseOnHover: false
        });
        $('#formcontact').on('submit', function() {
            if (document.getElementById('consentement').checked) 
            {
                return true;
            } else {
                $('p.consentement').addClass('error');
                return false;
            }
        });
        
        // FONCTION D'OUVERTURE / FERMETURE DU MENU
        $('#bt-menu').on('click', function() {
            $(this).closest('#header-top').toggleClass('ouvert');
            $(this).closest('html').toggleClass('noscroll');
        });
        
        // Vérification des cookies
        checkCookies();
        
        // Fermeture du bandeau au clic
        $('.closeCookies').on('click', function(){
            if(typeof localStorage!='undefined') {
                localStorage.setItem("cookies","accepted");
            }
            $('#bandeau-cookies').addClass('closed');
        });
    });
    
    function removeConsentement() {
        if (document.getElementById('consentement').checked) 
        {
            $('p.consentement').removeClass('error');
        } else {
            $('p.consentement').addClass('error');
        }
    }
    function checkCookies() {
        var cookies = localStorage.getItem("cookies");
        if(cookies!='accepted' || !cookies.length()) {
            $('#bandeau-cookies').removeClass('closed');
        }
    }
</script>
<script type="text/javascript" src="js/skrollr.min.js"></script>
<script type="text/javascript">
        skrollr.init({
            smoothScrolling: false,
            forceHeight: false
        });
</script>
</body>

</html>