<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Do while</title>
</head>
<body>
	<form method="POST">
		Início:
		<input type="number" name="init">
		Fim:
		<input type="number" name="fim">
		Auternancia:
		<input type="number" name="aut">
		<input type="submit" value="OK">
	</form>
</body>
</html>

<?php  
$init = $_POST['init'];
$fim = $_POST['fim'];
$aut = $_POST['aut'];

if ($aut == null) {
	$aut = 2;
}
if ($init == null) {
	$init = 0;
}
if ($fim == null) {
	$fim = 8;
}

do {
	echo $init+=$aut;
	echo "<br>";
} while ($init <= $fim);
if($init > $fim){
	do {
		echo $init-=$aut;
		echo "<br>";
	} while ($init >= $fim);
}
?>