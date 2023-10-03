<!-- 84-69-77-85-82 -->

<?php

$morze = array(
	'PROBEL' => '84-69-77-85-82',
	'A' => '.-',
	'B' => '-..',
	'C' => '...',
	'D' => '-..',
	'E' => '.',
	'F' => '.-.',
	'G' => '--.',
	'H' => '....',
	'I' => '.--.',
	'J' => '.---',
	'K' => '-.-',
	'L' => '-',
	'M' => '--',
	'N' => '-.',
	'O' => '. .',
	'P' => '....',
	'Q' => '..-.',
	'R' => '. ..',
	'S' => '...',
	'T' => '-',
	'U' => '..-',
	'V' => '...-',
	'W' => '.--',
	'X' => '.-..',
	'Y' => '..-..',
	'Z' => '....',

	'1' => '.--.',
	'2' => '..-..',
	'3' => '..-.',
	'4' => '---',
	'5' => '.....',
	'6' => '--..',
	'7' => '-....',
	'8' => '--..',
	'9' => '-..-',
	'0' => '-----'
);

function counts($matins) {
	// Matindagi nechta gap bor ekani aytuchi pragrama;
	$matin = explode(" ", $matins);
	return count($matin);
}

function morze_alifbo($matin) {
	// oydiy sozdan morzega oylantiradi;
	if (counts($matin) == 1) {
		# bita matin yoki gap bolsa ishga tushadi
		global $morze;
		$matin_morze = ' ';
		for ($i=0; $i <=strlen($matin) - 1 ; $i++) {
			switch ($matin[$i]) {
				case 'a': $matin_morze .= $morze['A']."|"; break;
				case 'b': $matin_morze .= $morze['B']."|"; break;
				case 'c': $matin_morze .= $morze['C']."|"; break;
				case 'd': $matin_morze .= $morze['D']."|"; break;
				case 'e': $matin_morze .= $morze['E']."|"; break;
				case 'f': $matin_morze .= $morze['F']."|"; break;
				case 'g': $matin_morze .= $morze['G']."|"; break;
				case 'h': $matin_morze .= $morze['H']."|"; break;
				case 'i': $matin_morze .= $morze['I']."|"; break;
				case 'j': $matin_morze .= $morze['J']."|"; break;
				case 'k': $matin_morze .= $morze['K']."|"; break;
				case 'l': $matin_morze .= $morze['L']."|"; break;
				case 'm': $matin_morze .= $morze['M']."|"; break;
				case 'n': $matin_morze .= $morze['N']."|"; break;
				case 'o': $matin_morze .= $morze['O']."|"; break;
				case 'p': $matin_morze .= $morze['P']."|"; break;
				case 'q': $matin_morze .= $morze['Q']."|"; break;
				case 'r': $matin_morze .= $morze['R']."|"; break;
				case 's': $matin_morze .= $morze['S']."|"; break;
				case 't': $matin_morze .= $morze['T']."|"; break;
				case 'u': $matin_morze .= $morze['U']."|"; break;
				case 'v': $matin_morze .= $morze['V']."|"; break;
				case 'w': $matin_morze .= $morze['W']."|"; break;
				case 'x': $matin_morze .= $morze['X']."|"; break;
				case 'y': $matin_morze .= $morze['Y']."|"; break;
				case 'z': $matin_morze .= $morze['Z']."|"; break;
				
				case '1': $matin_morze .= $morze['1']."|"; break;
				case '2': $matin_morze .= $morze['2']."|"; break;
				case '3': $matin_morze .= $morze['3']."|"; break;
				case '4': $matin_morze .= $morze['4']."|"; break;
				case '5': $matin_morze .= $morze['5']."|"; break;
				case '6': $matin_morze .= $morze['6']."|"; break;
				case '7': $matin_morze .= $morze['7']."|"; break;
				case '8': $matin_morze .= $morze['8']."|"; break;
				case '9': $matin_morze .= $morze['9']."|"; break;
				case '0': $matin_morze .= $morze['0']."|"; break;
				default: $matin_morze .= $morze['PROBEL']; break;
			}
		}
		return $matin_morze;
	}
	else {
		# 1dan kop bolsa ishga tushadi
		$matin_to_morze = '';
		global $morze;
		$matin = explode(" ", $matin); 
		for ($i=0; $i <= count($matin) -1; $i++) { 
			for ($k=0; $k <= strlen($matin[$i]) - 1; $k++) { 
				switch ($matin[$i][$k]) {
					case 'a': $matin_to_morze .= $morze['A']."|"; break;
					case 'b': $matin_to_morze .= $morze['B']."|"; break;
					case 'c': $matin_to_morze .= $morze['C']."|"; break;
					case 'd': $matin_to_morze .= $morze['D']."|"; break;
					case 'e': $matin_to_morze .= $morze['E']."|"; break;
					case 'f': $matin_to_morze .= $morze['F']."|"; break;
					case 'g': $matin_to_morze .= $morze['G']."|"; break;
					case 'h': $matin_to_morze .= $morze['H']."|"; break;
					case 'i': $matin_to_morze .= $morze['I']."|"; break;
					case 'j': $matin_to_morze .= $morze['J']."|"; break;
					case 'k': $matin_to_morze .= $morze['K']."|"; break;
					case 'l': $matin_to_morze .= $morze['L']."|"; break;
					case 'm': $matin_to_morze .= $morze['M']."|"; break;
					case 'n': $matin_to_morze .= $morze['N']."|"; break;
					case 'o': $matin_to_morze .= $morze['O']."|"; break;
					case 'p': $matin_to_morze .= $morze['P']."|"; break;
					case 'q': $matin_to_morze .= $morze['Q']."|"; break;
					case 'r': $matin_to_morze .= $morze['R']."|"; break;
					case 's': $matin_to_morze .= $morze['S']."|"; break;
					case 't': $matin_to_morze .= $morze['T']."|"; break;
					case 'u': $matin_to_morze .= $morze['U']."|"; break;
					case 'v': $matin_to_morze .= $morze['V']."|"; break;
					case 'w': $matin_to_morze .= $morze['W']."|"; break;
					case 'x': $matin_to_morze .= $morze['X']."|"; break;
					case 'y': $matin_to_morze .= $morze['Y']."|"; break;
					case 'z': $matin_to_morze .= $morze['Z']."|"; break;
					case '1': $matin_morze .= $morze['1']."|"; break;
					case '2': $matin_morze .= $morze['2']."|"; break;
					case '3': $matin_morze .= $morze['3']."|"; break;
					case '4': $matin_morze .= $morze['4']."|"; break;
					case '5': $matin_morze .= $morze['5']."|"; break;
					case '6': $matin_morze .= $morze['6']."|"; break;
					case '7': $matin_morze .= $morze['7']."|"; break;
					case '8': $matin_morze .= $morze['8']."|"; break;
					case '9': $matin_morze .= $morze['9']."|"; break;
					case '0': $matin_morze .= $morze['0']."|"; break;
					default: $matin_to_morze .= $morze['PROBEL']; break;
				}
			}
			$matin_to_morze .= "~";
		}
		return $matin_to_morze;
	}
}

