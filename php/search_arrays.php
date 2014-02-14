<?php


// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// Create a function that returns true or false if an array value is found.

function found_value($value, $array, $strict = TRUE){
	$result = array_search($value, $array);
	if ($result == TRUE) {		
		return TRUE;
	} else {
		return FALSE;
	}
}

found_value('Tina', $names);
found_value('Bob', $names);





	





