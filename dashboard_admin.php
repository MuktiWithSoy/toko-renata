<?php
    session_start();
    if ($_SESSION['status_login'] !=true){
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

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="developer.php">Pengembang</a>
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
        <div class="canvas" style="margin-top: 4vh;">
            <h1 class="coms">Selamat Datang,<br> <?php echo $_SESSION['a_global']->nama_admin ?></h1>
        </div>
    </div>
        
    <section class="section-padding pt-4" id="produk">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 text-center mb-4">
                        <h2 class="text-black">Bandeng Tanpa Duri</h2>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <img src="images/causes/bandengsizeM.jpg" class="custom-block-image img-fluid"
                                alt="bandengkecil" />

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Bandeng Kecil</h5>

                                    <p>
                                        Ukuran size ikan M, Berat avg. 400grm
                                    </p>

                                    <div class="progress mt-4">
                                        <div class="progress-bar w-18" role="progressbar" aria-valuenow="18"
                                            aria-valuemin="0" aria-valuemax="200"></div>
                                    </div>

                                    <div class="d-flex align-items-center my-2">
                                        <p class="mb-0">
                                            <strong>Harga :</strong>
                                            Rp.18.000
                                        </p>

                                    </div>
                                </div>
                                <a href="https://api.whatsapp.com/send?phone=6282252683436&text=Permisi, saya mau pesan Ikan Bandeng Size M. Apakah tersedia ?"
                                    class="custom-btn btn">Chat Dengan Penjual</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <img src="images/causes/bandengsizeL.jpg" class="custom-block-image img-fluid"
                                alt="bandengmedium" />

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Bandeng Medium</h5>

                                    <p>
                                        Ukuran size ikan L, Berat avg. 1000gr.
                                    </p>

                                    <div class="progress mt-4">
                                        <div class="progress-bar w-50" role="progressbar" aria-valuenow="50"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="d-flex align-items-center my-2">
                                        <p class="mb-0">
                                            <strong>Harga :</strong>
                                            Rp.27.600
                                        </p>

                                    </div>
                                </div>
                                <a href="https://api.whatsapp.com/send?phone=6282252683436&text=Permisi, saya mau pesan Ikan Bandeng Size L. Apakah tersedia ?"
                                    class="custom-btn btn">Chat Dengan Penjual</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="custom-block-wrap">
                            <img src="images/causes/bandengsizeXL.jpg" class="custom-block-image img-fluid"
                                alt="bandengbesar" />

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Bandeng Besar</h5>

                                    <p>
                                        Ukuran size ikan L, Berat avg. 1000gr.
                                    </p>

                                    <div class="progress mt-4">
                                        <div class="progress-bar w-100" role="progressbar" aria-valuenow="100"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="d-flex align-items-center my-2">
                                        <p class="mb-0">
                                            <strong>Harga :</strong>
                                            Rp.35.000
                                        </p>
                                    </div>
                                </div>
                                <a href="https://api.whatsapp.com/send?phone=6282252683436&text=Permisi, saya mau pesan Ikan Bandeng Size XL. Apakah tersedia ?"
                                    class="custom-btn btn">Chat Dengan Penjual</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <section class="contact-section section-padding" id="kontak">
            <div class="container">
                <div class="row">
                    <div class="col-lg-14 col-12 ms-auto mb-5 mb-lg-0">
                        <div class="contact-info-wrap">
                            <h2>Profile</h2>

                            <div class="contact-image-wrap d-flex flex-wrap">
                                <img src="images/shortgirl.jpg" class="img-fluid avatar-image" alt="" />

                                <div class="d-flex flex-column justify-content-center ms-3">
                                    <p class="mb-0">Renata</p>
                                    <p class="mb-0"><strong>Wirausahawan</strong></p>
                                </div>
                            </div>

                            <div class="contact-info">
                                <h5 class="mb-3">Kontak :</h5>
                                <p class="d-flex mx-auto p-1">
                                    <img class="mx-2" src="images/location-pin.png" width="25" height="25">
                                    Jl. Mulawarman No.89
                                </p>

                                <p class="d-flex mx-auto p-1">
                                    <img class="mx-2" src="images/whatsapp.png" width="25" height="25">
                                    <a href="https://wa.me/+6282252683436"> +62822-5268-3436 </a>
                                </p>

                                <p class="d-flex mx-auto p-1">
                                    <img class="mx-2" src="images/gmail.png" width="25" height="25">
                                    <a href="muktidika212@gmail.com"> dev@gmail.com </a>
                                </p>

                                <button type="button" class="btn btn-outline-success"><a
                                        href="https://wa.me/+6282252683436">
                                        <img src="images/whatsapp.png" alt="logo wa" width="20" height="20"
                                            class="align-items-center m-1"> Chat </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

    <footer>
        
    </footer>
</html>