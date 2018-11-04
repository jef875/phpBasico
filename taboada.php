<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php  
$num = $_POST['num'];
$cont = $_POST['cont'];
if(isset($num)&& isset($cont)){

	//for($cont=1; $cont<=9; $cont++){
		$res = $num * $cont;
		echo $num."X".$cont."=".$res."<br>";
	//}
}else{
	$num = 1;
	$cont = 1;
	$res = $num * $cont;
	echo $num."X".$cont."=".$res."<br>";
}
?>
<a href="for.php"></a>
<div class="alert alert-success" role="alert">
 	Sucesso! 
</div>
</body>
</html>