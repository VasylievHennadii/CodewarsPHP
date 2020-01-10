<?php
// Debug the functions
// Should be easy, begin by looking at the code. Debug the code and the functions should work.

// There are three functions:
// *Multiplication (x)
// *Addition (+)
// *Reverse (!esreveR)

// first option
function multi($array) {
    return array_product($array);
}

function add($array) {
    return array_sum($array);
}

function reverse($string) {
    return strrev($string);
}


// second option
function multi($array) {
    $prod = 1;
  for($i = 0; $i < count($array); $i++) {
    $prod = $prod * $array[$i];
    }
    return $prod;
}

function add($array) {
    return array_sum($array);
}

function reverse($string) {
    return strrev($string);
}

?>