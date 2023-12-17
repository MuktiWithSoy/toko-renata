<?php
$servername = "localhost"; // Ganti dengan nama atau alamat server MySQL Anda.
$username = "root"; // Ganti dengan nama pengguna MySQL Anda.
$password = ""; // Ganti dengan kata sandi MySQL Anda.
$database = "pemroweb"; // Nama database yang ingin Anda hubungkan.

// Membuat koneksi
$koneksi = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
} else {
    echo "*Koneksi sukses ke database $database.";
    // Di sini Anda dapat melakukan operasi database lainnya.
}
