<?php
$text="Hello, World";
$pattern= '/Hello/';
if (preg_match($pattern, $text))
    echo "1a. Match Found <br/>";
preg_match_all($pattern, $text, $matches);
echo "1b. Match: " . implode(',', $matches[0]). "<br/>";

echo "----------------------------------- <br/>";

$text1= "Hello world";
$pattern1= '/[aeiouAEIOU]/';
if (preg_match($pattern1, $text1, $match))
    echo "2a. Match: " . $match[0]. "<br/>";
preg_match_all($pattern1, $text1, $matches);
echo "2b. Match: " . implode(',', $matches[0]). "<br/>";

echo "----------------------------------- <br/>";

$text2= "Hello world";
$pattern2= '/[^aeiou]/';
if (preg_match($pattern2, $text2, $match))
    echo "3a. Match: " . $match[0]. "<br/>";
preg_match_all($pattern2, $text2, $matches);
echo "ab. Match: " . implode(',', $matches[0]). "<br/>";

echo "----------------------------------- <br/>";

$text3= "Hello world";
$pattern3= '/[a-mA-M]/';
if (preg_match($pattern3, $text3, $match))
    echo "4a. Match: " . $match[0]. "<br/>";
preg_match_all($pattern3, $text3, $matches);
echo "4b. Match: " . implode(',', $matches[0]). "<br/>";

echo "----------------------------------- <br/>";

$text4= "hello help hull h&ll";
$pattern4= '/h.l/';
if (preg_match($pattern4, $text4, $match))
    echo "5a. Match: " . $match[0]. "<br/>";
preg_match_all($pattern4, $text4, $matches);
echo "5b. Match: " . implode(',', $matches[0]). "<br/>";

echo "----------------------------------- <br/>";

$text5= "There are 123 apples and 456 oranges";
$pattern5= '/\d/';
if (preg_match($pattern5, $text5, $match))
    echo "6a. Match: " . $match[0]. "<br/>";
preg_match_all($pattern5, $text5, $matches);
echo "6b. Match: " . implode(',', $matches[0]). "<br/>";

echo "----------------------------------- <br/>";

$text6= "Hello_World 123!";
$pattern6= '/\w/';
if (preg_match($pattern6, $text6, $match))
    echo "7a. Match: " . $match[0]. "<br/>";
preg_match_all($pattern6, $text6, $matches);
echo "7b. Match: " . implode(',', $matches[0]). "<br/>";

echo "----------------------------------- <br/>";

$text7= "Hello World\tTab\nNewline!";
$pattern7= '/\s/';
    echo "Text: ". $text7 . "<br/>";
if (preg_match($pattern7, $text7, $match))
    echo "8a. Match: " . $match[0]. "<br/>";
preg_match_all($pattern7, $text7, $matches);
echo "8b. Match: " . count($matches[0]). "<br/>";

echo "----------------------------------- <br/>";

$text8= "ac abc abbc abbbc";
$pattern8= '/ab*c/'; // 0 or more
if (preg_match($pattern8, $text8, $match))
    echo "9a. Match: " . $match[0]. "<br/>";
preg_match_all($pattern8, $text8, $matches);
echo "9b. Match: " . implode(',', $matches[0]). "<br/>";

echo "----------------------------------- <br/>";

$text8= "ac abc abbc abbbc";
$pattern8= '/ab+c/'; // one or more
if (preg_match($pattern8, $text8, $match))
    echo "10a. Match: " . $match[0]. "<br/>";
preg_match_all($pattern8, $text8, $matches);
echo "10b. Match: " . implode(',', $matches[0]). "<br/>";

echo "----------------------------------- <br/>";

$text8= "ac abc abbc abbbc";
$pattern8= '/ab?c/'; // ) or one
if (preg_match($pattern8, $text8, $match))
    echo "11a. Match: " . $match[0]. "<br/>";
preg_match_all($pattern8, $text8, $matches);
echo "11b. Match: " . implode(',', $matches[0]). "<br/>";

echo "----------------------------------- <br/>";

