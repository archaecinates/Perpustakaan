<?php
include 'koneksi.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $namalengkap = mysqli_real_escape_string($koneksi, $_POST['namalengkap']);
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
    $role = mysqli_real_escape_string($koneksi, $_POST['role']);

    // Enkripsi password sebelum disimpan
    $hashed_password = md5($password);

    // Cek apakah email sudah digunakan
    $cek_email = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($koneksi, $cek_email);
    
    if (mysqli_num_rows($result) > 0) {
        header("Location: register.php?message=Email sudah terdaftar!");
        exit();
    }

    // Query untuk insert data user baru
    $sql = "INSERT INTO user (namalengkap, username, email, password, alamat, role) VALUES ('$namalengkap', '$username', '$email', '$hashed_password', '$alamat', '$role')";

    if (mysqli_query($koneksi, $sql)) {
        header("Location: login.php?message=Registrasi berhasil, silakan login.");
    } else {
        header("Location: register.php?message=Terjadi kesalahan, coba lagi.");
    }
}
?>
