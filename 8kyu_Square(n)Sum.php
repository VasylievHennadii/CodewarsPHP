<?php
// Complete the square sum function so that it squares each number passed into it and then sums the results together.

// For example, for [1, 2, 2] it should return 9 because 1^2 + 2^2 + 2^2 = 9.


function square_sum($numbers) : int {
    $sum = 0;
    for($i=0; $i < count($numbers); $i++) {
    $x = $numbers[$i]**2;
    $sum = $sum + $x;
    }
    return $sum;
}

?>