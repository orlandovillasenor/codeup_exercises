<?php 

echo "Enter Pig Latin statement to be translated to English: ";
$pig_latin = trim(fgets(STDIN));
$pig_array = explode(' ', $pig_latin);

foreach ($pig_array as $value) {
	$pig_first_letter = $pig_array[0][0];
	$english_first_letter = substr($pig_array[0], -3, 1);
	$english_end_string = substr($pig_array[0], 0, -3);
	$upper_end_string = substr($pig_array[0], 1, -3);
	
	if (!ctype_lower($pig_first_letter)) {
		$second_letter_lower = strtolower($pig_first_letter);
		$upper_english_first_letter = strtoupper($english_first_letter);
		$english = $upper_english_first_letter . $second_letter_lower . $upper_end_string;
		array_shift($pig_array);
		echo "$english ";
	} else {
		$english = $english_first_letter . $english_end_string;
		array_shift($pig_array);
		echo "$english ";
	}
}
echo PHP_EOL;