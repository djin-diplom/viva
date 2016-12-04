
<?php
require("../requisites.php");
set_time_limit(0);
ob_implicit_flush();
error_reporting(E_ALL);
require_once ("sender.php");
//$sender = new sender;

$filename = $_POST['filename'];
function readExelFile($filepath){
    require_once ("Classes/PHPExcel.php");
    $ar=array();
    $inputFileType = PHPExcel_IOFactory::identify($filepath);
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($filepath);
    $ar = $objPHPExcel->getActiveSheet()->toArray();
    return $ar;
}


$file_path_excel = "files/".$filename;

$ar=readExelFile($file_path_excel);
$i = (int)$_POST['nomer'] % 5;
foreach($ar as $ar_colls) {
    switch ($i){
        case 0: $email = $email;
            break;
        case 1: $email = $email_2;
            break;
        case 2: $email = $email_3;
            break;
        case 3: $email = $email_4;
            break;
        case 4: $email = $email_5;
            break;
    }
    $email_client = $ar_colls[0];
    if (strlen($email_client) > 5) {
        $name = $ar_colls[1];
        $vid_rab = $ar_colls[2];
        $pay = $ar_colls[3];
        echo "Посылаем " . $email_client . "<br>";
        require("../email/build_2.php");


        $body = $body_2;
        //$headers = 'From site: '.$site_name . "\r\n" . 'Reply-To: ' . $email_stud;
        //$headers = 'MIME-Version: 1.0' . "\r\n";
        //$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        //$headers .= 'From: ' . $email . "\r\n" . 'Reply-To: ' . $email . "\r\n";
        // $headers .= 'Return-Path:'. $email . "\r\n";
        $subject = "Здравствуйте, " . $name . "! " . $vid_rab . " за " . $pay . " БЕЗ ПРЕДОПЛАТЫ от компании " . $site_name;

        $sender = new sender($email, $site_name, $subject, '', $password);

        $message_text = $body;

        $message_data = array(
            'to' => $email_client,//Адрес студента
            'to_name' => $name,//Имя студента
            'title' => $sender->mail_content['title'],
            'text' => $message_text,
            'alt_text' => strip_tags($message_text)
        );

        $mailSend = $sender->sendMail($sender->smtp_data, $message_data);

        if ($mailSend == 0) {
            echo "Отправка удалась!";
        } else {
            echo "Ошибка при отправке :(";
        }


        // mail($email_client, $subject, $body, $headers);
        unset($sender);
        $i++;
        $i = $i % 5;
        //flush();
        sleep(10);
    }
}
