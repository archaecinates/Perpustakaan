<?php
session_start();

// Cek koneksi database
$conn = mysqli_connect("localhost", "root", "", "library");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Cek apakah data POST dikirim
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = md5($_POST['password']); // Menggunakan md5 untuk hashing, jika database masih pakai ini

    // Debug: Cek apakah username dan password sudah terisi
    echo "Username: " . $username . "<br>";
    echo "Password (hashed): " . $password . "<br>";

    // Query ke database
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);

        // Set session berdasarkan role user
        $_SESSION['role'] = $data['role'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['userID'] = $data['userID'];

        // Debug: Tampilkan role sebelum redirect
        echo "Role: " . $data['role'];
// 
        if ($data['role'] == 'admin') {
            header('location:admin/index.php');
        } else if ($data['role'] == 'petugas') {
            header('location:petugas/index.php');
        } else if ($data['role'] == 'pengguna') {
            header('location:pengguna/index.php');
        }
    } else {
        // Jika username atau password salah
        $message = 'Username atau password salah!!!';
        header('location:index.php?message=' . urlencode($message));
        exit();
    }
} else {
    // Jika username atau password tidak diisi
    $message = 'Harap masukkan username dan password!!!';
    header('location:index.php?message=' . urlencode($message));
    exit();
}
