<?php
// Take 2 strings s1 and s2 including only letters from ato z. Return a new sorted string, the longest possible, containing distinct letters,

// each taken only once - coming from s1 or s2.
// Examples:
// a = "xyaabbbccccdefww"
// b = "xxxxyyyyabklmopq"
// longest(a, b) -> "abcdefklmopqwxy"

// a = "abcdefghijklmnopqrstuvwxyz"
// longest(a, a) -> "abcdefghijklmnopqrstuvwxyz"


// first option
function longest($a, $b) {
    $chars = array_unique(str_split($a . $b));
    sort($chars);
    return implode('', $chars);
}


// second option
function longest($a, $b) {
    $a = str_split($a);
    $b = str_split($b);
    $arr = array_merge($a, $b);
    $arr = array_unique($arr);
    sort($arr);
    $str = implode($arr);
    return $str;
}


// third option
function longest($a, $b) {
    $combinedString = $a . $b;
    $arrayString = str_split($combinedString);
    $uniqueString = array_unique($arrayString);
    sort($uniqueString);
    return implode($uniqueString); 
}

?>