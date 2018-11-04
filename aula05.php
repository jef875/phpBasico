<?php
$n1 = $_GET["a"]; //pegar parametros inseridos na url
$n2 = $_GET["b"];
$soma = $n1 + $n2;
$media = $soma/2;
$subtracao = $n1 - $n2;
$multiplicacao = $n1 * $n2;


echo "O valor absoluto de $n2 é ".abs($n2). "<br>";
echo "A soma entre $n1 e $n2 é $soma <br>";
echo "A media é $media <br>";
echo "A subtração de $n1 por $n2 é $subtracao <br>";
echo "A multiplicação é $multiplicacao <br>";

echo "O valor de $n1 em moeda é R$".number_format($n1, 2, ",", "."). "<br>";
echo "A raiz quadrada de $n1 é ". sqrt($n1)."<br>" ; //raiz quadrada
echo "A potenciação de $n1<sup>$n2</sup> é ". pow($n1, $n2)."<br>";
echo "Aredondamento de ".$media. " é " . round($media). "<br>"; 
//ceil(value)arredondamento para mais     floor(value) arredondamento para menos
echo "A parte inteira da média é ".intval($media);
?>