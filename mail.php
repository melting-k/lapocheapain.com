<?php
	if(isset($_POST['host']) && $_POST['host']=='OK')
    {
		if(isset($_POST['g-recaptcha-response']))
		{
		$captcha=$_POST['g-recaptcha-response'];
		$secretKey = "6LeYbOAUAAAAAO-ihxCFMvVsC2BtW3mxa5jCOUWZ";
		$ip = $_SERVER['REMOTE_ADDR'];
		$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
		$responseKeys = json_decode($response,true);
		if(intval($responseKeys["success"]) !== 1) {
			Header("Location:https://www.lapocheapain.com/demande-de-devis-sac-a-pain-publicitaire.php");
		}else{
		$page = $_POST['page'];
		$TO = "r.peyruc@lapocheapain.com";
		$entete = "From: La Poche à Pain <contact@lapocheapain.com> \r\n";
		$entete .= "Content-Type: text/plain; charset=\"UTF-8\"; DelSp=\"Yes\"; format=flowed \r\n";
		$entete .= "Content-Disposition: inline \r\n";
		$entete .= "Content-Transfer-Encoding: 8bit \r\n";
		$entete .= "MIME-Version: 1.0";
		$subject = "NOUVEAU MESSAGE [LAPOCHEAPAIN.COM]";
		$message = "Vous avez reçu un message envoyé par le biais de votre site internet.\n\nVoici les coordonnées laissées par votre client :\n\n";
		while (list($key, $val) = each($_POST)) {
			if ($key=='host' || $key=='page')
			{
		
			}
			else
			{
				$message .="$key : $val\n";
				$message = stripslashes($message);
			}
		}
		
		$message .= "\nAttention, pour répondre à votre client, utilisez l'adresse mail qu'il vous a communiqué.";
		mail($TO, $subject, utf8_decode(utf8_encode($message)), $entete);
		Header("Location:".$page."?message=sent#devis");
		}

		}
	}
	else
	{
		Header("Location:".$page);
	}
?>
