<!DOCTYPE html>
<?php
require("requisites.php");
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


	//Проверка тип работы
	if(trim($_POST['work_kind']) == '') {
		$hasError = true;
	} else {
		$work_kind = trim($_POST['work_kind']);
	}
	//Проверка поля email
	if(trim($_POST['email']) == '') {
		$hasError = true;
	} else {
		$email_stud = trim($_POST['email']);
	}

	if(trim($_POST['name']) == '') {
		$hasError = true;
	} else {
		$name= $_POST['name'];
	}
	if(trim($_POST['email']) == '') {
		$hasError = true;
	} else {
		$name= $_POST['email'];
	}

	$subject = $_POST['subject'];
	$predmet = $_POST['predmet'];
	$university = $_POST['university'];
	$add_info = $_POST['add_info'];
	$phone = $_POST['phone'];
	$ordernum = $_POST['ordernum'];

	//Если ошибок нет, отправить email
	if (!isset($hasError)) {
		$body = "
		work_kind: $work_kind \n\n
		subject: $subject \n\n
		predmet : $predmet \n\n
		university: $university \n\n
		add_info: $add_info \n\n
		name: $name \n\n
		email_stud: $email_stud \n\n
		phone: $phone \n\n
		
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
