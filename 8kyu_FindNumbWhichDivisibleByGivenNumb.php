<?php
// Complete the function which takes two arguments and returns all numbers which are divisible by the given divisor. First argument is an array of numbers and the second is the divisor.

// Example
// divisible_by([1, 2, 3, 4, 5, 6], 2) == [2, 4, 6]


// first option
function divisibleBy($numbers, $divisor) {
    $total = [];
    foreach ($numbers as $number) {
      if ($number % $divisor == 0) {
        $total[] = $number;
      }
    }
    return $total;
}


// second option
function divisibleBy($numbers, $divisor) {
    $k=0;
    for ($i=0; $i<count($numbers); $i++) {
      if ($numbers[$i]%$divisor === 0) {
      $arr[$k] = $numbers[$i];
      $k++;
      }
    }
    return $arr;
}

?>