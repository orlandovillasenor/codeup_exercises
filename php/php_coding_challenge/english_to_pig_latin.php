<?php 

echo "Enter English statement to be translated to Pig Latin: ";
$english = trim(fgets(STDIN));

$english_array = explode(' ', $english);

foreach ($english_array as $value) {
	$first_letter = $english_array[0][0];
	$first_letter_removed = substr($english_array[0], 1);

	if (!ctype_lower($first_letter)) {
		$first_lower = strtolower($first_letter);
		$first_removed_upper = ucfirst($first_letter_removed);
		$pig_value = $first_removed_upper . $first_lower . 'ay';
		array_shift($english_array);
		echo "$pig_value ";
	} else {	
		$pig_value = $first_letter_removed . $first_letter . 'ay';
		array_shift($english_array);
		echo "$pig_value ";
	}
}
echo PHP_EOL;

    
	