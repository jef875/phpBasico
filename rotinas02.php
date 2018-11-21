<?php  
function soma(&$x){ //FUNÇÃO COM PASSAGEM DE PARAMETRO
	$x +=2; 	// VARIÁVEL ADCIONA MAIS DOIS
}
	$a = 5; //VARIAVEL QUE SERÁ PASSADO AO PARAMETRO &$X
	soma($a);  //ATRIBUI O VALOR DE $a NA FUNÇÃO DE SOMA
	echo "$a"; // MOSTRA O VALOR DE $a +2
?>