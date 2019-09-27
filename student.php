<?php

$a =array(1,2,3,4,5,6,7);
function sum($n){
	$sumation = 0;
	foreach($n as $i){
		$sumation +=$i;
	}
	return $sumation;
}
$result2 = sum($a);
print_r($result2);

?>