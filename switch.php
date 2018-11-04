<?php 
$num = isset($_POST['num'])?$_POST['num']: 0;
$oper = isset($_POST['oper'])?$_POST['oper']: 1;

switch ($oper) {
	case '1':
		$r = $num*2;
		break;
	case '2':
		$r = $num*2;
		break;
	case '3':
		$r = pow($n,3);
}
echo "O resultado da operação é $r";

?>