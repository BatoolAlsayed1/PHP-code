<?php
session_start();
$pid=$_POST['pid'];
$qty=$_POST['qty'];
for($i=0;$i<count($pid);++$i)
  $_SESSION['mycart'][$pid[$i]]=$qty[$i];
//This stores the product ID as the key and the quantity as the value in the mycart session array.
//On the first loop ($i = 0), $pid[0] and $qty[0] would give the first product ID and its corresponding quantity.
header('location:viewcart.php');
?>