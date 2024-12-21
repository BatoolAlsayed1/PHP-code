<?php
//1. Email Validation
$email="user@example.com";
$pattern= '/^[\w\-\.]+@[\w\-\.]+\.\w{2,}$/';
if (preg_match($pattern, $email))
    echo "Vaild email address <br/>";
else echo "Invalid email address <br/>";

echo "------------------------------------<br/>";
//2. Phone Numbers
$phone=[
    "(123) 456-7890",
    "123-456-7890",
    "(800) 555-1234",
    "555-1234",
    "1234567890"
];
$pattern1= '/^(\d{3}\s\d{3}-\d{4)$/';
foreach ($phone as $index=> $number){
    if (preg_match($pattern1, $number))
        echo $number . " is valid.<br/>";
    else echo $number . " is invalid.<br/>";
}

echo "------------------------------------<br/>";
//3. Extract URL from Text
$text= "Visit https://www.example.com or http://subdomain.example.org. For more info, go to https://info.example.net/page?id=123";
$pattern2='/https?:\/\/[\w\-\.]+\.\w+(?:\/[\w\-\.\?=&]*)?/';
preg_match_all($pattern2, $text, $matches);
echo "Foumd URL: <br/>";
print_r($matches[0]);
echo "<br/>";
//print_r($matches[1]); == null because it it non capturing group.

echo "------------------------------------<br/>";
//4. Validate Password
$passwords=[
    "Weak123!",
    "StrongP@ssw0rd",
    "NoSpeacialChar123",
    "short1!",
    "ALLUPPERCASEno123!",
    "NoNumbers!!!"
];
$pattern3= '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*]).{8,}$/';
foreach ($passwords as $pass){
    if (preg_match($pattern3, $pass))
        echo $pass . " is valid.<br/>";
    else echo $pass. " is invalid.<br/>";
}



?>
