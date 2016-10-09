<!DOCTYPE html>
<?php
require("requisites.php");
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
		<div class="left"><img src="./1_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Елена (ИТМО)</b> <i>17 сентября</i></div>
				<div class="text">Заказывала свою дипломную работу у компании <?php echo $site_name; ?>, по совету моего однокурсника, так как времени в моем распоряжении очень мало в связи с рождением нового члена нашей семьи. Всё сделали очень грамотно, оформление, стиль и что не может не радовать адекватная цена и то что сделано всё в срок. Забыли только сделать речь для защиты, что была в подарок - пришлось напомнить.</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./1_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Вика (СПБГЭУ)</b> <i>2 сентября</i></div>
				<div class="text">Нужно было написать отчёт по производственной практике, которую нужно было проходить летом. В этой компании мне помогли, всё выполнили по требованиям, сделали отзыв и дневник также. Спасибо!</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./1_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Анастасия (университет Лесгафта)</b> <i>30 июня</i></div>
				<div class="text">Добрый день! Хочу сказать автору спасибо за хорошую работу)! Работа была защищена на "отлично"!</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./1_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Кирилл  (СПбГЭУ)</b> <i>24 июня</i></div>
				<div class="text">В этом году работы проверяли на антиплагиат вуз, кто учится у нас - знает, это непросто написать диплом по этой системе. В <?php echo $site_name; ?> честно делали все доработки, не бросили - довели до защиты. За это огромне спасибо! Рекомендую</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./1_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Катя (Колледж)</b> <i>7 июня</i></div>
				<div class="text">По совету подруги заказала в тут диплом, мы вместе заканчиваем юридический. И мне, и подруге всё сделали хорошо, только оформили немного не так, но потом нам дали в колледже методичку и нам всё исправили бесплатно. Спасибо большое всей команде <?php echo $site_name; ?> и особенно моему автору!</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./1_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Инна (Герцена)</b> <i>25 мая</i></div>
				<div class="text">Я тщательно подбирала сайт, для того чтобы заказать дипломную работу. мой сокурсник поррекомендовал этот сайт, как лучший в интернете по дипломным работам. и действительно дипломную работу сделали очень качественно. по цене я расчитывала, что будет стоить в два раза дороже моя работа. когда увидела цену, то приятно удивилась. Сама бы я потратила гораздо больше времени на написание моей дипломной работы. здесь сделали  качественно, быстро и достаточно дешево. Спасибо вам за качество работ и ответственный подход. </div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./1_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Игорь</b> <i>12 апреля</i></div>
				<div class="text">Тем, кто знает, что такое получение второго высшего, при этом работая и не просто работая, а зарабатывая, станет понятно почему я был вынужден прибегнуть к данным услугам. Больше всего меня удивило то, что мне смогли полностью раскрыть тему связанную с экономическим развитием Сахалина. Тема очень не простая. Написали очень грамотно и без ошибок. Уже защитился и ничуть не жалею о тех небольших деньгах, которые я на это потратил.</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./1_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Ангелина (СПбГАУ)</b> <i>18 марта</i></div>
				<div class="text">Заказывала на сайте диплом по предмету "Маркетинг". Удивлена скоростью выполненной работы. 
<br>Кроме того, сделано качественно и с умом. Видно, что работали профессионалы своего дела. Помогли и с речью, и с презентацией для защиты. Не пожалела, что обратилась, тем более не такие высокие цены, как на многих других сайтах.  Большое спасибо! Диплом на 5! Посоветую всем знакомым.</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./1_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Алексей</b> <i>9 марта</i></div>
				<div class="text">Работа занимает все время и все мысли, не оставляя даже секунды на личную жизнь, не говоря уже о дипломе. Поэтому решил заказать написание диплома у <?php echo $site_name; ?>. И не прогадал. Диплом был написан отлично, оформлен также в отличном стиле. Мне осталось только прочитать его и понять о чем он. С этим я успел справился. Защитился на пятерку! Благодарю вас за отличный диплом!</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./1_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Тарас (МБИ)</b> <i>27 февраля</i></div>
				<div class="text">В конце прошлого года я обращался в компанию <?php echo $site_name; ?> так как мне нужна была очень качественная работа. Мне посоветовал ее мой друг, который годом раньше уже заказывал у них работу.
<br>Так случилось, что у меня из-за работы совсем не было времени для "творчества".
<br>Я просто сообщил тему своей работы и спокойно стал ожидать ее написания. Когда возникали какие-то вопросы или мой руководитель вносил какие-то изменения я сообщал это автору и он все это учитывал.
<br>В результате у меня была просто отличная работа. Мне поставили за нее высший бал.
<br>Спасибо Вам ребята</div>
			</div>
		</div>
	</div>
</div><div class="pagination">Страница: <b>1</b> <a href="2.php">2</a> <a href="3.php">3</a> … <a href="6.php">6</a> <a href="2.php">»</a> <a href="all.php">все</a> </div>		</div>
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