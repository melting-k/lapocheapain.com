<?php
	$TO = "romain.lapocheapain@gmail.com";
	$h = "From: " . $TO;
	$message = "";
	$subject = " Nouveau message de votre site [La Poche � Pain] ";
	$message = "Vous avez re�u un message envoy� par le biais de votre site internet.\n\nVoici les coordonn�es laiss�es par votre client :\n\n ";
	while (list($key, $val) = each($_POST)) {
		$message .="$key : $val\n";
		$message = stripslashes($message);
	}
	$message .= "\nAttention, pour r�pondre � votre client, utilisez l'adresse mail qu'il vous a communiqu�.";
	mail($TO, $subject, $message, $h);
	Header("Location: contact-merci.php" );
?>