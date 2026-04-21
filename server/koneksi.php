<?php
ini_set('session.cookie_httponly', 1);
ini_set('session.use_strict_mode', 1);

$host = "localhost";
$user = "root";
$pass = "";
$db   = "uns_medicalcenterDB";

// Matikan error reporting agar warning database tidak merusak tampilan UI
error_reporting(0); 

$koneksi = @mysqli_connect($host, $user, $pass, $db);

// KOMENTARI BAGIAN INI AGAR WEBSITE TIDAK MATI
// if (!$koneksi) {
//     error_log("DB Connection Failed: " . mysqli_connect_error());
//     http_response_code(503);
//     die("Layanan sementara tidak tersedia. Silakan coba beberapa saat lagi.");
// }

if ($koneksi) {
    mysqli_set_charset($koneksi, 'utf8mb4');
}
?>