<!DOCTYPE html>
<?php
//новый текст 05012018
// Ядро: Дипломная работа без предоплат
//
require("requisites.php");
$count_text = 31;
?>
<html lang="ru"> <!-- 01 Добавить для всех страниц!!!-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Заказ выпускной работы</title>
<meta name="description" content="Компания <?php echo $site_name; ?> может предложить каждому студенту курсовые, дипломные и
магистерские без авансов в короткие сроки. Наши менеджеры ждут вашу заявку на дипломную работу.">
<meta name="keywords" content="заказ дипломной работы">


	<?php
	require("head_1.php");
	?>
<body>
	<?php
	require("header.php");
	?>

	<!-- section of script -->

	<section class="leather" style="background-image: url(/img/leather1.jpg);">

		<div class="big"><label onclick="document.getElementById(&#39;shorttext&#39;).className=document.getElementById(&#39;shorttext&#39;).className==&#39;hidden&#39;?&#39;showed&#39;:&#39;hidden&#39;; document.getElementById(&#39;arr1&#39;).src=document.getElementById(&#39;arr1&#39;).getAttribute(&#39;src&#39;)==&#39;index_files/arr1.png&#39;?&#39;index_files/arr2.png&#39;:&#39;index_files/arr1.png&#39;;">
				Заказ выпускной работы</label><br><img id="arr1" class="desaturated" src="./index_files/arr1.png" width="64" height="9" alt="" onclick="document.getElementById(&#39;shorttext&#39;).className=document.getElementById(&#39;shorttext&#39;).className==&#39;hidden&#39;?&#39;showed&#39;:&#39;hidden&#39;; this.src=this.getAttribute(&#39;src&#39;)==&#39;index_files/arr1.png&#39;?&#39;index_files/arr2.png&#39;:&#39;index_files/arr1.png&#39;;"></div>
		<div id="shorttext" class="hidden"><h1>Сделаем выпускную работу со скидкой от 20%, не потребуем деньги вперед!</h1>
<div class="dashedborder">Наша компания <?php echo $site_name; ?> гарантирует, что сроки будут строго соблюдены.</div>
<div class="dashedborder">Сначала специалисты составят план вашей выпускной работы.
	За это мы даже не возьмем предоплату. Но выгоднее всего внести полную предоплату, чтобы снизить стоимость на 20%!
	Текст выпускной будет оформлен по ГОСТ и вашей методичке.</div>
			<div class="dashedborder">У нас в компании работы выполняют не менее 56 кандидатов и 25 докторов.</div>
			<div class="dashedborder">При полной предоплате работы мы дарим презентацию.</div>
			<div class="dashedborder">Список предметов, по которым наши авторы пишут выпускные работы,
				велик. Это и технические, и гуманитарные дисцилины.<br>
				Сделаем выпускную работу по вашей организации или компании.</div>
			<div class="dashedborder">Наша компания <?php echo $site_name; ?> уже долгое время выполняет
				выпускные работы, поэтому мы на 99,5% гарантируем успех защиты. Все остальное зависит уже от вас самих.<br>
				Мы выполним отличную выпускную работу. Ждем вас в наших офисах с 9 до 19 часов. Используйте форму заказа на сайте в любое время.</div></div>

		<menu class="advantages">
			<span class="except"><b>Наши преимущества:</b></span>


			<span class=""><label onclick="changeSliderFrame(&#39;slider1&#39;,1);">Антиплагиат</label></span>
			<span class=""><label onclick="changeSliderFrame(&#39;slider1&#39;,2);">Качество</label></span>
			<span class="active"><label onclick="changeSliderFrame(&#39;slider1&#39;,3);">Оперативность</label></span><wbr>
			<span class=""><label onclick="changeSliderFrame(&#39;slider1&#39;,4);">Готовые кейсы</label></span>
			<span class=""><label onclick="changeSliderFrame(&#39;slider1&#39;,5);">Гарантия</label></span>
			<span class=""><label onclick="changeSliderFrame(&#39;slider1&#39;,6);">Договор</label></span>

		</menu>
		<section class="slider" id="slider1" data-frames="#slider1 &gt; div &gt; div" data-delay="10000">
			<span class="prev arrow"><img class="desaturated" src="./index_files/arr3.png" width="8" height="23" alt="" onclick="prevSliderFrame(&#39;slider1&#39;);"></span>
			<div>

				<div style="opacity: 0; z-index: 0; background: url(index_files/slider1.jpg) left center no-repeat;">
					<div style="width: 480px;"></div>
					<div><br><h3>Вашу работу выполняют лучшие профессионалы</h3><h3>В работах нет плагиата из Интернета</h3></div>
				</div>
				<div style="background: url(index_files/slider2.jpg) right top no-repeat; z-index: 1; opacity: 0;">
					<div><br><h3>Выполнение всех требований и инструкций</h3><h3>Большинство сдаёт на «отлично»</h3></div>
				</div><div style="background: url(index_files/slider3.jpg) left top no-repeat; z-index: 2; opacity: 1;">
					<div style="width: 329px;"></div>
					<div><br><h3>Все работы — точно в срок</h3></div>
				</div><div style="background: url(index_files/slider4.jpg) right top no-repeat; z-index: 0;">
					<div><br><h3><a href="gotovie_keisy.php">Индивидуальный подход к каждому клиенту</a></h3></div>
					<div style="width: 433px;"></div>
				</div><div style="background: url(index_files/slider5.jpg) left top no-repeat; z-index: 0;">
					<div style="width: 329px;"></div>
					<div><br><h3>Бесплатные доработки</h3><h3>Конфиденциальность гарантирована</h3></div>
				</div><div style="background: url(index_files/slider6.jpg) right top no-repeat; z-index: 0;">
					<div><br><h3>При оформлении заказа составляется договор и бланк заказа</h3><h3>Мы являемся официально зарегистрированной организацией</h3></div>
					<div style="width: 354px;"></div>
				</div>
			</div>
			<span class="next arrow"><img class="desaturated" src="./index_files/arr4.png" width="8" height="23" alt="" onclick="nextSliderFrame(&#39;slider1&#39;);"></span>
		</section>
		<script>fsChange('slider1');</script>
		<div class="shade"></div>
	</section>

	<!-- end section of script -->

	<?php
	require("welcome.php");
	?>
	<!--noindex-->
		<section class="blocks1">
			<span></span>
	<?php
	require("blocks.php");
	?>
			<span></span>
		</section>
	<!--/noindex-->

	<section class="offers"><div><a href="aktcii_i_skidki.php"><img src="./index_files/offer1.gif" width="805" height="189" alt=""></a></div></section>
	
	<?php
	require("responses.php");
	require("payment.php");
	require("footer.php");
	?>
</body>
</html>