<?php
// Your task is to create a function that does four basic mathematical operations.

// The function should take three arguments - operation(string/char), value1(number), value2(number).
// The function should return result of numbers after applying the chosen operation.

// Examples
// basicOp('+', 4, 7)         // Output: 11
// basicOp('-', 15, 18)       // Output: -3
// basicOp('*', 5, 5)         // Output: 25
// basicOp('/', 49, 7)        // Output: 7


// first option
function basicOp($op, $val1, $val2) {
   switch ($op) {
    case '+':
      return $val1 + $val2;
      break;
    case '-':
      return $val1 - $val2;
      break;
    case '*':
      return $val1 * $val2;
      break;
    case '/':
      return (($val1 == 0 || $val2 == 0) ? 'This operation is impossible' : ($val1 / $val2));
      break;
  }
}


// second option
function basicOp($op, $val1, $val2) {
    $out = 0;
    if ($op === "+") {
        return $val1 + $val2;
    }
    elseif ($op === "-") {
        return $val1 - $val2;
    }
    elseif ($op === '*') {
        return $val1 * $val2;
    }
    $out = $val1 / $val2;
    return $out;
}

?>