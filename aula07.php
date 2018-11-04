<!--<?php 
$a= $_GET["a"];
$b= $_GET["b"];
if ($a>$b) {
	echo "A = $a";	
}elseif ($a<$b) {
	echo "B = $b";
}elseif ($a == $b) {
	echo "A = B, $a e $b";
}

 ?>-->
<!--operador ternário-->
 <!--<?php 
$a= $_GET["a"];
$b= $_GET["b"];

$maior = $a>$b? $a:$b;
$menor = $a<$b? $a:$b;

echo "MAIOR ".$maior."<br>";
echo "MENOR ".$menor;
  ?>-->
<!--
<?php 
$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$tipo = $_GET["op"];

$r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
echo "$r";

?>-->
<!--
<?php 
$n1 = $_GET["a"];
$n2 = $_GET["b"];

$result = ($n1 === $n2) ? "SIM":"NÃO";
echo "$result";
 ?>-->
<!--
<?php 
$n1 = $_GET["a"];
$n2 = $_GET["b"];
$n3 = $_GET["c"];
$n4 = $_GET["d"];
$media  = ($n1+$n2+$n3+$n4) /4;
$situacao = ($media > 7) ? "APROVADO" : "REPROVADO";
echo "méia igual a $media, aluno $situacao";
?>-->
<!--
<?php 
$nasc = $_GET["nasc"];
$ano = 2018;
$idade = $ano - $nasc;

$vota = ($idade >= 18 && $idade < 65)?" é Obrigatório":"Naõ é Obrigatório";
echo("Vocẽ tem $idade anos, seu voto $vota");
 ?>-->