<?php

//$physicists_array = ['Gordon Freeman', 'Samantha Carter', 'Sheldon Cooper', 'Quinn Mallory', 'Bruce Banner', 'Tony Stark'];

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicists_array = explode(', ', $physicists_string);



// //Create the $famous_fake_physicists string that lists the physicists and contains the "and" at the end.

// array_pop($physicists_array);
// array_push($physicists_array, 'and Tony Stark');

// $famous_fake_physicists = implode(', ', $physicists_array);

// echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";

//Turn your solution into a function named humanized_list(). You should be able to pass the $physicists_array as the only argument, and your function will return the result.

function humanized_list($array, $sort  = FALSE){
	
	if ($sort == TRUE) {
		sort($array);
	}
	//sort($array);
	
	$last = array_pop($array);
	array_push($array, "and $last");
	$string = implode(', ', $array);
	echo $string;
}



humanized_list($physicists_array, TRUE);





