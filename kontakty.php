<!DOCTYPE html>
<?php
require("requisites.php");
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	

	<title>Контакты</title>

	<meta name="description" content="Контакты">
	<meta name="keywords" content="Контакты">

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

<h1>Контакты</h1>

<h3><span style="color: maroon;">Электронная почта для партнеров</span></h3><p></p><p><u><span style="color: blue;"><?php echo $email; ?></span></u><br><br>
<h3><span style="color: maroon;">Электронная почта для заказов (присылайте тему, объем, предмет работы)</span></h3><span style="color: blue;"><?php echo $email2; ?></span><br><br>

</p><h3><span style="color: maroon;">Часы работы</span></h3><p>С <b>6:00 до 22:00</b>; &nbsp;<span style="color: maroon;"><b>без выходных.</b></span><br></p><br>

<h3><span style="color: maroon;">Расположение офиса</span></h3>Адрес - <?php echo $adres; ?><br>Мы находимся в самом центре Москвы - недалеко от метро Проспект Вернадского.<div>При себе необходимо иметь документ, в бизнес-центре действует пропускной режим.<br>
<br>
<img src="./index_files/mapdj.jpg" alt=""><br>
<div class="marked"><a href="http://www.moscowmap.ru/imap_moscow.shtml#lat=55.68809088681727&lng=37.53355085849762&zoom=17&dom=71090">Открыть интерактивную карту</a></div>
<div class="marked">Фотографии бизнес-центра и офиса</div>

<a href="index_files/2.jpg" onclick="return showImage(&#39;./index_files/2.jpg&#39;);"><dfn title="index_files/2.jpg"></dfn><img src="./index_files/2.jpg" width="140" height="140" alt=""></a>&nbsp;<a href="./index_files/3.jpg" onclick="return showImage(&#39;./index_files/3.jpg&#39;);"><dfn title="./index_files/3.jpg"></dfn><img src="./index_files/3.jpg" width="140" height="140" alt=""></a>&nbsp;<a href="./index_files/4.jpg" onclick="return showImage(&#39;./index_files/4.jpg&#39;);"><dfn title="./index_files/4.jpg"></dfn><img src="./index_files/4.jpg" width="140" height="140" alt=""></a></div>		</div>
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