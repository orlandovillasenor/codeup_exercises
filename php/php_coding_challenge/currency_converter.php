<?php




echo "Enter the amount in US dollars $: ";
$dollar = trim(fgets(STDIN));
$euro = $dollar * 0.73;
$british_pound = $dollar * 0.60;
$peso = $dollar * 13;

echo "Convert to: (E)uros, (P)esos, (B)ritish Pounds: ";
$convert_to = strtoupper(trim(fgets(STDIN)));

	if ($convert_to == 'E') {
		echo "\$$dollar is equivalent to $euro euros" . PHP_EOL;
	} elseif ($convert_to == 'P') {
		echo "\$$dollar is equivalent to $peso pesos" . PHP_EOL;
	} elseif ($convert_to == 'B') {
		echo "\$$dollar is equivalent to $british_pound british pounds" . PHP_EOL;
	}


