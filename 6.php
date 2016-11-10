<!DOCTYPE html>
<?php
require("requisites.php");
$count_text = 6;
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>Отзывы</title>

	<meta name="description" content="Отзывы">
	<meta name="keywords" content="Отзывы">

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

<h1>Отзывы</h1><style>

	/*
	div.responses div.one { padding: 20px 0; border-bottom: 1px solid #ddd; }
	div.responses div.one > img { float: left; }
	div.responses div.one:first-of-type { padding: 30px 0 20px; }
	div.responses div.one:last-of-type { padding: 20px 0; border-bottom: none; }
	div.responses div.one div.caption { text-transform: uppercase; margin-bottom: 10px; }
	div.responses div.one div.caption i { text-transform: none; color: #666; padding-left: 10px; }
	*/
	
	
	div.responses div.one { display: table; margin-top: 30px; }
	div.responses div.one > div { display: table-cell; vertical-align: top; }
	div.responses div.one > div.left { width: 45px; }
	div.responses div.one > div.rite > div { background: rgba(196,85,39,0.1); box-shadow: 0 1px 0 rgba(196,85,39,0.25); border-radius: 5px; padding: 5px 10px; }
	div.responses div.one > div.rite > span { position: absolute; margin: 10px 0 0 -16px; border-color: transparent rgba(196,85,39,0.1) transparent transparent; border-style: solid; border-width: 8px; width: 0; height: 0; }
	div.responses div.one > div.rite > div > div.caption { text-shadow: 0 1px 0 white; margin-bottom: 5px; padding-bottom: 5px; border-bottom: 1px dotted rgba(196,85,39,0.5);; }
	div.responses div.one > div.rite > div > div.caption i { font-size: 14px; color: #666; padding-left: 5px; }
	div.responses div.one > div.rite > div > div.text { font-size: 14px; }
	
	
</style>
<button onclick="self.location=&#39;?add&#39;;" style="font-size: 18px;">Оставить свой отзыв</button><div class="responses">	<div class="one">
		<div class="left"><img src="./6_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Дмитрий</b> <i>27 мая 2014 г.</i></div>
				<div class="text">диплом сдал на 5!</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./6_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>ЗАНОЗА</b> <i>4 апреля 2014 г.</i></div>
				<div class="text">долго общались!спасибо вам за ваше терпение. Диплом это досвидания просто!!!!я так и не поняла ничего!хоть автор и старалась до меня донести смысл.главное что преподавательница не особо придиралась и вот она 5!!!как это вышло и не поняла до конца.спасибо!правда мистика!</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./6_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Виталик</b> <i>12 февраля 2014 г.</i></div>
				<div class="text">у меня отчёт по практике быстро приняли.салют в сторону менеджера Лидии!все четко и ясно спросила,рассказала.милая девушка.позвонили как все выполнили.</div>
			</div>
		</div>
	</div>
</div><div class="pagination">Страница: <a href="5.php">«</a> <a href="1.php">1</a> … <a href="4.php">4</a> <a href="5.php">5</a> <b>6</b> <a href="all.php">все</a> </div>		</div>
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