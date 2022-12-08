<?php
//if no session, restart
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
} else {
    $cart = array();
}

//if album id cannot be found, yeet the script
if (!filter_has_var(INPUT_GET, 'id')) {
    $error = "Album id not found. Operation cannot proceed.<br><br>";
    header("Location: error.php?m=$error");
    die();
}

//retrieve book id and make sure it is a numeric value.
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if (!is_numeric($id)) {
    $error = "Invalid album id. Operation cannot proceed.<br><br>";
    header("Location: error.php?m=$error");
    die();
}

//If the book exists, increase quantity. If not, add it and set quantity to 1.
if (array_key_exists($id, $cart)) {
    $cart[$id] = $cart[$id] + 1;
} else {
    $cart[$id] = 1;
}

//update the session variable
$_SESSION['cart'] = $cart;

//redirect to the cart page.
header('Location: cart.php');