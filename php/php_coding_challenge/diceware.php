<?php 

echo "How many words would you like to use to generate your password? At least 5 is recommended: ";
$number_of_words = trim(fgets(STDIN));
$var = $number_of_words * 5;
$large_index = mt_rand(1, 6);

for ($i=1; $i < $var; $i++) { 
	$large_index .= mt_rand(1, 6);
}

$index = chunk_split($large_index, $chunklen = 5, $end = " ");
$index_array = explode(" ", $index);
array_pop($index_array);

$filename = 'data/diceware.wordlist.txt';
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
$contents_array = explode("\n", $contents);
fclose($handle);

foreach ($index_array as $codes) {
	foreach ($contents_array as $value) {
		if (substr($value, 0, 5) == $codes) {
 			echo substr($value, 6) . PHP_EOL;
  		} 
	}
}

exit(0);