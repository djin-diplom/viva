<html>
<head>
</head>
<body>
<?php
$filename = $_GET['filename'];
$filename = $_GET['nomer'];
echo $filename."<br>";
echo $filename $i;
?>
<p>Отсчет времени до следующей отправки письма.</p>
<p>Ведется отправка <?php echo $i;?> письма.</p>
<script>
    function func() {
        alert( 'Привет' );
        return location.href = 'send_email.php?nomer=' + <?php echo $i; ?> + '&filename=' + <?php echo $filename; ?>;
    }
    setTimeout(func, 1000);
</script>

</body>
</html>