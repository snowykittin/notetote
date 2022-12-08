<?php
//if no session, restart
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
}

//set the collection variable to be the current cart
if (isset($_SESSION['collection'])) {
    $collection = $_SESSION['collection'] + $cart;
} else {
    $collection = $cart;
}

//update the session variable
$_SESSION['collection'] = $collection;
$_SESSION['cart'] = array();

//redirect to the collection page.
header('Location: collection.php');