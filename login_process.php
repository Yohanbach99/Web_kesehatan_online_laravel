<?php
session_start(); // Mulai sesi

$host = "localhost";
$username = "root";
$password = "";
$database = "db_kes";

// Buat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Periksa koneksi database
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Tangkap data dari form login jika ada
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $passwordInput = $_POST['password'];

    // Periksa kecocokan email dan password dengan prepared statement
    $query = "SELECT * FROM User WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $email, $passwordInput);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $userRole = $row['role'];

        if ($userRole == 'user') {
            // Jika rolenya adalah 'user'
            $_SESSION['user_id'] = $row['id'];
            header("Location: user/index.php");
        } elseif ($userRole == 'admin') {
            // Jika rolenya adalah 'admin'
            $_SESSION['admin_id'] = $row['id'];
            header("Location: admin/index.php");
        } else {
            echo "Login gagal. Role tidak valid.";
        }
    } else {
        echo "Login gagal. Email atau password salah.";
    }
} else {
    echo "Email atau password tidak ditemukan.";
}

$stmt->close();
$conn->close();
?>