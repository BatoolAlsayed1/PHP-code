<?php
session_start();
$pid=$_POST['pid'];
$qty=$_POST['qty'];
$_SESSION['mycart'][$pid]=$qty; // add item to existing session called mycart
header('location:productsArray.php');
?>