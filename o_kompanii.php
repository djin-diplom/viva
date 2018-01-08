<!DOCTYPE html>
<?php
require("requisites.php");
$count_text = 38;
?>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>О компании <?php echo $site_name;?> - дипломная работа срочно<?php echo $main_name; ?></title>

	<meta name="description" content="Рассказ о компании <?php echo $site_name;?>. Если вам нужна дипломная работа срочно, сделайте
	заказ у нас.">
	<meta name="keywords" content="<?php echo $site_name;?>, дипломная работа срочно">

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

<h1>О компании <?php echo $site_name; ?>, или дипломная работа срочно</h1>
			<h4>Наша компания выполняет дипломные работы, в том числе срочно. Срочные дипломные работы выполняются
				в нашей компании опытными преподавателями российских унииверситетов с научными степенями. Двойная проверка качества.
				Дипломные работы срочно у нас имеют те же цены, что и работы со стандартными сроками.<br>
				Закажите дипломную работу без предоплат! Мы сделаем вашу работу - вы заплатите после написания.<br></h4>
			<strong>При полной предоплате работы скидка от 20%!</strong><br>
			Также в этом случае презентация в подарок всем новым клиентам.<br><br>

			Мы работаем без телефонных менеджеров, которые удваивают стоимость заказа.<br>
			Благодаря этому мы можем предложить нашим клиентам лучшие ценовые условия.<br>
			Все необходимые консультации можно получить по почте <?php echo $email2; ?><br><br>

			Работаем по индивидуальному договору возмездного оказания услуг или
			<a href='http://<?php echo $main_name; ?>/dogovor.php'>публичной оферте</a><br>

			Отзывы о нашей компании:<br>
			<a href='<?php echo $site_otzv_url_1 ; ?>'><?php echo $site_otzv_name_1;?></a><br>
			<a href='<?php echo $site_otzv_url_2; ?>'><?php echo $site_otzv_name_2;?></a><br>
			<a href='http://<?php echo $main_name; ?>/consult.php'>Отзывы на нашем сайте</a><br><br>

			<!--noindex-->
Основное отличие компании «<?php echo $site_name; ?>» – это не продажа "листков с текстом",
			а осуществление комплексной поддержки студентов на протяжении всего процесса написании дипломной работы.
			Сфера нашей работы - образовательный студенческий бизнес, и мы занимаемся им уже давно.
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
			<!--/noindex-->
			
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