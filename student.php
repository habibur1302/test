<?php

$a =array(1,2,3,4,5,6);
function sum($n){
	$sumation = 0;
	foreach($n as $i){
		$sumation +=$i;
	}
	return $sumation;
}
$result = sum($a);
print_r($result);

?>