<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "bsi_login";

$connect = mysqli_connect($servername, $username, $password, $database);

if ($connect) {
    session_start();
    // echo "Connection Successful" ;
} else {
    echo "Connection Failed " . mysqli_connect_error();
}
