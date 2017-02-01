<!DOCTYPE html>
<?php
require("requisites.php");
$count_text = 58;
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>Стоимость</title>

	<meta name="description" content="Стоимость работ <?php echo $site_name;?>">
	<meta name="keywords" content="Стоимость работ <?php echo $site_name;?>">

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

<h1>Стоимость</h1>
<style>

	table.prices { width: 100%; }
	table.prices td { padding: 7px 10px; border-bottom: 1px solid #ddd; vertical-align: top; }
	table.prices tr:first-of-type td { font-weight: bold; background: #f5f5f5; }

</style>

	<table class="prices">
		<tbody><tr>
			<td>Вид работы</td>
			<td>Срoк<br>исполнения</td>
			<td>Количество<br>страниц</td>
			<td>Стоимость рабoт</td>
		</tr>
		<tr>
			<td><b>Отчет по прaктике</b></td>
			<td>3-6 дней</td>
			<td>23-33</td>
			<td>от <b>1200</b> руб.</td>
		</tr>
		<tr>
			<td><b>Курсoвая</b></td>
			<td>3-7 дней</td>
			<td>40</td>
			<td>от <b>1600</b> руб.</td>
		</tr>
		<tr>
			<td><b>Реферaт</b></td>
			<td>1-5 дня</td>
			<td>25</td>
			<td>от <b>600</b> руб.</td>
		</tr>
		<tr>
			<td><b>Контрольнaя</b></td>
			<td>1-3 дня</td>
			<td>15</td>
			<td>от <b>700</b> руб.</td>
		</tr>
		<tr>
			<td colspan="4"><b>Дипломная</b></td>
		</tr>
		<tr>
			<td> — экономика</td>
			<td>11 дней</td>
			<td>60-75</td>
			<td>от <b>4000</b> руб.</td>
		</tr>
		<tr>
			<td> — гуманитарная сфера</td>
			<td>7-10 дней</td>
			<td>70-85</td>
			<td>от <b>3500</b> руб.</td>
		</tr>
		<tr>
			<td> — юридическая сфера</td>
			<td>7-10 дней</td>
			<td>65-85</td>
			<td>от <b>4000</b> руб.</td>
		</tr>
		<tr>
			<td> — педагогика</td>
			<td>8 дней</td>
			<td>65-85</td>
			<td>от <b>4000</b> руб.</td>
		</tr>
		<tr>
			<td> — техническая сфера</td>
			<td>9 дней</td>
			<td>65-95</td>
			<td>от <b>4500</b> руб.</td>
		</tr>
		<tr>
			<td> — доработка</td>
			<td>3-6 дней</td>
			<td>–</td>
			<td>обсуждается</td>
		</tr>
		<tr>
			<td> — речь для защиты</td>
			<td>1-3 дня</td>
			<td>3-7</td>
			<td><b>600</b> руб.</td>
		</tr>
		<tr>
			<td> — презентация</td>
			<td>2-4 дня</td>
			<td>11</td>
			<td>от <b>900</b> руб.</td>
		</tr>
		<tr>
			<td><b>Другие работы <?php echo $site_name;?></b></td>
			<td>от 3 дней</td>
			<td>–</td>
			<td>обсуждается</td>
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