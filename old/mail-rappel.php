<?php
	$TO = "romain.lapocheapain@gmail.com";
	$h = "From: " . $TO;
	$message = "";
	$subject = " Demande de rappel telephonique ";
	$message = "Vous avez re�u une demande de rappel t�l�phonique envoy�e via votre site internet.\n\nVoici le num�ro laiss� par votre client :\n";
	while (list($key, $val) = each($_POST)) {
		$message .="$key : $val\n";
		$message = stripslashes($message);
	}
	$message .= "\nAttention, pour r�pondre � votre client, utilisez l'adresse mail qu'il vous a communiqu�.";
	mail($TO, $subject, $message, $h);
	Header("Location: index-merci.php" );
?>