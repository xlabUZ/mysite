<?php

/* https://api.telegram.org/bot757445367:AAFSAGSP3Xezwp7d2vJqvao8_GC2uqxpclo/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$token = "757445367:AAFSAGSP3Xezwp7d2vJqvao8_GC2uqxpclo";
$chat_id = "-319324121";
$arr = array(
  'Имя пользователя: ' => $name,
  'Email:' => $email,
  'Телефон: ' => $phone,
  'Сообщения:' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
	/*
	if ($sendToTelegram) {
	  header('Location: thank-you.html');
	} else {
	  echo "Error";
	}
	*/
?>