$text10= "a aa aaa aaaa";
$pattern10= '/a{3}/'; // 3 occurance exactly = aaa and aaa from aaaa
if (preg_match($pattern10, $text10, $match))
    echo "12a. Match: " . $match[0]. "<br/>";
preg_match_all($pattern10, $text10, $matches);
echo "12b. Match: " . implode(',', $matches[0]). "<br/>";

echo "----------------------------------- <br/>";

$text11= "a aa aaa aaaa";
$pattern11= '/a{2,}/'; // 2 or more
if (preg_match($pattern11, $text11, $match))
    echo "13a. Match: " . $match[0]. "<br/>";
preg_match_all($pattern11, $text11, $matches);
echo "13b. Match: " . implode(',', $matches[0]). "<br/>";

echo "----------------------------------- <br/>";

$text9= "a aa aaa aaaa";
$pattern9= '/a{2,3}/'; // between 2 and 3
if (preg_match($pattern9, $text9, $match))
    echo "14a. Match: " . $match[0]. "<br/>";
preg_match_all($pattern9, $text9, $matches);
echo "14b. Match: " . implode(',', $matches[0]). "<br/>";

echo "----------------------------------- <br/>";

$text12= "a aa aaa aaaa aaaaa aaaaaa";
$pattern12= '/a{2,6}/'; // between 2 and 6
if (preg_match($pattern12, $text12, $match))
    echo "15a. Match: " . $match[0]. "<br/>";
preg_match_all($pattern12, $text12, $matches);
echo "15b. Match: " . implode(',', $matches[0]). "<br/>";
echo " Count of matches: ". count($matches[0]) . "<br/>";

echo "----------------------------------- <br/>";

$text13= "a aa aaa aaaa aaaaa aaaaaa";
$pattern13= '/a{2,5}/'; // between 2 and 5
if (preg_match($pattern13, $text13, $match))
    echo "16a. Match: " . $match[0]. "<br/>";
preg_match_all($pattern13, $text13, $matches);
echo "16b. Match: " . implode(',', $matches[0]). "<br/>";
echo " Count of matches: ". count($matches[0]) . "<br/>";

echo "----------------------------------- <br/>";

$text14= "Hello World\nHello Universe\nHello Again";
$pattern14= '/^Hello/m';  // multi line
if (preg_match($pattern14, $text14, $match))
    echo "17a. Match: " . $match[0]. "<br/>";
preg_match_all($pattern14, $text14, $matches);
echo "17b. Match: " . implode(',', $matches[0]). "<br/>";

echo "----------------------------------- <br/>";

$text15= "Hello World\nHello Universe\nHello Again";
$pattern15= '/World$/'; 
if (preg_match($pattern15, $text15, $match))
    echo "18a. Match: " . $match[0]. "<br/>";
preg_match_all($pattern15, $text15, $matches);
echo "18b. Match: " . implode(',', $matches[0]). "<br/>";

echo "----------------------------------- <br/>";

$text16= "Hello World\nHello Universe\nHello Again";
$pattern16= '/World$/m'; 
if (preg_match($pattern16, $text16, $match))
    echo "19a. Match: " . $match[0]. "<br/>";
preg_match_all($pattern16, $text16, $matches);
echo "19b. Match: " . implode(',', $matches[0]). "<br/>";

echo "----------------------------------- <br/>";

$text17= "Hello World\nHello Universe\nHello Again";
$pattern17= '/^Hello.*Universe$/m'; 
if (preg_match($pattern17, $text17, $match))
    echo "20a. Match: " . $match[0]. "<br/>";
preg_match_all($pattern17, $text17, $matches);
echo "20b. Match: " . implode(',', $matches[0]). "<br/>";

echo "----------------------------------- <br/>";

$text18= "John Doe";
$pattern18= '/(\w+)\s(\w+)/'; 
if (preg_match($pattern18, $text18, $match))
    echo "21a. Match: " . $match[0]. "<br/>";
preg_match_all($pattern18, $text18, $matches);
echo "21b. Match: " . implode(',', $matches[0]). "<br/>";
echo "21b. First capturing Group: " . implode(',', $matches[1]). "<br/>";
echo "21b. Second capturing group: " . implode(',', $matches[2]). "<br/>";
?>
