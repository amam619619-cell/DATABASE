<?php
// connection codes

$host ="localhost";
$user ="root";
$password ="";
$database ="sample";

// method for connection
$conn =mysqli_connect($host, $user, $password, $database);

//test connection
if(!$conn){
    die(mysqli_connect_error());
}