<!DOCTYPE html>
<?php
require("../requisites.php");
$count_text = 1;
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>Смотреть пример работы <?php echo $count_text; ?></title>

	<meta name="description" content="Смотреть пример работы <?php echo $count_text; ?>">
	<meta name="keywords" content="Смотреть пример работы <?php echo $count_text; ?>">

	<?php
	require("../head_1.php");
	?>
<body>
<?php
require("../header.php");
?>
<div style="background: url(/img/leather1.jpg) repeat-x left top; padding-top: 40px;">
	<section class="main">
		<?php
		require("../calc2.php");
		?>
		<div>
<!-- section of script -->
			<h1>Смотреть пример работы <?php echo $count_text; ?></h1>
			<?php
			$count = 1+3*($count_text - 1);
			$f = fopen("texts/new_".$count, "r");
			$col_simv = 0;
			while(!feof($f)) {
				$fgets = fgets($f);
				$col = iconv_strlen($fgets);
				$col_simv = $col_simv + $col;
				if ( $col > 2 ) {
					echo $fgets . "<br />";
					if (preg_match('/\n/', $fgets)) {
						echo "Купить. ";
					}
				}
				if ($col_simv >5000) break;
			}
			fclose($f);
			?>
			<br><a href="new_<?php echo $count; ?>.php">Читать магистерскую далее</a>
		</div>
		<div><div class="h2">Примеры магистерских, эссе</div><a href="../got_rab.php">Смотреть другие примеры</a><br>
			<?php
			$count++;
			$f = fopen("texts/new_".$count, "r");
			$col_simv = 0;
			while(!feof($f)) {
				$fgets = fgets($f);
				$col = iconv_strlen($fgets);
				$col_simv = $col_simv + $col;
				if ( $col > 2 ) {
					echo $fgets . "<br />";
					if (preg_match('/\n/', $fgets)) {
						echo "Купить. ";
					}
				}
				if ($col_simv >5000) break;
			}
			fclose($f);
			?>
			<br><a href="new_<?php echo $count; ?>.php">Читать курсовую далее</a>
		</div>
		<div><div class="h2">Примеры рефератов и статей</div><a href="../got_rab.php">Смотреть другие примеры</a><br>
			<?php
			$count++;
			$f = fopen("texts/new_".$count, "r");
			$col_simv = 0;
			while(!feof($f)) {
				$fgets = fgets($f);
				$col = iconv_strlen($fgets);
				$col_simv = $col_simv + $col;
				if ( $col > 2 ) {
					echo $fgets . "<br />";
					if (preg_match('/\n/', $fgets)) {
						echo "Купить. ";
					}
				}
				if ($col_simv >5000) break;
			}
			fclose($f);
			?>
			<br>




		</div>
</section>
</div>

<!-- end of script -->

<section class="offers"><div><a href="../aktcii_i_skidki.php"><img src="./index_files/offer1.gif" width="805" height="189" alt=""></a></div></section>
<?php
require("../responses.php");
require("../payment.php");
require("../footer.php");
?>
</body>
</html>