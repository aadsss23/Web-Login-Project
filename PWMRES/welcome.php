<?php
// Mulai session
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika belum login, redirect ke halaman login
    header("Location: index.php");
    exit(); // Penting untuk menghentikan eksekusi script setelah redirect
}

// Ambil username dari session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link rel="stylesheet" href="style.css"> <!-- Menghubungkan dengan file styles.css -->
</head>

<body class="body-container">
    <h2 class="page-title">Hallo, <?php echo $username; ?>!</h2>
    <p class="page-description">Selamat Datang di Halaman Utama</p>
    <a href="fu_logout.php" class="logout-button">Logout</a>
</body>

</html>