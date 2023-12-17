<?php
include "koneksi.php"; // Sertakan file koneksi.php.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id']; // Assuming 'id' is present in your form

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = ($_POST['password']);

    // Query untuk menambahkan pengguna ke dalam tabel
    $query = "INSERT INTO user (id, nama, username, password) VALUES ('$id', '$nama', '$username', '$password')";

    if (mysqli_query($koneksi, $query)) {
        echo "Pengguna berhasil ditambahkan. Silahkan menuju <a href='form_login.php'>Halaman Utama</a>";
    } else {
        echo "Gagal menambahkan pengguna: " . mysqli_error($koneksi);
    }
}
?>
