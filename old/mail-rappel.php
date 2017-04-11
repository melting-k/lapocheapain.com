<?php
	$TO = "romain.lapocheapain@gmail.com";
	$h = "From: " . $TO;
	$message = "";
	$subject = " Demande de rappel telephonique ";
	$message = "Vous avez reçu une demande de rappel téléphonique envoyée via votre site internet.\n\nVoici le numéro laissé par votre client :\n";
	while (list($key, $val) = each($_POST)) {
		$message .="$key : $val\n";
		$message = stripslashes($message);
	}
	$message .= "\nAttention, pour répondre à votre client, utilisez l'adresse mail qu'il vous a communiqué.";
	mail($TO, $subject, $message, $h);
	Header("Location: index-merci.php" );
?>