<!DOCTYPE html>
<?php
require("requisites.php");
$count_text = 1;
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>Смотреть пример работы <?php echo $count_text; ?></title>

	<meta name="description" content="Смотреть пример работы <?php echo $count_text; ?>">
	<meta name="keywords" content="Смотреть пример работы <?php echo $count_text; ?>">

	<?php
	require("head_1.php");
	?>
<body>
<?php
require("header.php");
?>
<div style="background: url(/img/leather1.jpg) repeat-x left top; padding-top: 40px;">
	<section class="main">
		<?php
		require("calc2.php");
		?>
		<div>
<!-- section of script -->
			<h1>Смотреть пример работы <?php echo $count_text; ?></h1>
			<?php
			$count = $count_text;
			$f = fopen("texts/new_".$count, "r");
			$col_simv = 0;
			while(!feof($f)) {
				$fgets = fgets($f);
				$col = iconv_strlen($fgets);
				$col_simv = $col_simv + $col;
				if ( $col > 2 ) {
					echo $fgets . "<br />";
					if (preg_match('/\n/', $fgets)) {
						echo "Пример диплома, курсовой, магистерской. ";
					}
				}
				if ($col_simv >2000) break;
			}
			fclose($f);
			?>
			<br><a href="new_<?php echo $count; ?>.php">Смотреть пример работы <?php echo $count_text; ?> далее</a>
		</div>


</section>
</div>

<!-- end of script -->

<section class="offers"><div><a href="aktcii_i_skidki.php"><img src="./index_files/offer1.gif" width="805" height="189" alt=""></a></div></section>
<?php
require("responses.php");
require("payment.php");
require("footer.php");
?>
</body>
</html>