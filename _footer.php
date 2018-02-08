<footer class="bgnoir">
    <div class="width960 font16">

        <?php include '_menu.php'; ?>

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
                <br /><a href="http://www.melting-k.fr" target="_blank" title="Création de sites internet à Toulouse">Une création Melting K</a></p>
            <a href="http://www.lapocheapain.com" title="La Poche à Pain"><img src="svg/logo-footer.svg" alt="logo la Poche à Pain" width="150" /></a>
    </div>

</footer>


</div>



<script type="text/javascript" src="js/prefixfree.js"></script>

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
            /*setting - name: setting - value*/
            dots: false,
            draggable: false,
            fade: true,
            speed: 400,
            autoplay: true,
            autoplaySpeed: 4000,
            pauseOnHover: false
        });
    });
</script>

<script type="text/javascript" src="js/skrollr.min.js"></script>
<script type="text/javascript">

        skrollr.init({
            smoothScrolling: false,
            forceHeight: false
        });
    
        $('#map').click(function () {
            $('#map iframe').css("pointer-events", "auto");
        });
        $( "#map" ).mouseleave(function() {
          $('#map iframe').css("pointer-events", "none"); 
        }); 
</script>

</body>

</html>