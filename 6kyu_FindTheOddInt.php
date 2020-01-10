<?php
// Given an array, find the integer that appears an odd number of times.

// There will always be only one integer that appears an odd number of times.


// first option
function findIt(array $seq) : int
{
    $nums = array_count_values($seq);
    foreach ($nums as $key => $val) {
        if ($val % 2) {
            return $key;
        }
    }
}


// second option
function findIt(array $arr) : int
{
   $count = 0; 
    for ($i = 0;  $i < count($arr); $i++) {           
        for ($j = 0; 
             $j < count($arr); $j++) 
        { 
            if ($arr[$i] == $arr[$j]) { 
                $count++;
            } 
        } 
        if ($count % 2 != 0) { 
            return $arr[$i];
        } 
    } 
    return -1; 
}

?>