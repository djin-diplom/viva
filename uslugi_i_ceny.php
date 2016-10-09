<!DOCTYPE html>
<?php
require("requisites.php");
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>Услуги и цены</title>

	<meta name="description" content="Услуги и цены">
	<meta name="keywords" content="Услуги и цены">

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

<h1>Услуги и цены</h1><!--<img src="/img/price.JPG" width=700 height=397 alt="">-->
<style>

	table.prices { width: 100%; }
	table.prices td { padding: 7px 10px; border-bottom: 1px solid #ddd; vertical-align: top; }
	table.prices tr:first-of-type td { font-weight: bold; background: #f5f5f5; }

</style>

	<table class="prices">
		<tbody><tr>
			<td>Вид работы</td>
			<td>Срок<br>исполнения</td>
			<td>Количество<br>страниц</td>
			<td>Стоимость работ</td>
		</tr>
		<tr>
			<td><b>Отчет по практике</b></td>
			<td>3-5 дней</td>
			<td>25-35</td>
			<td>от <b>1000</b> руб.</td>
		</tr>
		<tr>
			<td><b>Курсовая</b></td>
			<td>4-6 дней</td>
			<td>50</td>
			<td>от <b>1500</b> руб.</td>
		</tr>
		<tr>
			<td><b>Реферат</b></td>
			<td>2-4 дня</td>
			<td>20</td>
			<td>от <b>700</b> руб.</td>
		</tr>
		<tr>
			<td><b>Контрольная</b></td>
			<td>1-2 дня</td>
			<td>10</td>
			<td>от <b>600</b> руб.</td>
		</tr>
		<tr>
			<td colspan="4"><b>Диплом</b></td>
		</tr>
		<tr>
			<td> — по экономическим дисциплинам</td>
			<td>10 дней</td>
			<td>70-80</td>
			<td>от <b>4500</b> руб.</td>
		</tr>
		<tr>
			<td> — по гуманитарным дисциплинам</td>
			<td>7-10 дней</td>
			<td>70-80</td>
			<td>от <b>4000</b> руб.</td>
		</tr>
		<tr>
			<td> — по юридическим дисциплинам</td>
			<td>7-10 дней</td>
			<td>60-80</td>
			<td>от <b>4500</b> руб.</td>
		</tr>
		<tr>
			<td> — по педагогическим дисциплинам</td>
			<td>8 дней</td>
			<td>70-80</td>
			<td>от <b>4500</b> руб.</td>
		</tr>
		<tr>
			<td> — по техническим дисциплинам</td>
			<td>8 дней</td>
			<td>70-90</td>
			<td>от <b>5500</b> руб.</td>
		</tr>
		<tr>
			<td> — доработка Вашего диплома</td>
			<td>2-5 дней</td>
			<td>–</td>
			<td>по договоренности</td>
		</tr>
		<tr>
			<td> — речь для защиты</td>
			<td>1-3 дня</td>
			<td>3-7</td>
			<td><b>700</b> руб.</td>
		</tr>
		<tr>
			<td> — презентация для дипломной работы</td>
			<td>1-3 дней</td>
			<td>10</td>
			<td>от <b>700</b> руб.</td>
		</tr>
		<tr>
			<td><b>Иные работы</b></td>
			<td>от 1 дня</td>
			<td>–</td>
			<td>по договоренности</td>
		</tr>
	</tbody></table>		</div>
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