<?php
$post = (!empty($_POST)) ? true : false;
if($post)
{
$name = trim($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);
$subject = htmlspecialchars($_POST["subject"]);
$error = "";
$email_f = "FONARIK-MARKET.RU";
$rand = rand(0, 1000);

if(!$message)
{
$error .= "Пожалуйста введите Ваше сообщение";
}
if(!$error)
{
$message_f = "Имя клиента: ".$name."\n\nE-mail для ответа: ".$email."\n\nСообщение клиента: ".$message."\n\n";
$mail = mail("info@fonarik.com", $subject, $message_f,

"From: "."< ".$email_f." ".$rand." >");
if($mail)
{
echo 'OK';
}
}
else
{
echo '<div class="notification_error_j">'.$error.'</div>';
}
}
?>