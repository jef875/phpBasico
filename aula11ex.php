<!DOCTYPE html>
<html>
<head>
	<title>Exercício</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post">
		início: <input type="number" name="comeco">
		fim: <input type="number" name="final">
		<label for="intervalo">Intervalo</label>
		<select name="intervalo" id="inter">
			<option value="2">2</option>
			<option value="4" selected>4</option>
			<option value="6">6</option>
			<input type="submit" value="Enviar">
		</select>
	</form>
</body>
</html>
<?php 
$comeco = $_POST['comeco'];
$final = $_POST['final'];
$intervalo = $_POST['intervalo'];
while ($comeco <= $final) {
	if (isset($intervalo = 2)) {
		echo $comeco+=2;
		echo "<br>";
	}
	elseif (isset($intervalo = 4 )) {
		echo $comeco+=4;
		echo "<br>";
	}
	elseif (isset($intervalo = 6 )) {
		echo $comeco+=6;
		echo "<br>";
	}
	
}
?>