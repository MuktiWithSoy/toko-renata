<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-icons.css" rel="stylesheet" />
    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" >
    
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light shadow-lg ">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/seafood.png" class="logo img-fluid" alt="Toko Renata" width="180" height="120" />
                <span>
                    Renata Store
                    <small>Toserba & Spesialis Bandeng Tanpa Duri</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="about.php">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="produk.php">Produk</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="kontak.php">Kontak</a>
                        <i class='bx bxl-facebook-square'></i>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="data-kategori.php">Kategori</a>
                        <i class='bx bxl-facebook-square'></i>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="data-produk.php">Produk</a>
                        <i class='bx bxl-facebook-square'></i>
                    </li>
                </ul>
            </div>

            <div class="btn-login">
                <a href="index.php">
                    <button type="button" class="btn btn-outline-danger">Logout</button>
                </a>
            </div>
            <div class="btn-profile" style="margin-left: 2vh;">
                <a href="profile.php">
                    <button type="button" class="btn btn-outline-dark"><img src="./images/usericon.png" alt="ava" width="18px" height="18px"> Profile</button>
                </a>
            </div>
        </div>
    </nav>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../produk">Produk</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
  </ol>
</nav>
<h3>EDIT PRODUK</h3>
      <?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "db_toko";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
$sql="select * from tb_produk where id_produk=". $_GET["id_produk"];
$hasil=mysqli_query($conn,$sql);
if ($hasil->num_rows > 0) {
    $row = mysqli_fetch_assoc($hasil);
    $nama= $row['nama'];
    $deskripsi= $row['deskripsi'];
    $harga= $row['harga'];    
    $id= $row['id'];    
} else {
    echo "<script>alert('Email atau password Anda salah. Silakan coba lagi!')</script>";
}
?>
      <form action="../produk/update.php" method="post">
        <div class="mb-3 row"> <input type="hidden" class="form-control"  name="id" value="<?=$id?>">
                    <label for="staticEmail" class="col-sm-2 col-form-label">NAMA PRODUK</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  name="nama" value="<?=$nama?>">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">DESKRIPSI</label>
                    <div class="col-sm-10">
                      <textarea  class="form-control" name="deskripsi" id="summernote"><?=$deskripsi?></textarea>
                    </div>
                  </div>               
                     <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">HARGA</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="harga" id="inputPassword" value="<?=$harga?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-end pe-4">
                      <input type="submit" class="btn btn-sm btn-success" value="SImpan">
                    </div>
                  </div>
                </div>
                

            </div>
        </form> 
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script>
    $(document).ready(function() {
        $('#summernote').summernote({height: 200});
    });
  </script>
  </body>
</html>