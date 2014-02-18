<?php
$post = (!empty($_POST)) ? true : false;
if($post)
{
$tovar = trim($_POST["tovar"]);
$tovar = htmlspecialchars($_POST["tovar"]);
$title_contact_form = $_POST["title_contact_form"];
$tel = htmlspecialchars($_POST["tel"]);
$error = "";
$name = " - НЕКОНДИЦИЯ FONARIK-MARKET.RU";
$email = "FONARIK-MARKET.RU";
$rand = rand(0, 1000);
/*if(!$name)
{
$error .= "Пожалуйста введите ваше имя.<br />";
}*/
// Check email
/*function ValidateEmail($value)
{
$regex = "/^([a-zA-Z0-9])+([\.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-]+)*\.([a-zA-Z]{2,6})$/";
if($value == "") {
return false;
} else {
$string = preg_replace($regex, "", $value);
}
return empty($string) ? true : false;
}
if(!$email)
{
$error .= "Пожалуйста введите e-mail.<br />";
}
if($email && !ValidateEmail($email))
{
$error .= "Введите корректный e-mail.<br />";
}*/
// Check tel
/*function ValidateTel($valueTel)
{
$regexTel = "/^[0-9]{10,20}$/";
if($valueTel == "") {
return false;
} else {
$string = preg_replace($regexTel, "", $valueTel);
}
return empty($string) ? true : false;
}*/
if(!$tel)
{
$error .= "Пожалуйста введите телефон<br />";
}
/*if($tel && !ValidateTel($tel))
{
$error .= "Введите корректный телефон.<br />";
}*/
if(!$error)
{
$subject ="Интересуются некондицией на сайте FONARIK-MARKET.RU";
$message ="Телефон клиента для обратной связи: +7 ".$tel."\n\n";
$mail = mail("info@fonarik.com", $subject, $message,

"From: "."< ".$email." ".$rand." >");
if($mail)
{
echo 'OK';
}
}
else
{
echo '<div class="notification_error">'.$error.'</div>';
}
}
?>