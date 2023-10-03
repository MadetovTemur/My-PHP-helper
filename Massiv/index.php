<?php

# 1
function bir(){
	$son = [1,2,3,4,5,6,7];
	$yigindi = 0;
	$orta = 0;
	$ortakichik = 0;

	for ($i=0; $i <= count($son) - 1; $i++) {
		$yigindi = $yigindi + $son[$i];
	}
	$s = 0;
	$orta = $yigindi / count($son);
	return $orta; $orta = 0;
	for ($f=0; $f <= count($son) - 1 ; $f++) { 
		if ($orta >= $son[$f]) {
			$ortakichik += $son[$f];
			$s++;
		}
	}
	$orta = $ortakichik / $s;
	return $orta.$s;
}
// echo bir();


function ikki() {
	$a = 2; $b = 5;
	$masuv = [2, 3, 4, 5, 6, 7, 8, 9];

	for ($i=1; $i <= count($masuv); $i++) {
		if ($a <= $i and $b >= $i) {
			echo $masuv[$i] / min($masuv);
		}
	}

	foreach($masuv as $key){
		echo $key.",";
	}
}

function uch() {

}




 

















?>