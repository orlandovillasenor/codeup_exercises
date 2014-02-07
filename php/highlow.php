<?php

$rand_number = mt_rand(1, 100);

fwrite(STDOUT, "Guess a number between 1 and 100: ");

$user_number = fgets(STDIN);

$guess_count = 1;

while ($user_number != $rand_number) {
	
	if ($user_number < $rand_number) {
		echo "GO HIGHER! ";
	}		
	if ($user_number > $rand_number) {
		echo "GO LOWER! ";
	}
	$user_number = fgets(STDIN);
	$guess_count++;
}

if ($guess_count == 1) {
		echo "Amazing! You got it on the first try. You should play the lottery tonight.\n";
	} elseif ($guess_count > 1 && $guess_count <= 5) {
		echo "Good Guess! It only took you $guess_count guesses. That's not too shabby.\n";
	} else {
		echo "GOOD GUESS! It took you $guess_count guesses. You need to work on your psychic abilities though.\n";
}




exit(0);


?>