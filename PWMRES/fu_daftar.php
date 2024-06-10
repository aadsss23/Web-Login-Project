<?php
// Sertakan file koneksi database
include 'koneksi.php';

// Tangkap data dari form daftar jika form telah disubmit
if (isset($_POST['daftar'])) {
    // Tangkap nilai dari input username, email, dan password yang dikirimkan melalui POST
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Lindungi dari serangan SQL Injection dengan menggunakan prepared statement
    $query = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";

    $stmt = $koneksi->prepare($query);

    // Bind parameter ke statement
    $stmt->bind_param("sss", $username, $email, $password);

    // Eksekusi statement
    if ($stmt->execute()) {
        // Jika pendaftaran berhasil, redirect ke halaman index.php
        header("Location: index.php");
        exit; // Penting untuk menghentikan eksekusi setelah melakukan redirect
    } else {
        // Jika terjadi kesalahan saat eksekusi query
        echo "Terjadi kesalahan saat mendaftar. Silakan coba lagi.";
    }

    // Tutup statement
    $stmt->close();
}

// Tutup koneksi database
$koneksi->close();
