<?php

function error(){
	echo "Error, arg 1 and arg 2 must both be numbers\n";
}
	
function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a + $b . "\n";
	} else {
		echo error();
		//echo "Error, arg '{$a}' and arg '{$b}' must both be numbers\n";
	}
}

add(10, 'dog');

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
		echo $a - $b . "\n";
	} else {
		echo error();
		//echo "Error, arg '{$a}' and arg '{$b}' must both be numbers\n";
	}
}

subtract(8, 4);

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
		echo $a * $b . "\n";
	} else {
		echo error();
		//echo "Error, arg '{$a}' and arg '{$b}' must both be numbers\n";
	}
}

multiply(5, 4);

function divide($a, $b) {
    if ($b == 0) {
    	echo "Error, arg \$b can not equal 0 because a number can not be divided by 0\n";
    }

    elseif (is_numeric($a) && is_numeric($b)) {
		echo $a / $b . "\n";
	} else {
		echo error();
		//echo "Error, arg '{$a}' and arg '{$b}' must both be numbers\n";
	}
}

divide(20, 0);

function modulus($a, $b){
	if (is_numeric($a) && is_numeric($b)) {
		echo $a % $b . "\n";
	} else {
		echo error();
		//echo "Error, arg '{$a}' and arg '{$b}' must both be numbers\n";
	}
}

modulus(5, 4);


?>
