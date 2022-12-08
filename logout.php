<?php

//start session if it has not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//clear all variables
$_SESSION = array();

//delete the session cookie
setcookie(session_name(), "", time()-3600);

//destroy the session
session_destroy();

//redirect to the index page
header("Location: login.php");