<?php
$host = "localhost"; 
$username = "username"; 
$password = ""; 
$database = "saldo"; 


$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
