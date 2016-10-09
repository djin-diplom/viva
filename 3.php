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
		<div class="left"><img src="./3_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Мари</b> <i>6 декабря 2015 г.</i></div>
				<div class="text">Было время, когда я не могла успеть все сделать, и работа, и учеба...Конечно я всегда все привыкла делать сама, так удобно и нет ни к кому претензий. Но так как была ситуация в которой мне необходима была помощь я обратилась к ребятам. К моему удивлению все сделали качественно, конечно препод поправил в некоторых местах, но без этого никуда. А так я не пожалела.</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./3_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Мария</b> <i>3 декабря 2015 г.</i></div>
				<div class="text">Родив ребенка, захотела получить второе высшее. Отходила 4 года на заочное отделение, но когда дошло до диплома, поняла что времени на его написание совсем нет. У кого есть дети, меня поймут. Никогда раньше не обращалась за подобными услугами, но решила рискнуть. По рекомендации знакомых выбрала эту компанию. Выполнили работу в срок, качественно. Я конечно волновалась сначала перед проверкой (прошла успешно), потом перед защитой, но все прошло гладко. Никто ничего не заподозрил, даже одногруппники думают что сама писала. Спасибо большое!</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./3_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Евгений</b> <i>2 декабря 2015 г.</i></div>
				<div class="text">Настоятельно рекомендую обращаться по вопросу написания работ. Я работаю в организации, занимаемся продажами, руководство одобрило повышение, но у меня не было высшего образования, как понимаете, учиться и одновременно работать сложно, учитывая, что не каждый работодатель одобряет систематическое посещение сессий, крутился как мог, эти ребята помогли с дипломной, в итоге сдал на отлично!!! УРА!!! Огромное спасибо Вам за помощь.</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./3_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Виктор</b> <i>29 ноября 2015 г.</i></div>
				<div class="text">Учить не люблю, а сам за все время ни одной работы курсовой самостоятельно не писал, а делали знакомые. Но с дипломом не получилось, лавочка закрылась, а непонятным людям доверять такое дело не хотелось. Услышав про <?php echo $site_name; ?> заинтересовался, поузнавал у ребят, сказали сайт может мне помочь решить проблему. В итоге работу мне выполнили именно там. Защитил, все нормально, теперь вот устроился на работу хорошую, заслуга этого сайт тоже в этом есть.</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./3_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Римма</b> <i>20 ноября 2015 г.</i></div>
				<div class="text">Заказывала здесь дипломную работу и очень довольна! Обратилась в эту компанию на основании хороших отзывов знакомых. Работу сделали быстро, хорошо раскрыли достаточно сложную тему диплома, правильно выполнили все нужные расчеты. В итоге на защите я получила "отлично".  Я рада, что сэкономила время, нервы и деньги, буду советовать <?php echo $site_name; ?> знакомым.</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./3_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>marinka_91</b> <i>11 ноября 2015 г.</i></div>
				<div class="text">Я часто сталкивалась со словами - все в жизни бывает. Вот и у меня случилась маленькая проблемка с написанием диплома, так как на руках была маленькая дочурка. Пыталась долгое время написать, но все никак...Решилась заказать и работой осталась вполне довольна, только немножко переделала на свой лад. Преподаватели оценили на отлично! Очень благодарна, всем советую!!!</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./3_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Екатерина</b> <i>1 ноября 2015 г.</i></div>
				<div class="text"> Я учусь и работаю, за учёбу плачу сама, так уж сложилось. Учусь хорошо, но времени на учебу не всегда хватает. По совету знакомой с её успешной защитой, обратилась в данную компанию. Все сделали чётко, вовремя, без ошибок и исправлений. Моя задача была только найти время на подготовку. Защита прошла хорошо, я довольна. Тем более осталась ещё и в плюсе, с хорошей зарплатой.</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./3_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Анютка Б.</b> <i>30 октября 2015 г.</i></div>
				<div class="text">Очень долго искала по просторам интернета кто бы помог мне сделать дипломную работу на выгодных условиях. И вот чисто случайно попала на этот сайт, где компания ''<?php echo $site_name; ?>'' в максимально короткие сроки помогла справиться мне с этой проблемой. Я получила качественно выполненную дипломную работу, благодаря которой я закончила учёбу на отлично.</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./3_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Светлана</b> <i>14 октября 2015 г.</i></div>
				<div class="text">Училась и работала одновременно. Еще и дочку родила и времени на дипломную работу совершенно не хватало. Пришлось обратиться в данную компанию за написанием дипломной работы. Очень понравилось то, насколько ответственно отнеслись ко всем требованиям к моей работе. Сделали на "отлично", а я внимательно подготовилась и защитилась тоже на "отлично". Рекомендую.</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./3_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Саша (юракадемия)</b> <i>15 сентября 2015 г.</i></div>
				<div class="text">На носу была сдача магистерской по юриспруденции. У меня оставалось 3 недели чтобы ее сдать. Но чтобы ее написать у меня бы ушло куча времени, нужно было искать оптимальный вариант. Друг посоветовал мне компанию ''<?php echo $site_name; ?>'', говорит, что там делают нормальные работы. Я сразу же обратился туда. Сказали, что успеют сделать за 2 недели. В итоге, благодаря ''<?php echo $site_name; ?>'', я сдал работу на 5! Очень доволен. Буду советовать вас знакомым.</div>
			</div>
		</div>
	</div>
</div><div class="pagination">Страница: <a href="2.php">«</a> <a href="1.php">1</a> <a href="2.php">2</a> <b>3</b> <a href="4.php">4</a> <a href="5.php">5</a> <a href="6.php">6</a> <a href="4.php">»</a> <a href="all.php">все</a> </div>		</div>
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