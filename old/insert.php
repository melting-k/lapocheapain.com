<?php
	$news = str_replace( '<p>', '', $_POST['editor1']);
	$news = str_replace( '</p>', '<br/>', $news);
	$news = str_replace(CHR(13),"",$news);
	$news = str_replace(CHR(10),"",$news);
	$news = stripslashes($news);
	$fp = fopen ("news.txt", "w");
	$contenu_du_fichier = fwrite ($fp, $news);
	fclose ($fp);
	header('Location: editeur.php'); 
?>