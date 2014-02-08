<?php

$min = $argv[1];

$max = $argv[2];

if ($argc != 3) {
	echo "Command Line Error";
	exit(0);
}

if (!is_numeric($argv[1])) {
	echo "Command Line Error";
	exit(0);
}

if (!is_numeric($argv[2])) {
	echo "Command Line Error";
	exit(0);
}

if ($argv[1] >= $argv[2]) {
	echo "Command Line Error";
	exit(0);
}

$rand_number = mt_rand($min, $max);

fwrite(STDOUT, "Guess a number between 1 and 100: ");

$user_number = fgets(STDIN);

$user_number = trim($user_number);

$guess_count = 1;

if (is_numeric($user_number)) {

	while ($user_number != $rand_number) {
		if ($user_number < $rand_number) {
			echo "GO HIGHER! ";
		}		
		elseif ($user_number > $rand_number) {
			echo "GO LOWER! ";
		} 
		$user_number = fgets(STDIN);
		$guess_count++;
		}
} else {
	echo "YOU LOSE! ";
	exit(0);
}


if ($guess_count == 1) {
	echo "AMAZING! You got it on the first try. You should play the lottery tonight.\n";
} elseif ($guess_count > 1 && $guess_count <= 5) {
	echo "GOOD GUESS! It only took you $guess_count guesses. That's not too shabby.\n";
} else {
	echo "GOOD GUESS! It took you $guess_count guesses. You need to work on your psychic abilities though.\n";
}

exit(0);


?>