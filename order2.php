<!DOCTYPE html>
<?php
require("requisites.php");
$count_text = 42;
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


	<title>Расчет стоимости</title>

	<meta name="description" content="Расчет стоимости">
	<meta name="keywords" content="Расчет стоимости">

	<?php
	require("head_1.php");
	?>
<body>
<?php
require("header.php");
?>

<!-- section of script -->


<div style="background: url(/img/leather1.jpg) repeat-x left top; padding-top: 40px;">
	<section class="main">
		<?php
		require("calc2.php");
		?>
		<div>

<?php
		//Если форма отправлена
if(isset($_POST['submit'])) {


	//Проверка суммы
	if(trim($_POST['count_1']) != $_POST['count_2']) {
		$hasError = true;
	}
	//Проверка тип работы
	if(trim($_POST['work_kind']) == '') {
		$hasError = true;
	} else {
		$work_kind = trim($_POST['work_kind']);
	}
	//Проверка поля email
	if(trim($_POST['email_stud']) == '') {
		$hasError = true;
	} else {
		$email_stud= $_POST['email_stud'];
	}
	if(trim($_POST['name']) == '') {
		$hasError = true;
	} else {
		$name= $_POST['name'];
	}
	if(trim($_POST['tema']) == '') {
		$hasError = true;
	} else {
		$tema= $_POST['tema'];
	}
	if(trim($_POST['predmet']) == '') {
		$predmet= "пусто";
	} else {
		$predmet= $_POST['predmet'];
	}
	if(trim($_POST['university']) == '') {
		$university= "пусто";
	} else {
		$university= $_POST['university'];
	}
	if(trim($_POST['add_info']) == '') {
		$add_info= "пусто";
	} else {
		$add_info= $_POST['add_info'];
	}


	//Если ошибок нет, отправить email
	if (!isset($hasError)) {
		$body = "
		name: $name \n\n
		email_stud: $email_stud \n\n
		work_kind: $work_kind \n\n
		tema: $tema \n\n
		predmet : $predmet \n\n
		university: $university \n\n
		add_info: $add_info \n\n
		";

		$headers = 'From site: '.$site_name . "\r\n" . 'Reply-To: ' . $email_stud;

		mail($email2, $subject, $body, $headers);
		$emailSent = true;

	}
	include("win.php");
}

?>
		</div>
	</section>
</div>
			<section class="offers"><div><a href="aktcii_i_skidki.php"><img src="./index_files/offer1.gif" width="805" height="189" alt=""></a></div></section>
			<?php
			require("responses.php");
			require("payment.php");
			require("footer.php");
			?>
</body>
</html>
