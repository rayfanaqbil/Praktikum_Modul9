<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Penggunaan Modularisasi</title>
</head>
<body>
<h2>Penggunaan require_once</h2>
<?php
require_once("function.php");
echo("Luas segi empat dengan p = 2 dan 1 = 4 adalah".luas(2,4)."<br>");
require_once("function.php");
echo("Luas segi empat denga p = 5 dan 1 = 4 adalah ".luas(5,4));
?>
</body>
</html>