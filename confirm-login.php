<?php

//include code from database.php
require_once('includes/database.php');

//start session if it has not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//create variable login status.
$_SESSION['login_status'] = 2;
$email = $password = "";

//retrieve user email and password from the form in the login form
if (filter_has_var(INPUT_POST, 'email') || filter_has_var(INPUT_POST, 'password')) {
    $email = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING)));
    $password = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING)));
}

//validate user email and password against a record in the users table in the database. If valid, create session variables.
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

$query = @$conn -> query($sql);
if ($query -> num_rows) {
    //It is a valid user. Need to store the user in session variables.
    $row = $query -> fetch_assoc();
    $_SESSION['login'] = $email;
    $_SESSION['role'] = $row['permission_level'];
    $_SESSION['name'] = $row['first_name'] . " " . $row['last_name'];
    $_SESSION['fname'] = $row['first_name'];
    $_SESSION['login_status'] = 1;
}

//close the connection
$conn->close();

//redirect to the login page
header("Location: login.php");