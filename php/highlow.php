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

echo "GOOD GUESS! It took you $guess_count guesses. You should play the lottery tonight.";


exit(0);


?>