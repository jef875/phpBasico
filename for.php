<?php  
/*for($i = 2; $i < 10; $i++){
	echo "$i ";
}
echo "<br>";
for($i=10; $i>=1; $i--){
	echo "$i ";
}
echo"<br>";
for($i=0; $i<=100; $i+=5){
	echo "$i ";
}*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Taboada com for</title>
</head>
<body>
	<form method="post" action="taboada.php">
		<select name="num">
			<?php for($num = 1; $num <= 9; $num++){
			 echo "<option> $num </option>";}
			 ?>
		</select>
X
<select name="cont">
			<?php for($cont = 1; $cont <= 9; $cont++){
			 echo "<option> $cont </option>";}
			 ?>
		</select>
		<input type="submit" value="OK" name="">
	</form>
</body>
</html>