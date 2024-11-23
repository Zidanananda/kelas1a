<?php
// Koneksi ke database
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'login_system';

$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mulai sesi
session_start();

// Proses login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $conn->real_escape_string($_POST['username']);
    $password = md5($_POST['password']); // Enkripsi password

    // Cek data di database
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login berhasil
        $_SESSION['username'] = $username; // Simpan username di session
        header("Location: dashboard.php"); // Redirect ke halaman dashboard
        exit;
    } else {
        // Login gagal
        echo "<h2 style='color: red; text-align: center;'>Login Gagal! Username atau Password salah.</h2> ";
        
    }
}

$conn->close();
?>
