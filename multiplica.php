<!DOCTYPE html>
<html>
<head>
	<title>Taboada</title>
</head>
<body>
	<form method="POST">
		<select name="num">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
		</select>
		X
		<select name="mult">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
		</select>
		<input type="submit" value="=">
	</form>
</body>
</html>
<?php  
	$num = $_POST['num'];
	$mult = $_POST['mult'];
	$res = $num*$mult;
	if ($num == null) {
		$num = 1;
	}
	if ($mult == null) {
		$mult = 2;
	}
 	do {
		echo $num."X".$mult."=".$res;
	} while ($num <= 10);
?>