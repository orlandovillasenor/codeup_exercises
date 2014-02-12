<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a funciton that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function check_value($value){
	if (isset($value)) {
		echo "\$value is SET" . PHP_EOL;
	} elseif (empty($value)) {
		echo "\$value is EMPTY" . PHP_EOL;
	}
}

check_value($nothing);

// TEST: If var $nothing is set, display '$nothing is SET'

if (isset($nothing)) {
	echo "\$nothing is SET" . PHP_EOL;
}

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

if (empty($nothing)) {
	echo "\$nothing is EMPTY" . PHP_EOL;
}

// TEST: If var $something is set, display '$something is SET'

if (empty($something)) {
	echo "\$something is EMPTY" . PHP_EOL;
}

// Serialize the array $array, and output the results

$serialized = serialize($array);
echo $serialized;

// Unserialize the array $array, and output the results

$unserialized = unserialize($serialized);
var_dump($unserialized);


// function checkvalue(value){

// }