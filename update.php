<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "dbtoko";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
$sql="update produk set nama='". $_POST['nama'] ."',deskripsi='". $_POST['deskripsi'] ."',harga=". $_POST['harga']. " where id=". $_POST['id'];
echo $sql;
$hasil=mysqli_query($conn,$sql);
if ($hasil) {
    header("Location: ../produk");
} else {
    echo "<script>alert('gagal menyimpan data!')</script>";
}
?>