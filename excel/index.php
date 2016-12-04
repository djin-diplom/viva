<?php
/**
 * 
 * Author:          Fussraider
 * Site:            http://fussraider.ru
 * 
 * Description:     Пример использования скрипта, для отправки сообщения используя SMTP.
 * 
**/

error_reporting(E_ALL);
require("../requisites.php");
require_once ("sender.php");
$sender = new sender('zakaz@bazaznanij.xyz','Bazaznanij.xyz','Привет, Сережа!','Тело письма тут!');


	$message_text = 'Основной текст!';

	$message_data = array(
		'to'		=> 'bazaznanij.com@gmail.com',//Адрес студента
		'to_name' 	=> 'Вася',//Имя студента
		'title'		=> $sender->mail_content['title'],
		'text'		=> $message_text,
		'alt_text'	=> strip_tags($message_text)
	);

	$mailSend = $sender->sendMail($sender->smtp_data, $message_data);

	if($mailSend == 0)
	{
		echo "Отправка удалась!";
	}
	else
	{
		echo "Ошибка при отправке :(";
	}
