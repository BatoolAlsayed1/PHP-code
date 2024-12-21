<?php

/*
Summary of RE Defined Characters

^   START BY
$   END BY
?   Repeat 0 or 1
i   at the end of expression, it means case insensitive
+   Repeat 1 or more
*   Repeat 0 or more
{n} Repeat n times
{n,m} Repeat min n and max m
{n,}  Repeat n or more
[]  Select one character from the list
[a-z] list with range use -
[^] Negated List
( ) Grouping
|   OR
.   match any character except new line
\   Escape Character

Additional Characters:
\d  Match digits
\D  Match Non Digits
\w  Match Letters, digits or undescore
\W  Match anything not (letters, digits or underscore)
\s  Match whitespace character (\n, \t etc)
\S  Match non whitespace character

Validation Function: preg_match($re, $string) return true or false
*/

  //Example 1: Write an expression to validate Person first name
  //Condition Assumption: Min 3 letters, Max 12 letters, no space is allowed, no number is allowed
  echo "<h3>Example 1: First Name Validation</h3>";
  $nameEx="/^[a-z]{3,12}$/i";
  $names=array("Faisal", "Abdul Elah", "yasMeen", "7amad");
  foreach($names as $n)
    if (preg_match($nameEx,$n))
      echo "$n is valid <br />";
    else {
      echo "$n is invalid <br />";
    }
    echo "-------------------- <br/>";  
    //Another way:
    for($i=0; $i<count($names); $i++){
        if (preg_match($nameEx,$names[$i]))
        echo $names[$i]. " is valid <br />";
        else {
        echo $names[$i] ." is invalid <br />";
        }
    }

  //Example 2: Write an expression to validate mobile number for Bahrain
  /*Condition Assumption:
    - (optional country code) followed by 8 digits
    - Country code might be +973 or 00973
    - 8 digits should start by 3 or 6 for example
  */
  echo "<h3>Example 2: Mobile Validation</h3>";
  $mobileEx="/^((\+|00)973\s?)?[36][0-9]{7}$/";
  $mobiles=array("33224433", "+973 33224433", "40330022", "+97363228811", "0097333224455");
  foreach($mobiles as $m)
    if (preg_match($mobileEx,$m))
      echo "$m is valid <br />";
    else {
      echo "$m is invalid <br />";
    }

?>
