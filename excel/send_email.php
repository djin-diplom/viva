
<?php
require("../requisites.php");
set_time_limit(0);
ob_implicit_flush();
error_reporting(E_ALL);
require_once ("sender.php");
//$sender = new sender;

$filename = $_GET['filename'];
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
$i = (int)$_GET['nomer'];
print_r ($ar[0]);
print_r ($ar[2]);
print_r ($ar[6]);
print_r ($ar[7]);
//foreach($ar as $ar_colls) {
/*
if ($ar[$i] === Array()) header("Location: log.txt");
$ar_colls = $ar[$i];
    $j = $i % 5;
    switch ($j){
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
        $subject = "Здравствуйте, " . $name . "! " . $vid_rab . " за " . $pay . " от компании " . $site_name;

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
            echo "Отправка удалась!<br><br><br><br><br>";
        } else {
            echo "Ошибка при отправке :(";
        }


        // mail($email_client, $subject, $body, $headers);
        unset($sender);
        $i++;
        $f = fopen('log.txt', "w");
        fwrite($f, $i."\n");
        fclose($f);
        sleep(10);
        header("Location: send_email.php?nomer=".$i."&filename=".$filename);
    } else {
        $i++;
        $f = fopen('log.txt', "w");
        fwrite($f, $i."\n");
        fclose($f);
        header("Location: send_email.php?nomer=".$i."&filename=".$filename);
    }
//}
*/