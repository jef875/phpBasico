<?php 
$year = ($_GET["ano"]);
$age = date("Y") - $year;
echo"Você tem ".$age." anos e nasceu em ".$year." !<br>";
if ($age >= 18) {
	echo "seu voto é obrigatório e pode dirigir";
}elseif ($age >= 16 or $age <= 17) {
	echo "seu voto é opcional mas não pode dirigir";
}else{
	echo "Não pode votar e nem dirigir";
}
?>