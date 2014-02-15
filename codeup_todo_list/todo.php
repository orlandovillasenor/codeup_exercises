<?php


$items = array();

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

function save_file($filename, $array){
    $handle = fopen($filename, 'w');
    $string = implode("\n", $array);
    return fwrite($handle, $string);
    fclose($handle);
}


do {
    echo list_items($items);

    echo '(N)ew item, (R)emove item, (S)ort item, File (M)enu, (Q)uit : ';

    $input = get_input(TRUE);

    if ($input == 'N') {
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
        $key = get_input();
        unset($items[$key - 1]);
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
        echo "(O)pen File, (S)ave File : ";
        $file_menu = get_input(TRUE);
        
        if ($file_menu == 'O') {
            echo "Enter file path to open: ";
            $file_path = get_input();
            $new_items = open_file($file_path);
            foreach ($new_items as $value) {
                $first_item = array_shift($new_items);
                array_push($items, $first_item);
            }
        
        } elseif ($file_menu == 'S') {
            echo "Enter file path to save: ";
            $file_path = get_input();
            //save_file($file_path, $items);

            if (file_exists($file_path)) {
                echo "The file: $file_path already exists. " . PHP_EOL . "Overwrite file? (Y)es or (N)o: ";
                $overwrite = get_input(TRUE);
                if ($overwrite == 'Y') {
                    save_file($file_path, $items);
                    echo "File: {$file_path} was saved" . PHP_EOL;
                } elseif ($overwrite == 'N'){
                    
                }
            } else {
                save_file($file_path, $items);
                echo "File: {$file_path} was saved" . PHP_EOL;
            }
        }
            
    } elseif ($input == 'F') {
        array_shift($items);
    
    } elseif ($input == 'L') {
        array_pop($items);
    }

} while ($input != 'Q');

echo "Goodbye!\n";

exit(0);
    
            



        
        


    



