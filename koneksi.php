<?php
$host = 'localhost';
$user ='root';
$pass ='';
$db   ='icha'; //pastikan nama database sesui degan PHPMyAdmin

//Buat Koneksi
$conn = new mysqli($host, $user, $pass, $db);

// pemeriksaan koneksi
if ($conn->connect_error){
    die ("koneksi Gagal" . $conn->connect_error);
}

?>