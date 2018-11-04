<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$valor = $_GET["valor"];
$raiz = sqrt($valor);

echo "A raiz quadrada de $valor é ".number_format($raiz, 2)."<br>";
?>
<a href="aula08form.php">Voltar</a>
</body>
</html>