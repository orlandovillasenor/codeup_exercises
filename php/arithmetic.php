<?php

function params_are_valid($a, $b){
	if (!is_numeric($a) || !is_numeric($b)) {
		echo "Error, arg \$a and arg \$b must both be numbers\n";
		var_dump($a);
		var_dump($b);
	} else {
		return TRUE;
	}	
}
	
function add($a, $b) {
	params_are_valid($a, $b);
	//if (is_numeric($a) && is_numeric($b)) {
	return $a + $b . "\n";
}

echo add(10, 20);

function subtract($a, $b) {
	params_are_valid($a, $b);
	//if (is_numeric($a) && is_numeric($b)) {
	return $a - $b . "\n";
}

echo subtract(8, 4);

function multiply($a, $b) {
	params_are_valid($a, $b);
	//if (is_numeric($a) && is_numeric($b)) {
	return $a * $b . "\n";
}

echo multiply(5, 4);

function divide($a, $b) {
	if ($b == 0) {
    	echo "Error, arg \$b can not equal 0 because a number can not be divided by 0\n";
    } elseif (params_are_valid($a, $b)) {
	//if (is_numeric($a) && is_numeric($b)) {
		return $a * $b . "\n";
	}	
}

echo divide(20, 5);

function modulus($a, $b) {
	params_are_valid($a, $b);
	//if (is_numeric($a) && is_numeric($b)) {
	return $a % $b . "\n";
}

echo modulus(5, 4);





// if ($b == 0) {
//     	echo "Error, arg \$b can not equal 0 because a number can not be divided by 0\n";
//     }

?>
