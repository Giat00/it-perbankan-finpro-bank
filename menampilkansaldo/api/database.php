<?php
$user_id = 1; 
$query = "SELECT saldo FROM users WHERE id = $user_id";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $saldo = $row["saldo"];
    echo "Saldo Anda: $saldo"; 
} else {
    echo "Pengguna tidak ditemukan";
}


$conn->close();
?>
