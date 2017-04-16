<!DOCTYPE html>
<?php
require("requisites.php");
$count_text = 38;
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>О компании</title>

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

			<h1>О компании</h1>Компания «<?php echo $site_name; ?>» входит в
			группу компаний в сфере образования «БАЗА ЗНАНИЙ» и осуществляет написание студенческих
			работ на заказ для студентов различных ВУЗов в России, а также из других стран.<br><br>

			Основное отличие компании «<?php echo $site_name; ?>» – это не продажа "листков с текстом", а осуществление
			комплексной поддержки студентов на протяжении всего процесса написании дипломной работы. Заказать диплом в
			компании «<?php echo $site_name; ?>» значит получить набор услуг, связанных со сбором материала для будущей
			дипломной работы, с его адаптацией, оформлением и, наконец, вынесением дипломной работы на защиту. Выполнение
			студенческих дипломных работ на заказ - наш профиль и наша специализация.<br><br>

			Наша цель – создать в России возможность для студентов получать помощь в написании дипломной работы любого профиля
			и сложности. Компания «<?php echo $site_name; ?>» имеет многолетний опыт выполнения дипломных работ на заказ.
			За время нашей работы накопилась обширная база готовых дипломных работ. Расширился штат авторов.
			Появились постоянные клиенты, ставшие впоследствии нашими партнерами.<br><br>

			Главным и неотъемлемым признаком нашей деятельности являются высокое качество выполняемых дипломных работ,
			внимательное отношение к клиентам и гарантии, которые Вы получаете, заказывая диплом у нас. Мы знаем, насколько
			это важно для клиента – быть уверенным в завтрашнем дне. Ведь дипломная работа – это завершающий этап всего обучения
			и от того, как написана работа зависит репутация будущего выпускника.<br><br>

			Штат наших сотрудников насчитывает более ста восьмидесяти человек. Все авторы, выполняющие дипломные работы имеют
			огромный опыт в написании подобных работ. Каждый из них настоящий профессионал в своей области.<br><br>

			Сотрудничество с нашей организацией для всех авторов является основным источником дохода, это не просто
			хобби или увлечение – они отдаются работе полностью; это позволяет нам держать высокий уровень качества выполняемых дипломных работ.<br><br>

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