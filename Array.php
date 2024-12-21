<?php
//Everything About Array:
//Types of array:

//1. Indexed Array:
$fruits= array("Apple", "Banana", "Cherry");
//$fruits= ["Apple", "Banana", "Cherry"]
// or $fruits[]="Apple"; $fruits[]="Banana"; here the index will be auto increamented

echo $fruits[0] . "<br/>"; //output: Apple

//2. Associative Array:
$age= array("Ali"=>35, "Omar"=>37, "Ahmed"=>43);
// $fruits= ["Ali"=>35, "Omar"=>37, "Ahmed"=>43];

echo $age['Ali'] . "<br/>"; //output: 35

//Another Example
$students['20182211']="Faisal";
$students['20193211']="Amina";
$students['20172211']="Ali";
$students['20171111']="Noor";

$students2=array(
        '20182211'=>"Faisal",
        '20193211'=>"Amina",
        '20172211'=>"Ali",
        '20171111'=>"Noor"
);

foreach($students as $id=>$name){
    echo "$id = $name <br/> ";
}


//3. Multidimensional Arrays
$cars= array(
    array("Volvo", 22,18),
    array("BMW",15,13),
    array("Toyota",5,2)
);
//$cars= [ ["Volvo", 22,18], ["BMW",15,13], ["Toyota",5,2]];

echo $cars[0][0]. "<br/>"; //output:Volo

foreach($cars as $index=>$info){
    echo " $index: $info[0], $info[1], $info[2] <br/>";
}
//Nested arrays
$students3=array(
    '20182211'=>array("Faisal","CS",3.4),
    '20193211'=>array("Amina","CE",3.2),
    '20172211'=>array("Ali", "SE",2.7),
    '20171111'=>array("Noor","CS",3.75)
);

$students4=array(
    '20182211'=>array("name" => "Faisal","major"=>"CS","gpa"=>3.4),
    '20193211'=>array("name" => "Amina","major"=>"CE","gpa"=>3.2),
    '20172211'=>array("name" => "Ali", "major"=>"SE","gpa"=>2.7),
    '20171111'=>array("name" => "Noor","major"=>"CS","gpa"=>3.75)
);

echo $students3['20172211'][0]." GPA is ".$students3['20172211'][2]."<br />";
echo $students4['20172211']['name']." GPA is ".$students4['20172211']['gpa']."<br />";

foreach($students3 as $sid=>$stInfo){
  echo "$sid = ".$stInfo[2]."<br />";
  //echo "$sid = ".$students3[$sid][2]."<br />";
};

foreach($students4 as $sid=>$stinfo){
    echo "$sid=( ";
    foreach($stinfo as $k=>$v)
      echo "$k=$v ";

    echo " )<br />";
};
foreach($students4 as $sid=>$stinfo){
    echo "$sid: {$stinfo['name']}, {$stinfo['major']}, {$stinfo['gpa']} <br />";
};

?>
