<?php
session_start();
set_time_limit(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logare";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Nu ma pot conecta: " . mysqli_connect_error());
}

?>