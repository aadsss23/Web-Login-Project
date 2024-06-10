<?php
// Sertakan file koneksi database
include 'koneksi.php';

// Tangkap data dari form login jika form telah disubmit
if (isset($_POST['login'])) {
    // Tangkap nilai dari input username dan password yang dikirimkan melalui POST
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lindungi dari serangan SQL Injection dengan menggunakan prepared statement
    $query = "SELECT * FROM users WHERE username=?";
    $stmt = $koneksi->prepare($query);

    // Bind parameter ke statement
    $stmt->bind_param("s", $username);

    // Eksekusi statement
    $stmt->execute();

    // Ambil hasil dari eksekusi statement
    $result = $stmt->get_result();

    // Periksa apakah data ditemukan berdasarkan username
    if ($result->num_rows > 0) {
        // Ambil data pengguna dari hasil query
        $user = $result->fetch_assoc();

        // Verifikasi password
        if ($password == $user['password']) {
            // Jika password benar, set session untuk menandai bahwa pengguna sudah login
            session_start();
            $_SESSION['username'] = $username;
            // Redirect ke halaman selamat datang setelah login berhasil
            header("Location: welcome.php");
            exit; // Penting untuk menghentikan eksekusi setelah melakukan redirect
        } else {
            // Jika password salah, kirim error ke halaman login (index.php)
            header("Location: index.php?error=password");
            exit; // Penting untuk menghentikan eksekusi setelah melakukan redirect
        }
    } else {
        // Jika username tidak ditemukan, kirim error ke halaman login (index.php)
        header("Location: index.php?error=username");
        exit; // Penting untuk menghentikan eksekusi setelah melakukan redirect
    }

    // Tutup statement
    $stmt->close();
}

// Tutup koneksi database
$koneksi->close();
