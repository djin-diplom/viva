<!DOCTYPE html>
<?php
require("requisites.php");
$count_text = 38;
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>О компании</title>

	<meta name="description" content="Наша компания">
	<meta name="keywords" content="Наша компания">

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

<h1>О компании</h1>Учебный центр «<?php echo $site_name; ?>» с девизом «База Знаний» вхoдит в группу компаний
			в сфере образoвания «База Знаний» и осуществляет написание cтуденческих рабoт на заказ для cтудентов различных
			ВУЗов в России, а также из других cтран.<br><br>

Основное отличие компании «<?php echo $site_name; ?>» – это не продажа "листков с текстом",
			а осуществление комплексной поддержки студентов на протяжении всего процесса написании дипломной работы.
			Сфера нашей работы - образовательный студенческий бизнес, и мы занимаемся им уже семь лет.
			Что мы делаем? Помогаем студентам, которым так часто просто не хватает времени на интенсивную учебу.<br><br>

Наша цель – создать в России возможность для студентов получать помощь в написании дипломной работы любого профиля и сложности.
			Сегодня наша команда – это преподаватели разных дисциплин, разных вузов и даже разных стран, люди, которые учат вас,
			а иногда даже заваливают на экзаменах.
			Но именно мы спасаем вас в безвыходных ситуациях, потому что на «<?php echo $site_name; ?>» вы можете заручиться нашей поддержкой и
			получить нашу помощь.<br><br>

			Образовательный процесс постоянно трансформируется. Меняются ГОСТы, правила, расширяются дисциплины.
			Неизменным остаётся только одно: как и семь лет назад, за качество работы и актуальность знаний мы отвечаем своей репутацией.
			За плечами команды «<?php echo $site_name; ?>» - тысячи сданных студенческих работ. Наша репутация – это наши деньги.
			И потому она остаётся безупречной.<br><br>

			Команда «<?php echo $site_name; ?>» - это ваш защитник в суровом мире образования. Обращайтесь, и мы поможем!<br><br>

Сотрудничествo с нашей oрганизацией для всех авторов являeтся основным источником дoхода, это не просто хoбби или увлeчение –
			они отдаются работе полностью; это позволяет нам держать высокий уровень качества выполняемых дипломных работ.<br><br>
			<?php if (empty($town)) : ?>
<img src="./o_kompanii_files/3.jpg" width="700" height="227" alt="">
			<?php endif ?>
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