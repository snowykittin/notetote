<?php
include ('includes/header.php');

//grab variables
$userID = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT)));
$first_name =  $conn->real_escape_string(trim(filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING)));
$last_name =  $conn->real_escape_string(trim(filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING)));
$email =  $conn->real_escape_string(trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING)));
$password =  $conn->real_escape_string(trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING)));

//set session variables
$_SESSION['login'] = $email;
$_SESSION['name'] = $first_name . " " . $last_name;

//insert statement
$sql = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', email = '$email', password='$password' WHERE users . userID = '$userID'";

$query = @$conn -> query($sql);

//Handle selection errors
if (!$query) {
    $errno = $conn->errno;
    $error = $conn->error;
    $error = "Insertion failed with: ($errno) $error.";
    $conn->close();
    header("Location: error.php?m=$error");
    die();
}


//redirect back to the account-details page
header("Location: account-details.php");