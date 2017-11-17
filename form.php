<?php
if((isset($_POST['name'])&&$_POST['name']!="")){
  $to = 'cdistom25733@yandex.ru, cdistom@mail.ru, pboykov@fresco.bz , konakova@fresco.bz'; //Почта получателя, через запятую можно указать сколько угодно адресов
  $subject = 'Новая заявка с сайта'; //Загаловок сообщения
  $message = '
    <p>Имя: '.$_POST['name'].'</p>                     
    <p>Телефон: '.$_POST['phone'].'</p>                        
    <p>Текст: '.$_POST['text'].'</p> 
    <p>Время: '.$_POST['data'].'</p>                       
    '; //Текст нащего сообщения можно использовать HTML теги
  $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
  $headers .= "From: Центр дентальной имплантации <info@cdistom.ru>\r\n"; //Наименование и почта отправителя
  mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
  echo '1';
}else{
  echo '2';
}
?>