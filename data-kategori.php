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
                        <a class="nav-link click-scroll" href="data-produk.php">Produk</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="data-kategori.php">Kategori</a>
                        <i class='bx bxl-facebook-square'></i>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="dashboard_admin.php">Dashboard</a>
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

    <div class="container-lg">
        <div class="canvas" style="margin-top: 4vh; padding-left: 4vh;">
        <a href="tambah-kategori.php"><button type="button" class="btn btn-outline-primary mb-4">Tambah Data</button></a>

        <p>Data Kategori</p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $no = 1;
                $kategori = mysqli_query($conn, "SELECT * FROM tb_kategori ORDER BY id_kategori DESC");
                while ($row = mysqli_fetch_array($kategori)) {
            ?>
                <tr>
                    <td><?php
                        echo $no++ ?></td>
                    <td>
                        <?php echo $row['nama_kategori'] ?>
                    </td>
                    <td>
                        <a href="edit-kategori.php?id=<?php echo $row['id_kategori']?>">Edit</a> || <a href="hapus-kategori.php?idk=<?php echo $row['id_kategori']?>">Hapus</a>
                    </td>
                </tr>
            <?php
                }
            ?>

                
                
            </tbody>
            </table>
        </div>
    </div>
    
    <a href="dashboard_admin.php"><button type="button" class="btn btn-light custom-btn">Kembali</button></a>

</body>

    <footer>
        
    </footer>
</html>