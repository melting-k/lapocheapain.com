<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<title>Publicité sur sac à pain - Impression sac à pain Toulouse</title>
		<meta name='description' content="La Poche à Pain : Impression de publicité sur sacs à pain. Découvrez un support de communication impactant & innovant ! ">
		<meta name="keywords" content="La poche à pain, poche a pain toulouse, publicité pain toulouse, publicité sur poche à pain, publicité sur sac a pain, sac a pain, sac a pain toulouse, publicite toulouse">
		<meta name="robots" content="index,follow"> 
		<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
		
		<script type='text/javascript' src="flexcroll.js"></script>
		<script type="text/javascript">
			function inputFocus(input) {
			if(input.value==input.defaultValue) {
			input.value = '';
			input.style.color = 'black';
			}
			}
			function inputBlur(input) {
			  if(input.value=='') {
				input.value = input.defaultValue;
				input.style.color = 'gray';
			  }
			}
		</script>
	
		<link rel="stylesheet" href="flexcrollstyles.css" type="text/css" media="screen" />
		<link rel='stylesheet' media='screen' type='text/css' title='feuille_de_style' href='design.css' />
	</head>
	<body>
		<div id='content'>
			<a href="index.php" id="logo"></a>
			
			<div id="menu">
				<a href="index.php" id="bt-accueil"></a>
				<a href="<?php echo $NAV_concept; ?>" id="bt-concept"></a>
				<a href="references.php" id="bt-references"></a>
				<a href="tarifs.php" id="bt-tarifs"></a>
				<a href="contact.php" id="bt-contact"></a>
			</div>
			
			<div id="img-header">
			</div>
			
			<div id="content-contact">
				<div id='txt-tarifs'>
					<strong style='font-size:14px;'>Tarifs : </strong>
					<br/><br/><br/>
					<em style='font-weight:bold;'>Espace réservé à nos clients.</em><br/>
					Veuillez vous connecter en renseignants les champs ci-dessous :
					<br/><br/><br/><br/>
					<form method='POST' action='tarifs.php'>
						<table style='margin:auto;'>
						<tr>
						<td><label for='login'>Login :&nbsp;&nbsp;</label></td><td> <input type='text' style='width:200px;' name='login' id='login' tabindex='10'/></td>
						</tr>
						<tr>
						<td><label for='mdp'>Mot de Passe :&nbsp;&nbsp;</label></td><td><input type='password' style='width:200px;' name='mdp' id='mdp' value='' tabindex='20'/></td>
						</tr>
						<tr>
						<td colspan='2'><input type='submit' value='Se connecter'/></td>
						</tr>
						</table>
					</form>
					<?php
						if (isset($_POST['login']) && isset($_POST['mdp']))
							{
								$login=$_POST['login'];
								$mdp=$_POST['mdp'];
								if ($login=='lapocheapain' && $mdp=='gR3sT7u1')
								{
									echo "<br/><br/><a href='tarifs-2012.pdf' style='font-weight:bold; font-size:14px;' target='_blank'>Télécharger le fichier</a>";
								}
								else
								{
									echo "<br/><br/><em style='font-weight:bold; color:red; text-align:center; display:block;'>Erreur d'identification</em><br/>Veuillez entrer à nouveau vos identifiants.";
								}
							}
					?>
				</div>
			</div>
			
			<div id="footer">
				www.lapocheapain.com by SARL MELTING K- Impression sur sacs à pain - Imprimerie poche à pain - poches à pain publicitaire - Publicité sur sacs à pain - Publicité sur poche à pain Toulouse - Création <a href='http://www.melting-k.fr' target='_blank'>Melting K</a>
			</div>
		</div>
	</body>

</html>
