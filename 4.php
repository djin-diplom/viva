<!DOCTYPE html>
<?php
require("requisites.php");
$count_text = 4;
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
		<div class="left"><img src="./4_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Дамир</b> <i>10 сентября 2015 г.</i></div>
				<div class="text">Сначала думал, заказывать тут или нет? Ведь в интернете много мнимых сайтов с подобными предложениями. Поспрашивал друзей, рассказали что проект довольно хороший, цена за проделанную работу не такая уж и большая, выполняют работу  превосходно, хоть немного и долговато. Мои сомнения пропали, и как и ожидалось, на руки я получил хорошо выполненную работу. </div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./4_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Татьяна</b> <i>2 сентября 2015 г.</i></div>
				<div class="text">Срочно нужно было сдавать отчёт по практике по макроэкономике, а так как я работаю и времени практически не остается, по совету друзей обратилась в эту компанию. Пообщалась с ними, сделала предоплату и уже через 3 дня мне перезвонили и сказали что все готово. Понравилось что все было сделано качественно с первого раза, защитила на отлично и очень довольна.</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./4_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Дима</b> <i>11 августа 2015 г.</i></div>
				<div class="text">Пришел по рекомендации и нисколько не пожалел. Такой сервис действительно можно рекомендовать друзьям. Выручили с отчетом по практике, помогли заполнить правильно все документы и написали. Спасибо менеджеру Нине за терпение ) Читал и удивлялся, как будто бы сам писал. Так очень просто было защититься! Спасибо!</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./4_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Роман (Политех)</b> <i>20 июля 2015 г.</i></div>
				<div class="text">Заказывал магистерскую диссертацию для Политеха по экономике. Работа была полностью практическая на примере конкретного предприятия, но проблема у меня была в том, что кроме названия и описания деятельности у меня ничего не было, а работу надо было строго писать по балансам за 3 года. В <?php echo $site_name; ?> мне помогли с материалом, составили нужные документы и все сделали как надо, было несколько рабочих замечаний, о все быстро поправляли. Еще замечу, что у нас в политехе особые требования к оформлению и методисты придираются очень строго, но как мне сказал менеджер оформление у них делает специальный человек, который все-все сделала как надо, все расстояния выверены, все приведено к формату A5. В общем я более чем доволен. Спасибо огромное. Мой номер если что 8174</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./4_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Студенты финэка</b> <i>7 июля 2015 г.</i></div>
				<div class="text">Пишу коллективный отзыв за всех нас. Заказывали с ребятами 3 диплома по экономике для финэка бывшего. Сделали все хорошо, даже очень хорошо. Только в антиплагиатом намучались сами и девчонок с офиса тоже замучали. В вузе толком не говорят что и как проверять, а требуют. В итоге все нормально прошло, все приняли и мы защитись все удачно. Спасибо! Ваши счастливые клиенты  7612, 7606, 7570</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./4_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Евгений </b> <i>4 июля 2015 г.</i></div>
				<div class="text">Заказчик Евгений, номер 8101. Ну вы меня наверное все помните!)  спасибо за работу, все защитил хорошо! Удачи Вам! И побольше хороших клиентов! С меня конфеты еще.</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./4_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Елена (СПбГУСЭ)</b> <i>24 июня 2015 г.</i></div>
				<div class="text">Забыла написать сразу отзыв :) Ура! Это победа! Долго мы мучались с дипломом из-за моей научницы, с которой изначально был у меня конфликт личный и все никак не хотела утверждать мой диплом, каждый раз давала какие-то новые задания, но автор очень терпеливая у меня попалась и все-все выполнила. Без поддержки менеджеров и автора я бы точно не справилась! защитила диплом на отлично, кстати ! :) С П А С И Б О!!!</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./4_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Яна</b> <i>17 мая 2015 г.</i></div>
				<div class="text">Заказывала 2 курсовые. Была приятно удивлена сервисом, все очень понравилось и общение менеджеров и сама работа. Все хорошо сделали, приняли без проблем! Приду еще обязательно, еще и скидку обещали )</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./4_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Андрей П.</b> <i>14 апреля 2015 г.</i></div>
				<div class="text">Я был в шоке, когда мне выдали задание на очередной курсовик. Но помогли именно в этой компании. Все прошло прекрасно, правда работа получилась на 48 страниц ) Спасибо большое! Буду обращаться еще. Рекомендую!</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./4_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Карина А.</b> <i>27 марта 2015 г.</i></div>
				<div class="text">Спасибо! Отчет по практике приняли, все удачно! Даже похвалили, что все строго по методичке сделано и очень аккуратно. Так что спасибо автору и вам за помощь! В следующий раз уже в декабре увидимся!!!! Карина А.</div>
			</div>
		</div>
	</div>
</div><div class="pagination">Страница: <a href="3.php">«</a> <a href="1.php">1</a> <a href="2.php">2</a> <a href="3.php">3</a> <b>4</b> <a href="4.php">5</a> <a href="6.php">6</a> <a href="5.php">»</a> <a href="all.php">все</a> </div>		</div>
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