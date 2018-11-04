<?php
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$media = ($n1 + $n2)/2;
if ($media >= 7) {
	echo "O aluno está aprovado com média ".$media;
}elseif ($media >= 5 && $media <=6) {
	echo "O aluno está de recuperação com média ".$media;
}elseif ($media < 5) {
	echo "O aluno está reprovado com média ".$media;
}
?>