function alifbo_morze($matin) {
	$matin = explode("|", $matin);
	$matin_morze = "";
	for ($i=0; $i <= count($matin); $i++) { 
		echo $matin." ";
	}
	return $matin_morze;
}

// if (counts($matin) == 1) {
//	# morze laifbosida 1 dona matin bolsa ishga tushadi
// 	global $morze;
// 	for ($i=0; $i <=strlen($matin) - 1 ; $i++) {
// 		switch ($matin[$i]) {
// 			case $morze['A']: $matin_morze .='a'; break;
// 			case $morze['B']: $matin_morze .='b'; break;
// 			case $morze['C']: $matin_morze .='c'; break;
// 			case $morze['D']: $matin_morze .='d'; break;
// 			case $morze['E']: $matin_morze .='e'; break;
// 			case $morze['F']: $matin_morze .='f'; break;
// 			case $morze['G']: $matin_morze .='g'; break;
// 			case $morze['H']: $matin_morze .='h'; break;
// 			case $morze['I']: $matin_morze .='i'; break;
// 			case $morze['J']: $matin_morze .='j'; break;
// 			case $morze['K']: $matin_morze .='k'; break;
// 			case $morze['L']: $matin_morze .='l'; break;
// 			case $morze['M']: $matin_morze .='m'; break;
// 			case $morze['N']: $matin_morze .='n'; break;
// 			case $morze['O']: $matin_morze .='o'; break;
// 			case $morze['P']: $matin_morze .='p'; break;
// 			case $morze['Q']: $matin_morze .='q'; break;
// 			case $morze['R']: $matin_morze .='r'; break;
// 			case $morze['S']: $matin_morze .='s'; break;
// 			case $morze['T']: $matin_morze .='t'; break;
// 			case $morze['U']: $matin_morze .='u'; break;
// 			case $morze['V']: $matin_morze .='v'; break;
// 			case $morze['W']: $matin_morze .='w'; break;
// 			case $morze['X']: $matin_morze .='x'; break;
// 			case $morze['Y']: $matin_morze .='y'; break;
// 			case $morze['Z']: $matin_morze .='z'; break; 
// 			case $morze['1']: $matin_morze .='1'; break;
// 			case $morze['2']: $matin_morze .='2'; break;
// 			case $morze['3']: $matin_morze .='3'; break;
// 			case $morze['4']: $matin_morze .='4'; break;
// 			case $morze['5']: $matin_morze .='5'; break;
// 			case $morze['6']: $matin_morze .='6'; break;
// 			case $morze['7']: $matin_morze .='7'; break;
// 			case $morze['8']: $matin_morze .='8'; break;
// 			case $morze['9']: $matin_morze .='9'; break;
// 			case $morze['0']: $matin_morze .='0'; break;
// 			default: $matin_morze .= $morze['PROBEL']; break;
			
