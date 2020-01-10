<?php
// Task:
// Given an array of numbers (a list in groovy), determine whether the sum of all of the numbers is odd or even.

// Give your answer in string format as 'odd' or 'even'.

// If the input array is empty consider it as: [0] (array with a zero).

// Example:
// odd_or_even([0]); // => 'even'
// odd_or_even([2, 5, 34, 6]); // => 'odd'
// odd_or_even([0, -1, -5]); // => 'even'
// Have fun!


// first option
function odd_or_even(array $a): string {
    return array_sum($a) % 2 ? 'odd' : 'even';
}


// second option
function odd_or_even(array $a): string {
    $k=0;
      for ($i=0; $i<count($a); $i++){
        if ($a[$i]%2!==0){
        $k=$k+1;
        }
      }  
    return ($k%2==0) ? 'even' : 'odd';
}

?>