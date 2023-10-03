<?php

	function bir($son) {
		return $son ** 3 ;
	}

	function oltinchi($a, $b, $h) {
		// uch burhak formula
		$javop = ($a + $b) * $h / 2 ;
		return $javop;
	}

	function onbir($a = 4){
		$n = 0;
		for ($i = 0; $i < $a ; $i++) { 
			$n += $i;
		}
		return $n;
	}

	function onikki($m){

		$g = 9.8;

		return round($m * $g, 2);
	}

	function onolti($x, $y) {
		$e = 2.72;
		$javop = (($x + $y) / $y ** 2 + abs($y ** 2 + 2 / $x + $x ** 3 / 5)) + $e ** ($y + 2); 
		return $javop;
	}

	function YugirmaBir($a, $b){
		$t = pow($a, 1/5) + pow($b * ($a + $b / 2 * $b + $a * $b ) * ($a ** 2 + $b ** 2 + 2 ), 1/4);

		return $t;
	}

	function YigirmaOlti($a = 0, $x = 3.66, $y = 0.75){

		$e = 2.718281828459045;

		$x2 = abs(sqrt($x + $y) - $x * sin($a + $x) - abs(($x ** 2 / 2) + abs($x) + 5) ) ; //// 2 + abs() )

		return $x2;
	}

	// echo YigirmaOlti();



	function otizBir($x, $y) {
		return "max:".max($x, $y), " min:".min($x, $y);
	}

	function OtizOlti($son) {
		$son = explode(" ", $son);

		for ($i=0; $i < count($son) - 1; $i++) { 
			if ($son[$i] <= $son[$i + 1]) {
				return $son[$i]." ". $son[$i + 1];
			} else {
				return $son[$i];
			}
		}
	}

	echo OtizOlti('3 4');
