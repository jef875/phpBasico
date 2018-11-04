<!DOCTYPE html>
<html>
<head>
	<title>Numero primo</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST">
		Numero primo:
		<input type="number" name="num">
		<input type="submit" value="Verificar" name="enviar">
	</form>
</body>
</html>

<?php  
$num = $_POST['num'];
$cont = 0;
	for ($x=1; $x <= $num; $x++) { 
	 	if ($num % $x ==0) {
	 		$cont++;
	 	}
	 } 
	 if ($cont == 2) {
	 	echo "$num é primo";
	 }else{
	 	echo "$num não é primo";
	 }
?>

