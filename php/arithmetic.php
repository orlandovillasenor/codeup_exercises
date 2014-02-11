<?php

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a + $b . "\n";
	} else {
		echo "Error, all inputs must be numbera\n";
	}
}

add(10, 2);

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
		echo $a - $b . "\n";
	} else {
		echo "Error, all inputs must be numbera\n";
	}
}

subtract(8, 4);

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
		echo $a * $b . "\n";
	} else {
		echo "Error, all inputs must be numbera\n";
	}
}

multiply(5, 8);

function divide($a, $b) {
    if ($b == 0) {
    	echo "Error, \$b can not equal 0\n";
    }

    elseif (is_numeric($a) && is_numeric($b)) {
		echo $a / $b . "\n";
	} else {
		echo "Error, all inputs must be numbera\n";
	}
}

divide(20, 0);

function modulus($a, $b){
	if (is_numeric($a) && is_numeric($b)) {
		echo $a % $b . "\n";
	} else {
		echo "Error, all inputs must be numbera\n";
	}
}

modulus(5, 4);

?>
