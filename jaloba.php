<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
	$name = htmlspecialchars($_POST["name"]);
	$email = htmlspecialchars($_POST["email"]);
	$message = htmlspecialchars($_POST["message"]);
	$phone = htmlspecialchars($_POST["phone"]);
	$url_d = htmlspecialchars($_POST["url_d"]);
	$cena_d = htmlspecialchars($_POST["cena_d"]);
	$subject = htmlspecialchars($_POST["subject"]);
	$ident = htmlspecialchars($_POST["ident"]);
	$name_tov = htmlspecialchars($_POST["name_tov"]);
	$error = "";
	$email_f = "FONARIK-MARKET.RU";
	$rand = rand(0, 1000);
	
	if ($ident != 1) {
		if(!$message) {
			$error .= "Пожалуйста введите Ваше сообщение";
		}
	} else {
		if(!$name) {
			$error .= "Пожалуйста введите Ваше имя<br>";
		}
		if(!$phone) {
			$error .= "Пожалуйста введите Ваш телефон<br>";
		}
	}
	if(!$error) {
		if ($ident != 1) {
			$message_f = "Имя клиента: ".$name."\n\nE-mail для ответа: ".$email."\n\nСообщение клиента: ".$message."\n\n";
			$mail = mail("info@fonarik.com", $subject, $message_f, "From: "."< ".$email_f." ".$rand." >");
			if($mail) {
				echo 'OK';
			}
		} else {
			$message_f = "Имя клиента: ".$name."\n\nТелефон клиента: ".$phone."\n\nНазвание товара: ".$name_tov."\n\nСсылка (где нашли дешевле): ".$url_d."\n\nЦена (которую нашли дешевле): ".$cena_d."\n\n";
			$mail = mail("info@fonarik.com", $subject, $message_f, "From: "."< ".$email_f." ".$rand." >");
			if($mail) {
				echo 'OK1';
			}
		}
	} else {
		echo '<div class="notification_error_j">'.$error.'</div>';
	}
}
?>