<?php

// prompt user for a min and max number

fwrite(STDOUT, "Enter a number that you want to start counting from: ");

$start_number = fgets(STDIN);

$start_number = trim($start_number);

fwrite(STDOUT, "Now enter a number that you want to count to: ");

$end_number = fgets(STDIN);

$end_number = trim($end_number);

fwrite(STDOUT, "Now choose increment (count by 1,2,5, etc.): ");

$increment = fgets(STDIN);

$increment = trim($increment);

if (!is_numeric($start_number) || !is_numeric($end_number)) {
	echo "Error, your inputs need to be numbers ";
	exit(0);
}

if (!is_numeric($increment)) {
	$increment = 1;
}

//display all numbers from start to finish using for loop

for ($i = $start_number ; $i <= $end_number ; $i += $increment) { 
	echo "$i\n";

}

?>