<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "Traffic";

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

if (!$conn){
    echo "Connection Failed!";
}

?>