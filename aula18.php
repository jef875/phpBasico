<!--<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1"> 
	<tr>
<?php  
//$n = array(1, 2, 4);
//echo "<pre>";
//print_r($n);
//echo "</pre>";

//$c = range(0, 10, 2); //0 = primeiro indice do vetor 10 = ultimo indice do vetor 2 = intervalo entre os valores
//foreach ($c as $key => $value) {
//	echo "<td>$value </td>";
//}
//unset($c[4]);
?>
</table>
</tr>
</body>
</html> -->

<?php  
//echo "<pre>";
//$a = array(9,5,2,1);
//array_unshift($a, 8); 	//adiciona elemento no ínicio do vetor
//sort($a);				//sort() organiza o vetor do menor para o maior
//array_shift($a); 		//elimina o orimeiro elemento do vetor
//arra_pop($a) 			//elimina o ultimo elemento do vetor
//array_push($a, 5); 	//adiciona elemento no final do vetor
//print_r($a);
//echo "<pre>";


//$pessoa = array("nome"=> "Ana", "altura"=>"1.65", "peso"=>"50", "idade"=> "20");

//foreach ($pessoa as $key => $value) {
//	echo "$key = $value <br>";
//O campo nome possui conteúdo AnaO campo altura possui conteúdo 1.65O campo peso possui conteúdo 50
//}
function f($v, $n) {
		if ($n <= 0) return 1;
		else
		return $v[$n-1] * f($v, $n-2) + 1;
	}
	$a = array(0,1,2,3);
	print (f($a, 4)); 
?>