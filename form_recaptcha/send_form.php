<?php
include 'config_recaptcha.php';
include 'recaptcha.php';
$data = $_POST;
$data = json_decode($_POST['jsonData']);
$data = get_object_vars($data); // пеобразуем в массив
$input = get_object_vars($data['input']); // массив с переданными полями
print_r($data);

$send_form = array(); // все формы ссайта

// определяем стандартные параметры для формы (указываем id)
$send_form['form_test'] = [
'to' => 'fresco.konovalov@gmail.com', // получатель
'title' => 'Заявка с Фреско!', // аголовок
'headers' => 'cdi257033@yandex.ru' // отпровитель
];


$recaptcha = new ReCaptcha( $config_recaptcha['private_key'] );
$recaptchaResult = $recaptcha->verifyResponse($_SERVER['REMOTE_ADDR'] , $input['g-recaptcha-response'][0]);
if($recaptchaResult->success) {

	foreach ($input as $key=>$value) {
		if($key !== 'g-recaptcha-response') $response .= "<p>$value[1] : $value[0]</p> \n";
		}
		$form = $send_form[$data['id']];
		if($form) {
			$message = "
			<html>
			<head>
			<title>$subject</title>
			</head>
			<body>
			$response                      
			</body>
        	</html>"; //Текст нащего сообщения можно использовать HTML теги
      $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
      $headers .= "From: Отправитель<" . $form['headers'] . ">\r\n"; //Наименование и почта отправителя
      mail($form['to'], $form['title'], $message, $headers); //Отправка письма с помощью функции mail
   }
   exit('вы человек');


} else {
	exit('вы бот');
}
?>