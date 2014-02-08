<?php

//fizzbuzz

for ($i=1; $i <= 100 ; $i++) { 
	if ($i % 3 == 0 && $i % 5 == 0) {
		echo "FizzBuzz\n";
	} elseif ($i % 5 == 0) {
		echo "Buzz\n";
	} elseif ($i % 3 == 0) {
		echo "Fizz\n";
	} else {
		echo "$i\n";
	}
}

?>