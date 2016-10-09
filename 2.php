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
		<div class="left"><img src="./2_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Юлия (бывший финэк)</b> <i>11 февраля</i></div>
				<div class="text">Получала второе высшее, специальность - Бухгалтерский учет, анализ и аудит. Так уж сложилось, что времени на написание диплома у меня не было, и после долгих поисков в интернете я решила обратиться в данную фирму. 
<br>В довольно сжатые сроки и за вполне адекватную плату я получила свою работу - подготовилась и сдала диплом без особого труда и потери времени. Спасибо ребятам за работу.</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./2_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Наталья Ивановна (СПбГЭУ)</b> <i>1 февраля</i></div>
				<div class="text">Муж и работает, и учится на заочном отделении. Дотянул до последнего, когда уже времени писать диплом самим писать не осталось - пришлось делать диплом на заказ. Знакомые подсказали этот сайт. Специалисты здесь очень грамотные, ответственные, все этапы работ делали срок в срок. Поочередно кидали главы диплома, чтобы можно было носить преподавателю на проверку и не вызывать лишних сомнений. Диплом получился очень грамотный, продуманный, толковый. Да и по деньгам все устроило - очень благодарны этому сайту за наше второе экономическое высшее образование!</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./2_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Алексей</b> <i>28 января</i></div>
				<div class="text">Нужен был диплом по технической теме - по автосервису. Одному с ней справиться достаточно сложно, решил заказать его в «<?php echo $site_name; ?>». После непродолжительных консультаций согласовал с менеджером порядок исполнения и конечную стоимость работы. А через 30 дней получил полностью готовую работу, чертежи и речь для защиты, в которые делать самостоятельные правки вообще не пришлось.</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./2_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>мария</b> <i>16 января</i></div>
				<div class="text">я редко обращаюсь в поиске таких услуг, но что поделаешь, время не всегда позволяет сделать работу самой, а ещё порой приходится доделывать, переделывать, да ещё и работа... Поэтому обращаюсь, когда уже совсем сроки поджимают, и некуда деваться. Сейчас обращаюсь только сюда, потому что здесь ни разу не подводили (всегда сдавала с первого раза на хорошо или отлично), и со сроками всегда укладываются</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./2_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Лена (Политех)</b> <i>13 января</i></div>
				<div class="text">Долго решалась, прежде чем вышла на изготовителя дипломов. В интернете хватает и положительных, и отрицательных отзывов. Люди впечатлительные могут, конечно, испугаться. Мое правило – проверять все самостоятельно. Я гуманитарий. Но по моей специальности работа есть только в школе. Посмотрим, как будет с новым дипломом. Корочку вчера забирала на почте. С оригиналом управились за неделю. Похвально.</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./2_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Марина - СПбГЭУ</b> <i>12 января</i></div>
				<div class="text">Не знала, где заказать дипломную работу по маркетингу, да и тема была довольно специфическая. С моей работой сложно выкроить достаточно времени для подготовки. По совету знакомой решила заказать на сайте. Немножко переживала, конечно, но результат меня очень обрадовал. За дипломную работу получила высокий бал, очень грамотно и профессионально получилось. Теперь и сама рекомендую!</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./2_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Антон Ельников</b> <i>28 декабря 2015 г.</i></div>
				<div class="text">Здравствуйте.
<br>В принципе учусь я конечно не плохо, но всё таки качественный диплом вряд ли бы смог написать... В общем диплом мне нужен был хороший, но я понимал, что вряд ли смогу такой сделать. Поспрашивал у друзей, порекомендовали "Дипломы по уму", сказали будет всё ок. Я, конечно, сначала скептически отнёсся, но всё же заказал диплом у них.
<br>Ребята сделали мне диплом просто на отлично! Такой диплом должен стоить гораздо дороже, чем та цена за которую я заплатил.
<br>
<br>Спасибо!</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./2_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Елена</b> <i>22 декабря 2015 г.</i></div>
				<div class="text">Эту фирму мне порекомендовала сестра, она уже обращалась сюда и осталась довольна. Так как у меня было мало времени на написание диплома ( работу ведь тоже никто не отменяет) - решила тоже его заказать. Удобно что офис находится в центре и по субботам работает. Ребята справились быстро и написали хорошо. Защитилась! Спасибо Вам за качественно выполненную работу. </div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./2_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Лёлька</b> <i>14 декабря 2015 г.</i></div>
				<div class="text">Спасибо вам, ребята, за то, что вы есть! Что так быстро и качественно сработали! Я на последнем курсе института. Недавно закончилась осенняя сессия, а моя дипломная работа уже готова и ждет своего выхода в "свет"! Я очень довольна вашей работой! Преподаватель, который меня курирует уже оценил и похвалил, во-первых, за скорость, а, во-вторых, за качество! Чтобы я делала, если бы не вы! Вы настоящие палочки-выручалочки особенно когда у людей учеба, работа и маленькие дети! Очень благодарна вам! Рекомендую всем!</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./2_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Юлия</b> <i>9 декабря 2015 г.</i></div>
				<div class="text">Хочу сказать ребятам огромное спасибо!!!))) С их помощью я защитила свой диплом на отлично!! Тема у меня была про позитивный имидж интернет-магазина, в процессе написания были консультации с моим научным руководителем, который постоянно все меняет, то так ему надо, то так...мы всей группой наплакались, всех замучил! Но ребята относились с пониманием и каждый раз все подправляли)) 
<br>В общем на защите мой диплом признали одним из лучших на потоке!!)))</div>
			</div>
		</div>
	</div>
</div><div class="pagination">Страница: <a href="1.php">«</a> <a href="1.php">1</a> <b>2</b> <a href="3.php">3</a> … <a href="6.php">6</a> <a href="3.php">»</a> <a href="all.php">все</a> </div>		</div>
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