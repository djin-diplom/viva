<!DOCTYPE html>
<?php
require("requisites.php");
$count_text = 38;
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>О компании <?php echo $main_name; ?></title>

	<meta name="description" content="Наша компания <?php echo $site_name;?>">
	<meta name="keywords" content="Наша компания <?php echo $site_name;?>">

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

<h1>О компании <?php echo $main_name; ?></h1>
			Компания <?php echo $site_name; ?> с девизом «База Знаний» входит в группу компаний
			в сфере образования «База Знаний» и осуществляет написание студенческих работ на заказ для студентов различных
			ВУЗов в России, а также из других стран.<br><br>

			Лучше всего о нас скажут наши Заказчики:<br>

			<h4><a target="_blank" href="<?php echo $site_otzv_url_1; ?>/177-znaniumbaza_ru.html">Отзывы на портале
					<?php echo $site_otzv_name_1; ?></a></h4>
			<h4><a target="_blank" href="<?php echo $site_otzv_url_2; ?>/raiting/74/znaniumbaza/">Отзывы на сайте
					<?php echo $site_otzv_name_2; ?></a></h4>
			<br>
			Напоминаем:<br>
			Компания c 2013 года pаботает без телефонныx менеджеров.<br>
			<strong>Это cущеcтвенно cнижает cтоимоcть pабот.</strong><br>
			Используйте форму заказа на cайте, пишите на почту.<br><br>
			<strong>NEW! При полной предварительной оплате заказа скидка 20%!</strong><br><br>

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
			Неизменным остаётся только одно: как и многие годы назад, за качество работы и актуальность знаний мы отвечаем своей репутацией.
			За плечами команды «<?php echo $site_name; ?>» - тысячи сданных студенческих работ. Наша репутация – это наши деньги.
			И потому она остаётся безупречной.<br><br>

			Команда «<?php echo $site_name; ?>» - это ваш защитник в суровом мире образования. Обращайтесь, и мы поможем!<br><br>

Сотрудничествo с нашей oрганизацией для всех авторов являeтся основным источником дoхода, это не просто хoбби или увлeчение –
			они отдаются работе полностью; это позволяет нам держать высокий уровень качества выполняемых дипломных работ.<br><br>
	
<img src="./o_kompanii_files/3.jpg" width="700" height="227" alt="">

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