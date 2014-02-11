<?php

function params_are_valid($a, $b){
	if (!is_numeric($a) || !is_numeric($b)) {
		echo "Error, arg \$a and arg \$b must both be numbers\n";
		var_dump($a);
		var_dump($b);
		return FALSE;
	} else {
		return TRUE;
	}	
}
	
function add($a, $b) {
	if (params_are_valid($a, $b)){
		return $a + $b . "\n";
	} else {
		return 0;
	}
}

echo add(10, 20);

function subtract($a, $b) {
	if (params_are_valid($a, $b)){
		return $a - $b . "\n";
	} else {
		return 0;
	}
}

echo subtract(8, 4);

function multiply($a, $b) {
	if (params_are_valid($a, $b)){
		return $a * $b . "\n";
	} else {
		return 0;
	}
}

echo multiply(5, 4);

function divide($a, $b) {
	if (params_are_valid($a, $b)) {
		return $a / $b . "\n";
	} if ($b == 0) {
		echo "Error, arg \$b can not equal 0 because a number can not be divided by 0\n";
		return FALSE;
	}
}

echo divide(20, 10);

function modulus($a, $b) {
	if (params_are_valid($a, $b)){
		return $a % $b . "\n";
	} else {
		return 0;
	}
}

echo modulus(5, 4);


?>
