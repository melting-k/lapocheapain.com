<?php
	$TO = "romain.lapocheapain@gmail.com";
	$h = "From: " . $TO;
	$message = "";
	$subject = " Nouveau message de votre site [La Poche à Pain] ";
	$message = "Vous avez reçu un message envoyé par le biais de votre site internet.\n\nVoici les coordonnées laissées par votre client :\n\n ";
	while (list($key, $val) = each($_POST)) {
		$message .="$key : $val\n";
		$message = stripslashes($message);
	}
	$message .= "\nAttention, pour répondre à votre client, utilisez l'adresse mail qu'il vous a communiqué.";
	mail($TO, $subject, $message, $h);
	Header("Location: contact-merci.php" );
?>