// 		}
// 	}
// }
// else {
// # morze matinda 1dan kop bolsa ishga tushadi;
// 	$matin = explode("~", $matin);
// 	for ($i=0; $i <= count($matin) -1; $i++) { 
// 		for ($k=0; $k <= strlen($matin[$i]) - 1; $k++) { 
// 			switch ($matin[$i]) {
// 				case $morze['A']: $matin_morze .='a'; break;
// 				case $morze['B']: $matin_morze .='b'; break;
// 				case $morze['C']: $matin_morze .='c'; break;
// 				case $morze['D']: $matin_morze .='d'; break;
// 				case $morze['E']: $matin_morze .='e'; break;
// 				case $morze['F']: $matin_morze .='f'; break;
// 				case $morze['G']: $matin_morze .='g'; break;
// 				case $morze['H']: $matin_morze .='h'; break;
// 				case $morze['I']: $matin_morze .='i'; break;
// 				case $morze['J']: $matin_morze .='j'; break;
// 				case $morze['K']: $matin_morze .='k'; break;
// 				case $morze['L']: $matin_morze .='l'; break;
// 				case $morze['M']: $matin_morze .='m'; break;
// 				case $morze['N']: $matin_morze .='n'; break;
// 				case $morze['O']: $matin_morze .='o'; break;
// 				case $morze['P']: $matin_morze .='p'; break;
// 				case $morze['Q']: $matin_morze .='q'; break;
// 				case $morze['R']: $matin_morze .='r'; break;
// 				case $morze['S']: $matin_morze .='s'; break;
// 				case $morze['T']: $matin_morze .='t'; break;
// 				case $morze['U']: $matin_morze .='u'; break;
// 				case $morze['V']: $matin_morze .='v'; break;
// 				case $morze['W']: $matin_morze .='w'; break;
// 				case $morze['X']: $matin_morze .='x'; break;
// 				case $morze['Y']: $matin_morze .='y'; break;
// 				case $morze['Z']: $matin_morze .='z'; break; 
// 				case $morze['1']: $matin_morze .='1'; break;
// 				case $morze['2']: $matin_morze .='2'; break;
// 				case $morze['3']: $matin_morze .='3'; break;
// 				case $morze['4']: $matin_morze .='4'; break;
// 				case $morze['5']: $matin_morze .='5'; break;
// 				case $morze['6']: $matin_morze .='6'; break;
// 				case $morze['7']: $matin_morze .='7'; break;
// 				case $morze['8']: $matin_morze .='8'; break;
// 				case $morze['9']: $matin_morze .='9'; break;
// 				case $morze['0']: $matin_morze .='0'; break;
// 			}
// 		}
// 	}
// }

?>
