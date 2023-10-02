<?php
// Fungsi untuk mengenkripsi teks menggunakan Vigenere Cipher
function vigenereEncrypt($text, $key) {
    $text = strtoupper($text);
    $key = strtoupper($key);
    $result = "";
    $keyLength = strlen($key);
    $keyIndex = 0;

    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        if (ctype_alpha($char)) {
            $textChar = ord($char) - 65;
            $keyChar = ord($key[$keyIndex % $keyLength]) - 65;
            $encryptedChar = ($textChar + $keyChar) % 26 + 65;
            $result .= chr($encryptedChar);
            $keyIndex++;
        } else {
            $result .= $char;
        }
    }

    return $result;
}

// Konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$database = "vigenere_cipher";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi database
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = vigenereEncrypt($_POST["password"], "selasa"); // Ubah menjadi kunci yang sama saat pendaftaran

    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    if ($result->num_rows === 1) {
        // Login berhasil, arahkan ke halaman beranda
        header("Location: home.php");
        exit();
    } else {
        echo "Login gagal. Silakan coba lagi.";
    }
}

// Menutup koneksi
$conn->close();
?>
