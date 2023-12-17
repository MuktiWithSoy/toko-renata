<?php
    session_start();
    include 'db.php';
    
    if($_SESSION['status_login'] !=true){
        echo'<script>window.location="form_login.php"</script>';
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer>
    </script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&family=Poppins:ital,wght@0,100;0,500;0,700;1,500&family=Young+Serif&display=swap"
        rel="stylesheet">

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Toko Renata</title>
    <link rel="icon" href="images/seafood.png">

    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <link href="css/bootstrap-icons.css" rel="stylesheet" />

    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet" />

    <link href="css/style.css" rel="stylesheet" />
    

    
    <!-- <script>
    function redirectToCategory() {
    window.location.href = 'data-kategori.php';
    }
    </script> -->

    <!-- Feather Icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="/js/boxicon.js"></script>
</head>

<body id="logo">
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
                <a href="form_login.php">
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

    <div class="container-lg">
        <div class="canvas" style="margin-top: 4vh; padding-left: 4vh;">
            <p>
                <div class="image-container"><img src="images/edit.png" alt="edit" width="14px" height="14px"
                        class="centered-img"> Tambah Produk</div>
            </p>
            <div class="box">
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="text" name="nama" placeholder="Nama Produk" class="input-control" required>
                    <input type="text" name="harga" placeholder="Harga" class="input-control" required>
                    <input type="file" name="gambar" class="input-control" required>
                    <textarea name="deskripsi" class="input-control" placeholder="Deskripsi Produk"></textarea>
                    <select class="input-control" name="status">
                        <option value="">Pilih Status</option>
                        <option value="1">Aktif</option>
                        <option value="0">Non-aktif</option>
                    </select>
                    <input type="submit" name="submit" value="Tambah" class="btn btn-outline-primary"
                        style="color: black;">
                </form>
                <?php
                if (isset($_POST['submit'])) {

                    // menampung inputan form
                    $kategori = $_POST['kategori'];
                    $nama = $_POST['nama'];
                    $harga = $_POST['harga'];
                    $deskripsi = $_POST['deskripsi'];
                    $status = $_POST['status'];

                    // menampung data file upload
                    $filename = $_FILES['gambar']['name'];
                    $tmpname = $_FILES['gambar']['tmp_name'];

                    $type1 = explode('.', $filename);
                    $type2 = end($type1);

                    $newname = 'produk' . time() . '.' . $type2;

                    // menampung data format file yg diizinkan
                    $tipe_diizinkan = array('jpeg', 'jpg', 'png', 'jfif');
                    // validasi format file
                    if (!in_array($type2, $tipe_diizinkan)) { //jika format tidak sesuai
                        echo '<script>alert("Format file tidak diizinkan")</script>';
                    } else { //jika format sesuai
                        move_uploaded_file($tmpname, './images/produk/' . $newname);

                        $insert = mysqli_query($conn, "INSERT INTO tb_produk VALUES (
                            null,
                            '" . $kategori . "',
                            '" . $nama . "',
                            '" . $harga . "',
                            '" . $deskripsi . "',
                            '" . $newname . "',
                            '" . $status . "',
                            null)
                            ");

                        if ($insert) {
                            echo '<script>alert("Tambah data berhasil")</script>';
                            echo '<script>window.location="data-produk.php"</script>';
                        } else {
                            echo '<script>alert("Gagal menyimpan data")</script>';
                            echo mysqli_error($conn);
                        }
                    }
                }
                ?>
            </div>
            <a href="data-produk.php"><button type="button" class="btn btn-light custom-btn">Kembali</button></a>
            <a href="dashboard_admin.php"><button type="button" class="btn btn-light custom-btn">Kembali</button></a>

        </div>
    </div>
</body>
    <footer>
       
    </footer>
    <script>
        CKEDITOR.replace( 'deskripsi' );
    </script>

</html>