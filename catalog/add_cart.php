<?php
session_start();
if(!isset($_GET['id'])){
    header('location: index.php');
}

$get = $_GET['id'];
$_SESSION['cart'][$get] = $_SESSION['cart'][$get] + 1;
$serialize = serialize($_SESSION['cart']);
setcookie('cart', $serialize, time() + 3600);
header('location: cart.php');