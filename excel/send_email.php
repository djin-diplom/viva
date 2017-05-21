<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<?php
require("../requisites.php");
set_time_limit(0);
ob_implicit_flush();
error_reporting(E_ALL);
require_once ("sender.php");

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

$count = count($ar);


if ( (int)$i >= (int)$count) {
    header("Location: log.txt");
} else {
    $ar_colls = $ar[$i];
    $j = $i % 12;
    switch ($j) {
        case 0:
            $email = $email_1;
            break;
        case 1:
            $email = $email_2;
            break;
        case 2:
            $email = $email_3;
            break;
        case 3:
            $email = $email_4;
            break;
        case 4:
            $email = $email_5;
            break;
        case 5:
            $email = $email_6;
            break;
        case 6:
            $email = $email_7;
            break;
        case 7:
            $email = $email_8;
            break;
        case 8:
            $email = $email_9;
            break;
        case 9:
            $email = $email_10;
            break;
        case 10:
            $email = $email_11;
            break;
        case 10:
            $email = $email_12;
            break;
    }
    $email_client = $ar_colls[0];
    if (strlen($email_client) > 5) {
        $name = $ar_colls[1];
        //$vid_rab = $ar_colls[2];
        //$pay = $ar_colls[3];
        echo "Посылаем " . $email_client . "<br>";

        $sub_vid_rab = rand(1,11);

        switch ($sub_vid_rab) {

            case 1:
                $vid_rab = ' Диплом ';
                break;
            case 2:
                $vid_rab = ' Курсовые-дипломные ';
                break;
            case 3:
                $vid_rab = ' Диплом-магистерская ';
                break;
            case 4:
                $vid_rab = ' Диссертации-Дипломы ';
                break;
            case 5:
                $vid_rab= ' Курсовой-дипломная ';
                break;
            case 6:
                $vid_rab = ' Курсовая, дипломная работа ';
                break;
            case 7:
                $vid_rab = ' Курсовой и ВКР ';
                break;
            case 8:
                $vid_rab = ' ВКР ';
                break;
            case 9:
                $vid_rab = ' Выпускная работа ';
                break;
            case 10:
                $vid_rab = ' Дипломная ';
                break;
            case 11:
                $vid_rab = ' Дипломная работа ';
                break;
        }

        $pay = (rand(20,50)*100).'-'.(rand(90,150)*100);


        require("../email/build_2.php");



        $body = $body_2;

        $sub_1 = rand(1,10);

    switch ($sub_1) {

        case 1:
            $sub_1_text = ' оплата ';
            break;
        case 2:
            $sub_1_text = ' за ';
            break;
        case 3:
            $sub_1_text = ' по ';
            break;
        case 4:
            $sub_1_text = ' от ';
            break;
        case 5:
            $sub_1_text = ' до ';
            break;
        case 6:
            $sub_1_text = ' цена ';
            break;
        case 7:
            $sub_1_text = ' по цене ';
            break;
        case 8:
            $sub_1_text = ' стоимость ';
            break;
        case 9:
            $sub_1_text = ' ценой ';
            break;
        case 10:
            $sub_1_text = ' стоимостью ';
            break;
    }

        $sub_2 = rand(1,10);

    switch ($sub_2) {
        case 1:
            $sub_2_text = ' бeз прeдоплаты от компании ';
            break;
        case 2:
            $sub_2_text = ' без предоплаты, образовательный центр ';
            break;
        case 3:
            $sub_2_text = ' 6ез предoплаты предлагает учебная студия ';
            break;
        case 4:
            $sub_2_text = ' без предоплaты от ';
            break;
        case 5:
            $sub_2_text = ' без пpедоплаты, компания ';
            break;
        case 6:
            $sub_2_text = ', бе3 предоплаты УЦ ';
            break;
        case 7:
            $sub_2_text = ', без предoплаты услуга сервиса ';
            break;
        case 8:
            $sub_2_text = ', нет предоплат на сайте ';
            break;
        case 9:
            $sub_2_text = ', никаких прeдоплат на студенческом портале ';
            break;
        case 10:
            $sub_2_text = ', не требуем предоплату, ООО ';
            break;
    }


        $subject =  $name . ". " . $vid_rab . $sub_1_text . $pay . $sub_2_text . $site_name;

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

        unset($sender);
        $i++;
        $f = fopen('log.txt', "w");
        fwrite($f, $i . "\n");
        fclose($f);
        //sleep(9);
        //header("Location: time.php?nomer=" . $i . "&filename=" . $filename);
        ?>
        <script type="text/javascript">
            function func() {
                return location.href = "time.php?nomer=" + <?php echo $i; ?> + "&filename=" + "<?php echo $filename; ?>";
            }
            setTimeout(func, 19000);
        </script>
        <?php
} else {
        $i++;
        $f = fopen('log.txt', "w");
        fwrite($f, $i . "\n");
        fclose($f);
        //header("Location: time.php?nomer=" . $i . "&filename=" . $filename);
        ?>
        <script type="text/javascript">
            function func() {
                return location.href = "time.php?nomer=" + <?php echo $i; ?> + "&filename=" + "<?php echo $filename; ?>";
            }
            setTimeout(func, 1000);
        </script>
        <?php
    }
}

?>
</body>
</html>
