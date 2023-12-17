<!doctype html>
<html lang="en">
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../style.css" rel="stylesheet" >
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

  </head>
  <body>
    <h1>Hello, world!</h1>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            
          <a class="navbar-brand" href="#"><img src="https://tokorenata.teknobiz.net/images/seafood.png" width="30" height="24"> Renata</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <div id="formcari"></div>
          </div>
        </div>
      </nav>
      <div class="container">
      <?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "dbtoko";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
$sql="select * from produk where nama like '%". $_POST['textcari'] ."%'";
$hasil=mysqli_query($conn,$sql);
echo "<div class='row float-right'><div class='col-3'><a href='tambah.php' class='btn btn-warning btn-sm'>Tambah</a></div></div>";
if ($hasil->num_rows > 0) {
    echo "<table class='table'><thead class='table-dark'><tr><td>NAMA</td><td>HARGA</td><td>OPS</td><tr></thead>";
    while($row = mysqli_fetch_assoc($hasil)){
        echo "<tr><td>". $row["nama"] ."</td><td>". $row["harga"] ."</td><td class='fix'><a href='edit.php?id=". $row["id"] ."' class='btn btn-success btn-sm'>Edit</a> <a href='hapus.php?id=". $row["id"] ."' class='btn btn-danger btn-sm'>Hapus</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "<script>alert('dat tidak ada!')</script>";
}
?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  <script>
    $(document).ready(function() {
        $('#formcari').load('../produk/formcari.php');
    });
  </script>
</html>