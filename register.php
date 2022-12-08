<?php
//include the database.php
require_once('includes/database.php');

//retrieve user inputs from the form
if(!filter_has_var(INPUT_POST, 'firstname') ||
    !filter_has_var(INPUT_POST, 'lastname') ||
    !filter_has_var(INPUT_POST, 'email') ||
    !filter_has_var(INPUT_POST, 'password')) {
    $error = "The service is currently unavailable. Please try again later.";
    header("Location: error.php?m=$error");
    die();
}

$firstname = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING)));
$lastname = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING)));
$email = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING)));
$password = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING)));

//default role to user
$role = 2;

//insert statement. The id field is an auto field.
$sql = "INSERT INTO users VALUES (NULL, '$firstname', '$lastname', '$email', '$password', '$role')";

//execute the insert query
$query = @$conn->query($sql);

//Handle selection errors
if (!$query) {
    $errno = $conn->errno;
    $error = $conn->error;
    $error = "Insertion failed with: ($errno) $error.";
    $conn->close();
    header("Location: error.php?m=$error");
    die();
}


$conn->close();

//start session if it has not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//create session variables
$_SESSION['login'] = $email;
$_SESSION['name'] = "$firstname $lastname";
$_SESSION['role'] = 2;

//set to being logged in
$_SESSION['login_status'] = 1;

//redirect the user to the login page to show they're now signed in
header("Location: login.php");
