<?php
$host = "localhost"; // Ganti dengan nama host database Anda
$username = "root"; // Ganti dengan nama pengguna database Anda
$password = ""; // Ganti dengan kata sandi database Anda
$database = "vigenere_cipher"; // Ganti dengan nama database yang ingin Anda hubungkan

// Membuat koneksi ke database
$conn = mysqli_connect($host, $username, $password, $database);

// Memeriksa apakah koneksi berhasil
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Sekarang variabel $conn berisi koneksi yang berhasil ke database MySQL.
// Anda dapat menggunakan $conn untuk menjalankan kueri SQL atau melakukan operasi database lainnya.
?>
