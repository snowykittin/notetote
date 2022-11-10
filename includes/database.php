<!-- Establish connection to the MySql database -->

<?php
$host="localhost";
$login="phpuser";
$password="phpuser";
$database="notetote_db";

// connect to the mysql sever
$conn=@new mysqli($host,$login,$password,$database);

// check and handle errors
if ($conn->connect_errno){
    $errno=$conn->connect_errno;
    $errmsg=$conn->connect_error;
    die("Connection to database faild:($errno)$errmsg.");
}