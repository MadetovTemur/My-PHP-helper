<?php 
/* 
Array    masiv
18.04.2023
*/

# Topshirik - 01;
// function powerlower($matin, $harip, $unliunsiz = false) {
// 	// $matin = gap yoki matin kirgizamiz;
// 	// $harip = $matin ga kirgizga harip yoki songdi kidiradi;
// 	// $unliunsiz = false unsiz karak bolsa true dep berasiz;
	
// 	$jami = 0; // mating jami unzinligi
// 	$soni = 0; // user kirgazgan hardan nechta ekani xisoblash
// 	$unli = 0;
// 	$unsiz = 0;

// 	for ($i=0; $i <= strlen($matin); $i++) { 
// 		$jami ++;
// 		if (strtolower($matin[$i]) == strtolower($harip)) {
// 			$soni ++;
// 		}
// 	}

// 	if ($unliunsiz) {
// 		for ($i=0; $i <= strlen($matin); $i++) { 
// 			switch($matin[$i]) {
// 				case 'a':
// 					$unli++;
// 					break;
// 				case 'o':
// 					$unli++;
// 					break;
// 				case 'i':
// 					$unli++;
// 					break;
// 				case 'u':
// 					$unli++;
// 					break;
// 				case 'e':
// 					$unli++;
// 					break;
// 				default:
// 					$unsiz++;
// 					break;
// 			}
// 		}
// 		echo "Unli hariplar $unli <br> Unsiz esa $unsiz <br>";
// 	}
// 	return "Siz kirgizgan matin '$matin' <br> <i>$harip</i> dan $soni ta; <br> Jami:$jami; <br> <br>";
// }

// echo powerlower("assalomualekum", "a");


# Topshirik - 02;
function teskarimatin($matin) {
	$sozmatin = '';
	for ($i = strlen($matin); $i >= 0; $i--) { 
		echo $matin[$i];
	}
	return $sozmatin;
}

# Topshirik - 03;
function katakichik($matin, $katakichik = false) {
	$kata = 0;
	$kichik = 0;

	if ($katakichik) {
		# code...
		for ($i = 0; $i <= strlen($matin); $i++) { 
			if ($matin[$i] == strtolower($matin[$i])) {
				$kichik++;
			} elseif ($matin[$i] == strtoupper($matin[$i])) {
				$kata ++;
			}
		}
		return $kata. "	>>	".$kichik;
	}
	elseif ($katakichik == false) {
		# code...
			echo $matin. "<br>";
		for ($i = 0; $i <= strlen($matin); $i++) { 
			if ($matin[$i] == strtolower($matin[$i])) {
				echo strtoupper($matin[$i]);
			} elseif ($matin[$i] == strtoupper($matin[$i])) {

				echo strtolower($matin[$i]);
			}
		}
	}
}

# Topshirik - 04;
function ochiriptashlsh($matin, $soz){

	for ($i=0; $i <= strlen($matin); $i++) { 
		if ($matin[$i] == $soz) {
			$matin[$i] = '';
		}
	}
	return $matin;
}

# Topshirik - 05;
function yigindi(int $n) {
	if (strlen($n) == 2) {
		$qoldik = $n % 10;
		$butin = floor($n / 10);
		return $qoldik + $butin;
	} elseif(strlen($n) == 3){
			$qoldik = $n % 10; 
			$butin = floor($n / 10);
			return $qoldik. " ". $butin;
	}
}


# Topshirik - 06;
function Matinizlovchi(string $matin) {
	$arr = explode(" ", $matin);
	$k = 0;
	for ($i=0; $i <= count($arr); $i++) { 
		if ($arr[$i][0] >= "A" and $arr[$i][0] <= "Z") {
			$k ++;
		}
	}
	return $k;
}

#topshiriik - 07;
function unliunsiz($matin) {
	$unli = 0;

	for ($i=0; $i <= strlen($matin); $i++) { 
		if (strtolower($matin[$i]) == "a" or strtolower($matin[$i]) == "o" or strtolower($matin[$i]) == "i") {
			$unli ++;
		} elseif (strtolower($matin[$i]) == "u" or strtolower($matin[$i]) == "e") {
			$unli ++;
		}
	}
	return $unli;
}

function boryokiyoq($matin0, $matin1) {
	$k = strlen($matin1);
	$n = 0;
	while ($k >= 0) {
		for ($i=0; $i <= strlen($matin0); $i++) { 
			if ($matin0[$i] == $matin1[$n]) {
				$matin0[$i] = ' ';
			}
		}
		$k--;
		$n++;
	}
}


