<?php
function aaaaaa($matin, $gap) {
	$matin = explode(' ', $matin);

	return $k;
}
# 1
function bir($matin) {
	$matin = explode(" ", $matin);
	$g = 0;
	for ($i=0; $i <= count($matin) - 1; $i++) { 
		$matin02 = strrev($matin[$i]);
		if ($matin02[0] == ".") {
			$g++;
		}
	}
	return count($matin)." ".$g;
}
// echo bir("Toshkent Ozbekiston poytaxti.") ;


# 2 
function ikki($matin, $gap) {
	$matin = explode(" ", $matin);
	$g = 0;
	for ($i=0; $i <= count($matin) - 1; $i++) { 
		$matin02 = strrev($matin[$i]);
		if ($matin02[0] == ".") {
			$g++;
		}
	}

	$k = 0;
	for ($i=0; $i <= count($matin) - 1; $i++) { 
		for ($f=0; $f <= strlen($matin[$i])-1; $f++) {
			if ($matin[$i][$f] == $gap) {
				$k ++;
			}
		}
	}
	return "$g|$k";
}
// echo ikki("Mana senga olam olam gul.", "a");


# 3
function uch($matin, $index) {
	$matin = explode(" ", $matin);
	$matin02 = "";

	for ($i=0; $i <= count($matin) - 1; $i++) { 
		if (strlen($matin[$i]) == $index) {
			$matin02 .= $matin[$i]." ";
		}
	}
	return $matin02;
}
// echo uch("Mana senga olam olam gul.", "4")

# 4
function tort($matin, $soz) {
	$k = 0; $g = 0;

	for ($i=0; $i <= strlen($matin)-1; $i++) { 
		if ($matin[$i] == $soz[0]  and $matin[$i + 1] == $soz[1] and $matin[$i + 2] == $soz[2]) {
			$k++;
		}
	}
	return $k;
}
// echo tort("DEFDEFABCABCZABCDEFDEF", "DEF"

# 5
function besh($matin) {
	$matin = strtolower($matin);
	$matin = explode(" ", $matin);
	$son = array();
	$gap = "";
	$katta = "";
	$kichik = "";
	
	for ($i=0; $i <=count($matin) - 1; $i++) { 
		for ($g=0; $g <= strlen($matin[$i]) - 1; $g++) { 
			$gap .= $matin[$i][$g]." ";
		}
		array_push($son, $g);
	}
	
	for ($l=0; $l <= count($matin) - 1; $l++) { 
		if (strlen($matin[$l]) == max($son)) {
			$katta .= $matin[$l]. " ";
		} elseif(strlen($matin[$l]) == min($son)) {
			$kichik .= $matin[$l]." ";
		}
	}
	return "max'$katta'; min'$kichik'";
}
// echo besh("Mana senga olam olam gul!");

# 6
function olti($matin, $off = NULL) {
	$matin = explode(" ", $matin);
	$kichik_soz = '';

	if ($off == true) {
		for ($i=0; $i <=count($matin) - 1 ; $i++) {
			if ($matin[$i] == min($matin)) {
				$kichik_soz .= $matin[$i];
			}
			$kichik_soz .= " ";
		}
	}
	else {
		for ($i=0; $i <=count($matin) - 1 ; $i++) {
			if ($matin[$i] == max($matin)) {
				return "index'$i'; <br> $matin[$i]";
			}
		}
	}
	return $kichik_soz;
}
// echo olti("Mana senga olam olam gul!");

# 7
function etinchi($word) {
	$alifbo = ['a'=> 0, 'b'=>0, 'c'=>0, 'd'=>0, 'e'=>0, 'f'=>0, 'g'=> 0, 'h'=>0, 'i'=>0, 'j'=>0, 'k'=>0, 'l'=>0,
	'm'=> 0, 'n'=>0, 'o'=>0, 'p'=>0, 'q'=>0, 'r'=>0, 't'=> 0, 'u'=>0, 'v'=>0, 'w'=>0, 'x'=>0, 'y'=>0, 'z'=>0];
	
	for ($i=0; $i <= 24; $i++) { 
		echo $alifbo[$i];
	}
	print_r($alifbo);
}
// echo etinchi('da');

function juftson($matin) {
	for ($i=0; $i <=strlen($matin) ; $i++) { 
		if($matin[$i] == 'a' or $matin[$i] == 'o' or $matin[$i] == 'i' or $matin[$i] == 'e' or $matin[$i] == 'u') {
			if($matin[$i + 1] == 'a' or $matin[$i + 1] == 'o' or $matin[$i + 1] == 'i' or $matin[$i + 1] == 'e' or $matin[$i + 1] == 'u')  {
				if($matin[$i + 2] == 'a' or $matin[$i + 2] == 'o' or $matin[$i + 2] == 'i' or $matin[$i + 2] == 'e' or $matin[$i + 2 ] == 'u') {
					return FALSE;
					break;
				}
			}
		}
	}
	return TRUE;
}







?>
