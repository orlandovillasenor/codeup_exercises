<?php

$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


// Exercise 2
// function found_value($value, $array, $strict = TRUE){
// 	$result = array_search($value, $array);
// 	if ($result == TRUE) {		
// 		return TRUE;
// 	} else {
// 		return FALSE;
// 	}
// }

// found_value('Tina', $names);
// found_value('Bob', $names);


// Exercise 3

function common_values($array1, $array2){
 $number_in_common = 0;
 foreach ($array1 as $array1) {
     $result = array_search($array1, $array2);

     if (is_numeric($result)) {
         $number_in_common++;
     }
 }
     return $number_in_common;
}

echo common_values($names, $compare) . PHP_EOL;





