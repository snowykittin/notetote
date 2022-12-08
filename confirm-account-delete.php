<?php
include ('includes/header.php');

//retrieve user id from a query string
if (!filter_has_var(INPUT_GET, 'id')){
    echo "Error: user id was not found.";
    require_once('includes/footer.php');
    exit();
}
$userID = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

//delete statement
$sql = "DELETE FROM users WHERE userID = '$userID'";
//execute query
$query = $conn -> query($sql);

//Handle selection errors
if (!$query) {
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "Selection failed with: ($errno) $errmsg<br/>\n";
    $conn->close();
    //include the footer
    require_once ('includes/footer.php');
    exit;
}

//clear all variables
$_SESSION = array();

//delete the session cookie
setcookie(session_name(), "", time()-3600);

//destroy the session
session_destroy();


//redirect back to the login page
header("Location: login.php");