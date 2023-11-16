<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "aplikasi_absen";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database_name", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Terhubung berhasil";
} catch(PDOException $e) {
  echo "Gagal terhubung: " . $e->getMessage();
}
?>