#topshiriik - 08;
function assalomu_alekum($matin, $gap) {
	$g = strlen($gap);
	$a = strlen($gap);
	$gap2 = $gap;

	while (0 <= $a) {
		for ($i=0; $i <= strlen($matin); $i++) {
			if ($matin[$i] === $gap2[$g]) {
				$gap2[$g] = ' ';
			} else {
				$matin[$i] = ' ';
			};
		}
		$g--;
		$a--;
	}

	if ($gap2 == 0) {
		return 'TRUE';
	} else {
		return 'FALSE';
	}
}

# Topshirik - 09;
function unliuchlik($matin) {
	$unli = array("b", "c", "d","f", "g", "h",
	"j", "k", "l", "m", "n", "p", "q","r", "s",
	"t", "v", "x", "y", "z");
	$k = 0; 
	$m = strlen($matin);

	while ($m >= 0) {
		for ($i=0; $i < 20; $i++) {
			if ($matin[$m] == $unli[$i]) {
				for ($i=0; $i < 20; $i++) {
					if ($matin[$m + 1] == $unli[$i]) {
						for ($i=0; $i < 20; $i++) {
							if ($matin[$m + 2] == $unli[$i]) {
								return 'True';
								break;
							}
						}
					}
				}
			}
		}
		$m --;
	}
	return 'false';
}
// echo unliuchlik("vbc");

# Topshirik - 10;
function PowerBBC($matin) {
	$arr = explode(" ", $matin);

	for ($i=0; $i <= count($arr); $i++) { 
		if ($arr[$i][0] >= "A" and $arr[$i][0] <= "Z") {
			print_r($arr[$i]);
			// return True;
		}
	}
	// return False;
}
// echo PowerBBC("Algoritm tuit uz");
// echo PowerBBC("ARTDJ Algoritm tuit uz dizayneri");

function onbir($matin) {
	$arr = explode(" ", $matin);
	$k = count($arr);
	$n = 0;

	while($k >= 0) {
		for ($i=0; $i <= strlen($arr[$n]); $i++) {
			if ($arr[$n][$i] == 'n' or $arr[$n][$i] == 'N' and $arr[$n][$i + 1] == 'a' or $arr[$n][$i + 1] == 'A') {
				echo $arr[$n];
				$n+= 1;
			}
		}
		$k--;
		$n+= 1;
	}
}
echo onbir("Yana na keldi");



#topshirik - 11
// function onbir($matin) {
// 	$arr = explode(" ", $matin);
// 	$k = count($arr);
// 	$n = 0;

// 	for ($i = 0; $i <= count($arr); $i++) {
// 		for ($j = 0; $j <= strlen($arr[$i]) ; $j++) { 
// 			if ($arr[$i][$j] == 'n' or $arr[$i][$j] == 'N' and $arr[$i][$j + 1] == 'a' or $arr[$i][$j + 1] == 'A') {
// 				echo $arr[$i]. " ";
// 				$n++;
// 			}
// 		}
// 	}
// }
// echo onbir("Yana na keldi");

#topshirik - 12
function onikki($matin) {
	$arr = explode(" ", $matin);
	for ($i = 0; $i <= count($arr); $i++) {
		for ($j = 0; $j <= strlen($arr[$i]); $j++) {
			if ($arr[$i][$j] == 'i' or $arr[$i][$j] == 'I' and $arr[$i][$j + 1] == 'n' or $arr[$i][$j + 1] == 'N' and
					$arr[$i][$j + 2] == 'f' or $arr[$i][$j + 2] == 'F' and $arr[$i][$j + 3] == 'o' or $arr[$i][$j + 3] == 'o') {
				echo $arr[$i]. "<br>";
			}
		}
	}
}
// onikki("informatika info");

# Topshirik - 13;
function onuch($matin) {
	$arr = explode(" ", $matin);

	for ($i = 0; $i <= count($arr); $i++) {
		for ($j = 0; $j <= strlen($arr[$i]); $j++) {
			if (strlen($arr[$i]) == $j) {
				echo $arr[$i]. " $j <br>";
			}
		}
	}
}
// echo onuch("dn");

# Topshirik - 14;
function ontort($matin, $index, $gap) {
	$matin = explode(" ", $matin);
	$yangi_matin = '';

	for ($i=0; $i <= count($matin) - 1; $i++) { 
		if ($i == $index) {
			$yangi_matin .= $gap.' ';
		} else {
			$yangi_matin .= $matin[$i].' ';
		}
	}
	return $yangi_matin;
	return "$index ".strlen($gap);
}

// echo ontort("Asus Acer hP Lenovo Dell", 4, "TATU");

# Topshirik - 15;
function onbesh($matin, $index, $gap) {
	$matin = explode(" ", $matin);
	$yangi_matin = '';

	for ($i=0; $i <= count($matin) - 1; $i++) { 
		if ($i == $index) {
			$yangi_matin .= $gap.' ';
		} else {
			$yangi_matin .= $matin[$i].' ';
		}
	}
	return $yangi_matin;
	return "$index ".strlen($gap);
}



?>