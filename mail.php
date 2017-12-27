<?php
header("Content-Type: text/html; charset=utf-8;");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'])) {$name = trim($_POST['name']);}
    if (isset($_POST['phone'])) {$phone = trim($_POST['phone']);}
    if (isset($_POST['email'])) {$mail = trim($_POST['email']);}
	if (isset($_POST['date_before'])) {$date_before = trim($_POST['date_before']);}
	if (isset($_POST['date_after'])) {$date_after = trim($_POST['date_after']);}
	if (isset($_POST['people'])) {$people = trim($_POST['people']);}
	if (isset($_POST['type'])) {$type = trim($_POST['type']);}
	if (isset($_POST['location'])) {$loc = trim($_POST['location']);}
    if (isset($_POST['message'])) {$message2 = trim($_POST['message']);}
    if (isset($_POST['fromSite'])) {$fromSite = trim($_POST['fromSite']);}

    $to = "konakova@fresco.bz, hasanov153@gmail.com, info@1apart.ru"; /*Укажите адрес, на который должно приходить письмо*/
    $sendfrom = 'info@1apart.ru'; /*Укажите адрес, с которого будет приходить письмо, можно не настоящий, нужно для формирования заголовка письма*/
	$headers .= "From: ПЕРВЫЙ АПАРТ ОТЕЛЬ <" . strip_tags($sendfrom) .">\r\n"; //Наименование и почта отправителя
    //$headers = "From: АПАРТ ОТЕЛЬ <" . strip_tags($sendfrom) . ">\r\n";
    $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8 \r\n";
    $subject = "Заявка с сайта";
    
    $message = $fromSite . "<br />
    
    <b>Имя:</b>" . $name . "<br />
    <b>Телефон:</b>" . $phone . "<br />
    <b>E-mail:</b>" . $mail . "<br />
	<b>Город:</b>" . $loc . "<br />
	<b>Дата - от:</b>" . $date_before . "
	<b>Дата - до:</b>" . $date_after . "<br />
	<b>Кол-во людей:</b>" . $people . "<br />
	<b>Тип ванной:</b>" . $type . "<br />	
    <b>Комментарий к заявке:</b>" . $message2;
    
    mail ($to, $subject, $message, $headers);
    
} else {
    echo "Попробуйте еще раз";
}
?>