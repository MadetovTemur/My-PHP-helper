<?php

# mantiqiy amal

# 01;
// $x = 0;
// $y = 0;


// if ($x > $y) {
// 	echo "$x > $y";
// }
// elseif ($x < $y) {
// 	echo "$x < $y";
// }
// else {
// 	echo " $x == $y";
// }

# 02;
$x = 4;
$y = 2;
$z = 3;

if ($x > $y  && $x>$z && $y>$z) {
	
		echo " $x > $y > $z";
	}

	if ($x > $y  && $x>$z && $y<$z) {
	
		echo " $x > $z > $y";
	}
	

	


# 04 ;
// $a = rand(1, 11);
// $b = rand(1, 11);
// $c = rand(1, 11);
// $d = rand(1, 11);

// if ($a > $b or $a < $b) {
// 	if ($a > $b){
// 		echo " a > b ";
// 	}
// 	else {
// 		echo "a < c";
// 	}
// }
// elseif ($a > $c) {
// 	echo " a > c ";
// 	if ($a > $d) {
// 		echo " a > d ";
// 	}
// }

// if ($b > $c) {
// 	echo "<br> 2chi";
// 	echo " b > c ";
// }
// elseif ($b > $d) {
// 	echo " b > d ";
// 	if ($b > $a) {
// 		echo " b > a ";
// 	}
// }

// if ($c > $d) {
// 	echo "<br> 3 chi";
// 	echo " c > d ";
// }
// elseif ($c > $a) {
// 	echo " c > a ";
// 	if ($c > $b) {
// 		echo " c > b ";
// 	}
// }

# 05
$a = rand(0, 24);

if ($a == 0) {
	echo "$a = 0";
}
else {
	if ($a == 1 or $a == 3 or $a == 5 or $a == 7 or $a == 9 or $a == 11 or 
	$a == 13 or $a == 15 or $a == 17 or $a == 19 or $a == 21 or $a == 23) {
		echo " $a = TOK";
	}
	else {
		echo "$a = JUFT";
	}
}

# 06;
// $a = 9;
// $b = 4;

// echo $a - $b;


?>