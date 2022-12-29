<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pemrosesa File</title>
</head>
<body>
<h2> Penulisan Data</h2>
<?php
$file='D:\\Teks.txt';
$fo=fopen($file,'w');
$data='Tes fwrite OK in '.$file.' !';
fwrite($fo,$data);
fclose($fo);
echo("Cek isi file di <b> $file </b> !");
?>
</body>
</html>