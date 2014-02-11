<?php

$things = array('Sgt. Pepper', "11", null, array(1, 2, 3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $key => $thing) {
	if (is_integer($thing)) {
		echo "$thing";
	} elseif (is_float($thing)) {
		echo "$thing";
	} elseif (is_bool($thing)) {
		echo "$thing";
	} elseif (is_array($thing)) {
		echo "$thing[0], $thing[1], $thing[2]";
	} elseif (is_null($thing)) {
		echo "$thing";
	} elseif (is_string($thing)) {
		echo "$thing";
	}
	echo "\n";

}


// foreach ($things as $thing) {
// 	if (is_scalar($thing)) {
// 		echo "$thing\n";
// 	}
// }



// foreach ($things as $thing) {
// 	if (is_integer($thing)) {
// 		echo "$thing is an integer";
// 	} elseif (is_float($thing)) {
// 		echo "$thing is a float";
// 	} elseif (is_bool($thing)) {
// 		echo "$thing is a boolean";
// 	} elseif (is_array($thing)) {
// 		echo "$thing is an array";
// 	} elseif (is_null($thing)) {
// 		echo "$thing is null";
// 	} elseif (is_string($thing)) {
// 		echo "$thing is a string";
// 	}
// 	echo "\n";
// }




?>