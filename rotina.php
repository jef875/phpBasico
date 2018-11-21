<!--<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Função</title>
</head>
<body>
	<form method="POST">
		<input type="number" name="a">
		<input type="number" name="b">
		<input type="submit" name="OK">
	</form>
</body>
</html>-->
<?php  
//$a = $_POST["a"];
//$b = $_POST["b"];
/*
function soma($a, $b){
	$soma = $a +$b;
	echo "$soma";
}
	soma($a, $b);
*/
/* //FUNÇÃO QUE RETORNA VALOR
	function soma($a, $b){
		$soma = $a + $b;
		return $soma;
	}
	$res = soma($a, $b);
	echo $res;
*/ // FUNÇÃO QUE RECEBE MULTIPLOS VALORES
 function soma(){
 	$p = func_get_args();
 	$t = func_num_args();
 	$s = 0;
 	for ($i=0; $i < $t; $i++) { 
 		$s += $p[$i];
 	}
 	return $s;
 }
 $r = soma(2,5,8, 2,3);
 echo "$r";
?>