<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<title>Editeur de news</title>
		<meta http-equiv="X-UA-Compatible" content="IE=8" />
		<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	</head>
	<body>	
		<?php
		if (isset($_POST['code']))
		{
			if ($_POST['code']=='aRt5f6o')
			{
				$fp = fopen ("news.txt", "r");
				$contenu_du_fichier = fgets ($fp, 5000);
				fclose ($fp);
				echo '	<form method="post" action="insert.php">
							<p>
								Editeur de news :<br />
								<textarea id="editor1" name="editor1">'.$contenu_du_fichier.'</textarea>
								<script type="text/javascript">
									CKEDITOR.replace( "editor1",
										{
											toolbar : "Perso"
										});
								</script>
							</p>
							<p>
								<input type="submit" />
							</p>
						</form>';
			} else {
			?>
			<div id="menu_text" align="left">
			<span style="color:#be0a27;"><b>Code &eacute;ronn&eacute;</b></span><br/>
			<span style="color:white;">&nbsp;</span>
			<form action="editeur.php" method="post">
			<span style="color:white;">Code d'acc&egrave;s : </span>
			<input type="text" name="code" />
			<input type="submit" />
			</form>
			</div>
		<?php
	}
	
} else {
	?>
		<form action="editeur.php" method="post">
		<div align="left">
			<span style="color:black;">Code d'acc&egrave;s : </span>
			<input type="text" name="code" />
			<input type="submit" />
		</div>
		</form>
		<?php 
		}
		?>
	</body>
</html>


 
