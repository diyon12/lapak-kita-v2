<?php
/**
 * Koneksi database menggunakan MySQLi (gaya berorientasi objek).
 * Kredensial dibaca dari config.php yang TIDAK diunggah ke GitHub.
 */
$configFile = __DIR__ . '/../config.php';
if (!file_exists($configFile)) {
    http_response_code(500);
    exit('File config.php belum ada. Salin config.example.php menjadi config.php, lalu isi kredensial database.');
}
require_once $configFile;

// Lempar exception setiap kali query gagal agar kesalahan tidak terlewat.
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $conn->set_charset('utf8mb4');
    // Samakan zona waktu database dengan aplikasi (WIB).
    $conn->query("SET time_zone = '+07:00'");
} catch (mysqli_sql_exception $e) {
    http_response_code(500);
    exit('Koneksi ke database gagal. Periksa pengaturan di config.php.');
}
