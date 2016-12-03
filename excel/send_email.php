
<?php
require("../requisites.php");

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
foreach($ar as $ar_colls) {
    $email_client = $ar_colls[0];
    $name = $ar_colls[1];
    $vid_rab = $ar_colls[2];
    $pay = $ar_colls[3];
    //echo "$fio  $city  $year<br />";


//Если форма отправлена
    if (isset($_POST['filename'])) {
        $body = "
		<html>
<head>
  <title>Привет, чувак!</title>
</head>
<body>
		Кра<br>
		Кра
</body>
</html>
		";


        //$headers = 'From site: '.$site_name . "\r\n" . 'Reply-To: ' . $email_stud;
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: ' . $email . "\r\n" . 'Reply-To: ' . $email;
        $subject = "Здравствуйте, ".$name."! ".$vid_rab." за ".$pay."БЕЗ ПРЕДОПЛАТЫ от компании".$site_name;

        mail($email_client, $subject, $body, $headers);
        $emailSent = true;
        if(isset($emailSent) && $emailSent == true) { //Если письмо отправленл ?>
            <p style="color: #e94500;font-size: 19px;"><strong>Email <?php echo $email_client; ?> успешно отправлен!</strong></p>
        <?php }
    }
}
