<?php
//1. Diameters: / { |
//$pattern= '/pattern/','{pattern}','|pattern|'

//2.functions: 
//preg_match($pattern, $string, $matches);
//FOUND=1, NOTFOUND=0
//preg_match_all($pattern, $string, $matches);
//FOUND=NumOfMatches NOTFOUND=0

// implode(',', $matches[0]); to print matches between them , 

//3. Character Classes []
// [abc] match any single character in the set
// [^abc] match any single character not in the set
// [a-z] match any single character in the range

//4. Metacharacters
// . matches any character except newline 
// \d matches any digit 
// \w matches any word character [a-z, A-Z,0-9,_]
// \s matches any whitespace character

// All above match single, we still did not introduce Quantifiers 

//5. Quantifiers
// * Matches 0 or more 
// + Matches 1 or more
// ? Matches 0 or 1 
// {n} Matches exactly n occurance
// {n,} Matches n or more occurance 
// {n,m} Matches between n and m occurance

// /\d{2}/==/[\d]{2}/ 66 88 90 <= match two digits(ورا بعض)

//6. Anchors
// ^ matches the start of a string
// $ matches the end of a string

//7. Modifiers
//i case insensitive
//m multi line mode

//8. capturing Group
// use () to craete capturing group
?>