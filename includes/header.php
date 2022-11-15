<?php
require_once('includes/database.php');

$page_title = "NoteTote";
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
        <a href="#">About</a>
        <a href="browse.php">Browse All</a>
        <a href="#">My Collection</a>
    </div>
    <div class="nav-right">
        <a href="#">Shopping Cart</a>
        <a href="#">Account</a>
    </div>
</nav>
