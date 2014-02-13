<?php

// Create array to hold list of todo items
$items = array();

// List array items formatted for CLI
function list_items($list)
{
    // Return string of list items separated by newlines.
    $string = '';
    foreach ($list as $key => $item) {
        $key++;
        $string .= "[$key] ". $item . PHP_EOL;
        
    }

    // Should be listed [KEY] Value like this:
    return $string;
    // [1] TODO item 1
    // [2] TODO item 2 - blah
    // DO NOT USE ECHO, USE RETURN
}

//echo list_items($items);

//create function called sort_menu
//function sort_menu(){

//}




// Get STDIN, strip whitespace and newlines,
// and convert to uppercase if $upper is true
function get_input($upper = FALSE) 
{
    if ($upper == TRUE) {
      return strtoupper(trim(fgets(STDIN)));       
    } else {
        return trim(fgets(STDIN));
    }
    
}




// The loop!
do {
    

    // Echo the list produced by the function
    echo list_items($items);

    // Show the menu options
    echo '(N)ew item, (R)emove item, (S)ort item, (Q)uit : ';


    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input(TRUE);

    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = get_input();
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key

        $key = get_input();
        // Remove from array
        unset($items[$key - 1]);
        // Takes $key back to [1] but sorts list alphabeticaly
        sort($items);
    } elseif ($input == 'S') {
        echo "(A)-Z or (Z)-A? ";
        $sort_order = strtoupper(trim(fgets(STDIN)));
        if ($sort_order == 'A') {
            sort($items);
        } elseif ($sort_order == 'Z'){
            rsort($items);
        }
        
        
    }


// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);