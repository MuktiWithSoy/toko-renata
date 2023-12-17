<?php
    session_start();
    include 'db.php';
    
    if($_SESSION['status_login'] !=true){
        echo'<script>window.location="form_login.php"</script>';
    }
    $query = mysqli_query($conn,"SELECT * FROM tb_admin WHERE id_admin = '".$_SESSION['d']."' ");
    $d = mysqli_fetch_object($query);
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

    
    <script>
    function redirectToDashboard() {
      window.location.href = 'dashboard_admin.php';
    }
    </script>

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
        <p><div class="image-container"><img src="images/edit.png" alt="edit" width="14px" height="14px" class="centered-img">  Edit Profile</div>
        </p>  
            <div class="box">
                <form action="" method="POST">
                    <input type="text" name="nama" placeholder="Nama Lengkap" class="input-control"
                    value="<?php echo $d->nama_admin ?>" required>
                    <input type="text" name="user" placeholder="Username" class="input-control" 
                    value="<?php echo $d->usrnm_admin ?>" required>
                    <input type="text" name="telp" placeholder="No.Telepon" class="input-control" 
                    value="<?php echo $d->telp ?>" required>
                    <input type="email" name="email" placeholder="Email" class="input-control" 
                    value="<?php echo $d->email ?>" required>
                    <input type="text" name="alamat" placeholder="Alamat" class="input-control" 
                    value="<?php echo $d->alamat_admin ?>" required>
                    <input type="submit" name="submit" value="Ubah Profile" class="btn-ubahp">
                </form>
            <?php 
            if(isset($_POST['submit'])){
                $nama   = ucwords($_POST ['nama']);
                $user   = $_POST ['user'];
                $telp   = $_POST ['telp'];
                $email  = $_POST ['email'];
                $alamat = ucwords($_POST ['alamat']);

                $update = mysqli_query($conn,"UPDATE tb_admin SET
                                        nama_admin   = '".$nama."',
                                        usrnm_admin  = '".$user."',
                                        telp         = '".$telp."',
                                        email        = '".$email."',
                                        alamat_admin = '".$alamat."'
                                        WHERE id_admin = '".$d->id_admin."' ");
                if($update){
                    echo '<script>alert("perbarui profile berhasil")</script>';
                    echo '<script>window.location="dashboard_admin.php"</script>';
                }
                else{
                    echo '<script>alert("gagal perbarui data")</script>'.mysqli_error($conn);
                }
            }
            ?>
            <br>
            </div>
        </div>
    </div>
    <div class="container-lg">
        <div class="canvas" style="margin-top: 4vh; padding-left: 4vh;">
        <p><div class="image-container"><img src="images/edit.png" alt="edit" width="14px" height="14px" class="centered-img">  Edit Password</div>
        </p>  
            <div class="box">
                <form action="" method="POST">
                    <input type="password" name="pass1" placeholder="Sandi Baru" class="input-control" required>
                    <input type="password" name="pass2" placeholder="Konfirmasi Sandi" class="input-control" required>
                    <input type="submit" name="submit" value="Ubah Password" class="btn-ubahp">
                </form>
            <?php 
            if(isset($_POST['submit'])){
                $pass1   = $_POST ['pass1'];
                $pass2   = $_POST ['pass2'];
                
                if($pass2 != $pass1){
                    echo '<script>alert("Sandi tidak sesuai, cek kembali !")</script>';
                }

                    $u_pass = mysqli_query($conn,"UPDATE tb_admin SET
                                            password        = '".$pass1."',
                                            WHERE id_admin = '".$d->id_admin."' ");
                if($u_pass){
                    echo '<script>alert("perbarui password berhasil")</script>';
                    echo '<script>window.location="dashboard_admin.php"</script>';
                }
                else{
                    echo '<script>alert("gagal perbarui password")</script>'.mysqli_error($conn);
                }
            }
            ?>
            <br>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-light custom-btn" onclick="redirectToDashboard()">Kembali</button>

</body>

    <footer>
        
    </footer>
</html>