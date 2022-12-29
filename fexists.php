<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pemrosesan file</title>
</head>
<body>
<h2>Pemeriksaan file</h2>
<?php
$file='C:\\Teks.txt';
if(file_exists($file))
{
	echo("File <b> $file </br> sudah ada !");
}else
{
	echo("File <b> $file </b> tidak ada !");
}
?>
</body>
</html>