<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "dbtoko";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
$sql="insert into produk (nama,deskripsi,harga) value ('". $_POST['nama'] ."','". $_POST['deskripsi'] ."',". $_POST['harga']. ")";
//echo $sql;
$hasil=mysqli_query($conn,$sql);
if ($hasil) {
    header("Location: ../produk");
} else {
    echo "<script>alert('gagal menyimpan data!')</script>";
}
?>