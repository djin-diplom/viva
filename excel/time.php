<html>
<head>
</head>
<body>
<?php
$filename = $_GET['filename'];
$i = $_GET['nomer'];
?>
<p>Отсчет времени до следующей отправки письма.</p>
<p>Ведется отправка <?php echo $i;?> письма.</p>
<script>
    function func() {
        alert( 'Привет' ); в
        return location.href = 'send_email.php?nomer=' + <?php echo $i; ?> + '&filename=' + <?php echo $filename; ?>;
    }
    setTimeout(func, 5000);
</script>

</body>
</html>