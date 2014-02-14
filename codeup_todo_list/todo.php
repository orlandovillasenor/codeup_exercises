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
    
    return $string;
}
        
function get_input($need_upper = FALSE){ 
    if ($need_upper == TRUE) {
      return strtoupper(trim(fgets(STDIN)));       
    } else {
        return trim(fgets(STDIN));
    }  
}

function open_file($filename){
    $handle = fopen($filename, "r");
    $contents = fread($handle, filesize($filename));
    $contents_array = explode("\n", $contents);
    return $contents_array;
    fclose($handle);
}

do {
    echo list_items($items);

    echo '(N)ew item, (R)emove item, (S)ort item, File (M)enu, (Q)uit : ';

    $input = get_input(TRUE);

    if ($input == 'N') {
        // Ask for entry
        echo "Add to (B)eginning or (E)nd of your list? ";
        $add_where = get_input(TRUE);
        echo 'Enter item: ';
        $add_item = get_input();
        
        if ($add_where == 'B') {
            array_unshift($items, $add_item);
        } else {
            array_push($items, $add_item);
        }
    
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key

        $key = get_input();
        // Remove from array
        unset($items[$key - 1]);
        // Takes $key back to [1] but sorts list alphabeticaly
        $items = array_values($items);
        
    } elseif ($input == 'S') {
        echo "(A)-Z or (Z)-A? ";
        $sort_order = get_input(TRUE);
        
        if ($sort_order == 'A') {
            sort($items);
        } elseif ($sort_order == 'Z'){
            rsort($items);
        }
    
    } elseif ($input == 'M') {
        echo "(O)pen File: ";
        get_input();
        echo "Enter file path to open: ";
        $file_path = get_input(FALSE);
        $new_items = open_file($file_path);
        
        foreach ($new_items as $value) {
            $first_item = array_shift($new_items);
            array_push($items, $first_item);
        }
    
    } elseif ($input == 'F') {
        array_shift($items);
    
    } elseif ($input == 'L') {
        array_pop($items);
    }

} while ($input != 'Q');

echo "Goodbye!\n";

exit(0);


        
        


    



