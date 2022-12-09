<?php
require_once('includes/database.php');

$page_title = "NoteTote";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//retrieve cart content
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
}
//retrieve collection content
if (isset($_SESSION['collection'])) {
    $collection = $_SESSION['collection'];
}

//set login variables
  $login = '';
  $name = '';
  $role = 0;

//retrieve variables if logged in
  if (isset($_SESSION['login']) AND isset($_SESSION['name']) AND
    isset($_SESSION['role']))   {

$login = $_SESSION['login'];
    $name = $_SESSION['name'];
    $role = $_SESSION['role'];
  }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $page_title; ?></title>
    <link href="styles/styles.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<nav>
    <div class="nav-left">
        <img class="logo-image" src="./images/Logo.png">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="browse.php">Browse All</a>
        <a href="collection.php">My Collection</a>
    </div>
    <div class="nav-right">
        <?php
            if($_SESSION['login_status'] == 1){
                echo "<a href='login.php'>".$_SESSION['fname']."'s Account</a>";
            }else{
                echo "<a href='login.php'>Account</a>";
            }
        ?>
        <a href="cart.php">Shopping Cart</a>
    </div>
</nav>
