<!DOCTYPE html>
<?php
require("requisites.php");
$count_text = 5;
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
		<div class="left"><img src="./5_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Виктор Сергеевич</b> <i>5 марта 2015 г.</i></div>
				<div class="text">Я занятой человек, много работаю, но в то же время надо заканчивать учебу. Естественно экзамены все сдаю сам, но вот на выполнение всяких контрольных совсем нет времени. И для решения этой проблемы нашел надежного помощника <?php echo $site_name; ?>. Поскольку раньше был уже негативный опыт  заказа работ у частника, то достаточно скептически отнесся к первым работам, все дотошно проверил сам, но даже и придраться не к чему. Теперь сотрудничаем уже второй год и заказываю у них 3-ю сессию подряд. Знайте, это так здорово, когда можно положиться на людей! ) Написание всяких студенческих работ – действительно их профессия! </div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./5_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Катя (НОИР)</b> <i>3 февраля 2015 г.</i></div>
				<div class="text">Уиииии!!! Вы умнички!!!! Божественно выполненная работа. Столько красивых графиков и таблиц получилось! Препод сказала обязательно делать из них презентацию на защиту, они очень классно отражают всю мою тему! Заказывала часть диплома по теме управление персоналом. Всем рекомендую! </div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./5_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Юляша К.</b> <i>13 ноября 2014 г.</i></div>
				<div class="text">Расскажу о своем опыте. Решила заказать курсовую по маркетингу, наткнулась совершенно случайно на этот сайт. За небольшие деньги получила качественную работу, сделанную в сроки. В итоге сдала на 5 ( Заказ №6654). Также, когда меня немного не устроил определенный абзац, мне согласились исправить его бесплатно. То есть Учебный центр всегда идет на уступки своим клиентам. </div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./5_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Катерина</b> <i>30 октября 2014 г.</i></div>
				<div class="text">Свобода!!!Переполняют эмоции радости!Хочу выразить благодарность <?php echo $site_name; ?>!!! Защитила диплом на 5!это просто предел моих мечтаний!Если честно то даже не ожидала!Спасибо вам и друзьям, которые посоветовали тут заказать!</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./5_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Юра</b> <i>17 сентября 2014 г.</i></div>
				<div class="text">заказывал курсовик.все сделали.преподаватель исчиркал...сделали доработку.преподаватель исчиркал.только третий вариант устроил.хочу сказать спасибо компании в который раз!если б делал сам и на 7 раз бы не сдал этому преподу.</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./5_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Андрей</b> <i>3 сентября 2014 г.</i></div>
				<div class="text">Я хотел выразить благодарность этому коллективу!Писал диплом сам изначально, понял что не справляюсь.Достаточно избирательно отношусь к выбору фирм которые предлагают свои услуги.Эта фирма меня не разочаровала в отношении к клиенту,цене на услуги,качестве выполненного диплома.Общался с автором,все пожелания и мои правки были не игнорированны.Успехов вам в вашем деле!</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./5_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Элина</b> <i>2 сентября 2014 г.</i></div>
				<div class="text">Обращались группой за ответами к госам! Спасибо за неожиданную скидку!Как просили (написать сжато,чтоб шпоры потом сделать)так и сделали. Очень ценю в людях оперативность и преданность работе.Решила оставить отзыв.Спасибо вам большое!</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./5_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Виталий</b> <i>1 сентября 2014 г.</i></div>
				<div class="text">у меня все работы контрольные быстро приняли.салют в сторону менеджера Лидии!все четко и ясно спросила,рассказала.милая девушка.позвонили как все выполнили.</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./5_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Максим</b> <i>16 июля 2014 г.</i></div>
				<div class="text">Хочу высказать свою благодарность компании за оперативно проделанную работу и адекватное исправление всех, даже самых мелких придирок руководителя к диплому. Заказывал первый раз и не ошибся в выборе. Сложно найти нормальную контору подобного рода с адекватными людьми. В качестве ложки дёгтя - немного страдает оперативность реагирования на заявки, но я так понимаю это только от загруженности, как следствие качественной работы. Спасибо.</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./5_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Алина</b> <i>9 июня 2014 г.</i></div>
				<div class="text">здравствуйте.я заказывала курсовую работу по двум дисциплинам.хотела отметить, то что разные преподователи по разному смотрят работу.с первой не возникло проблем, а вот со второй пришлось переделывать несколько раз.хорошо что доработки бесплатные.хочу сказать спасибо вам и посоветовать остальным вашим клиентам чтобы изначально все уточняли у преподавателя.преподаватели разные и можно сделать работу а он скажет что не так и на вопрос почему раньше не сказали что надо так :вы не спрашивали дорогие!</div>
			</div>
		</div>
	</div>
</div><div class="pagination">Страница: <a href="4.php">«</a> <a href="1.php">1</a> … <a href="4.php">4</a> <b>5</b> <a href="6.php">6</a> <a href="6.php">»</a> <a href="all.php">все</a> </div>		</div>
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