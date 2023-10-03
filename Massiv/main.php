<?php
/****************************************************************************** */
$massiv = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,15, 16, 17,18,19,20];

# 2
function ikki() {
    $massiv = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,15, 16, 17,18,19,20];
    $yigndi = 0;
    
    for ($i = 1; $i < count($massiv); $i += 2) {
        $yigndi = $yigndi + $massiv[$i];
    }
    echo $yigndi;
}
# 3
function uch() {
    $massiv = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,15, 16, 17,18,19,20];
    $yigndi = 0;
    
    for ($i = 0; $i < count($massiv); $i++) {
        $yigndi = $yigndi + $massiv[$i];
    }
    echo $yigndi;
}
# 4
function tort() {
    $massiv = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,15, 16, 17,18,19,20];
    $yigndi = 0;
    
    for ($i = 0; $i < count($massiv); $i += 2) {
        $yigndi = $yigndi + $massiv[$i];
    }
    echo $yigndi;
}
# 5
function besh() {
    $massiv = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,15, 16, 17,18,19,20];
    $yigndi = 0;
    
    for ($i = 0; $i < count($massiv); $i++) {
        $yigndi = $yigndi + $massiv[$i];
    }
    echo $yigndi / count($massiv);
}
# 6
function olti() {
    $massiv = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,15, 16, 17,18,19,20];
    $yigndi = 0;
    $arifmetik = 0;
    
    for ($i = 0; $i < count($massiv); $i ++) {
        $yigndi = $yigndi + $massiv[$i];
    }
    $arifmetik = $yigndi / count($massiv);
    $yigndi = 0;
    $sanok = 0;
    for ($f = 0; $f < count($massiv); $f ++) {
        if ($arifmetik <= $massiv[$f]) {
           $yigndi = $yigndi + $massiv[$i];
           $sanok ++;
        }
    }
    echo $yigndi / $sanok;
    
}
# 7
function yeti() {
    $massiv = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,15, 16, 17,18,19,20];
    $a = 6; $b = 12;
    $yigndi = 0;
    
    for($i = 0; $i < count($massiv); $i ++) {
        if ($a <= $i and $b >= $i) {
           $yigndi = $yigndi + $massiv[$i];
        }
    }
    echo $yigndi;
}
# 8
function sakiz() {
  $massiv = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,15, 16, 17,18,19,20];
  $a = 6; $b = 12;
  $yigndi = 0; 
  for($i = 0; $i < count($massiv); $i ++) {
    if ($a <= $i and $b >= $i) {
      echo $yigndi ** 2;
    }
  }
}

# 9
function toqiz() {
	$massiv = [11, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,15, 16, 17,18,19,20];
	$a = min($massiv);
	$b = max($massiv);
	$massiv[0] = $b;
	$k= count($massiv);
	$massiv[$k] = $b;
	return $massiv;
}

# 10
function on() {
	$massiv = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,15, 16, 17,18,19,20];
	$a = 6; $b = 12;
	$yigndi = 0;
	$j = 0;

	for ($f=0; $f < count($massiv); $f++) { 
		if ($a >= $i or $b >= $i) {
			$yigndi = $yigndi + $massiv[$f];
			$j ++;
		}
	}
	return $yigndi / $j;
}

# 11
function onbir() {
	$massiv = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,15, 16, 17,18,19,20];
	$yigndi = 0;
	for ($y=0; $y < count($massiv); $y++) { 
		$yigndi += $massiv[$y] ** 2;
	}
	return $yigndi;
}

# 12
function onikki() {
	$massiv = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,15, 16, 17,18,19,20];
	$b = min($massiv);

	for ($t=0; $t < count($massiv); $t++) { 
		echo $massiv[$t] / $b;
	}

}

# 13
function onuch() {
	$massiv = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,15, 16, 17,18,19,20];
  $m = 6; $b = min($massiv);

	for ($i=0; $i < count($massiv); $i++) { 
		if ($m <= $i) {
			echo $massiv[$i] / $b;
		}
	}
}

# 14
function ontort() {
	$massiv = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,15, 16, 17,18,19,20];
	$n = 6;
  $yigndi = 0;
 	for ($i=0; $i < count($massiv); $i++) { 
		if ($n <= $i) {
			echo $massiv[$i] ** 2;
		}
 	}
}

# 15
function onbesh() {
	$massiv = [1, 3, 4, 5, 6, 7, 8, 9, 10,  12, 13, 14,15];
	$x = 6; $y = 12;
  $yigndi = 0;

	for ($i=0; $i < count($massiv); $i++) { 
		if ($x > $i or $y < $i) {
			echo $massiv[$i]."<BR>";
			$yigndi ++;
		}
	}
	// return $yigndi;
}

# 16
function onolti() {
	$massiv = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,15, 16, 17,18,19,20];
	$m = 6; 
  $yigndi = 0;

	for ($i=0; $i < count($massiv); $i++) { 
		if ($m >= $i) {
			$yigndi = $yigndi + $massiv[$i];
		}
	}
	return $yigndi;
}

# 17
function oneti() {
	$massiv = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,15, 16, 17,18,19,20];
	
	for ($i=0; $i < count($massiv); $i++) { 
		echo $massiv[$i] ** 2;
	}
}

# amaliy mashk
function mashiq_01 () {
	$massiv = [1, 2, 3, 84, 5, 26, 7, 8, 9, 10];
	$massiv = asort($massiv);
	$k = count($massiv);
	for ($i = $k; $i >=0; $i--) { 
		echo $i, "->", $massiv[$i], "<br>"; 
	}
}
mashiq_01();

?>