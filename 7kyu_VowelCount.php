 <?php 
/*
Return the number (count) of vowels in the given string.

We will consider a, e, i, o, and u as vowels for this Kata.

The input string will only consist of lower case letters and/or spaces.
 */


// first option
 function getCount($str) {
    $vowelsCount = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];  
    foreach($vowels as $vowel) {
      $vowelsCount += substr_count($str, $vowel);
    }
    return $vowelsCount;
  }  


// second option
 function getCount($str) {
    return preg_match_all('/[aeiou]/i', $str);
  }
 
 ?>

