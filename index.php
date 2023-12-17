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

    <!-- Feather Icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
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
                    </li>
                </ul>
            </div>

            <div class="btn-login">
                <a href="form_login.php">
                    <button type="button" class="btn btn-outline-primary">Login</button>
                </a>
            </div>
        </div>
    </nav>

    <main>
        <section class="hero-section hero-section-full-height">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-12 p-0">
                        <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/slide/toserba2.png" class="carousel-image img-fluid" alt="..." />

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>Gracias</h1>

                                        <p>Di Toko Renata, Tersedia apa aja.</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="images/slide/toserba.png" class="carousel-image img-fluid" alt="..." />

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>Cari Barang ?</h1>

                                        <p>Temukan Di Toko Kami</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="images/slide/toserba4.png" class="carousel-image img-fluid" alt="..." />

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>Tersedia</h1>

                                        <p>Bandeng Tanpa Duri yg Siap Olah</p>
                                    </div>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-12 text-center mx-auto">
                        <h2 class="mb-5">Ada apa di Toko Renata ?</h2>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="about.php" class="d-block">
                                <img src="images/icons/grocery-cart.png" class="featured-block-image img-fluid"
                                    alt="shopping" width="75" height="75" />

                                <p class="featured-block-text">
                                    <strong>Sembako</strong>
                                </p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="produk.php" class="d-block">
                                <img src="images/icons/fish.png" class="featured-block-image img-fluid" alt=""
                                    width="75" height="75" />

                                <p class="featured-block-text">
                                    <strong>Order</strong> Ikan
                                </p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="kontak.php" class="d-block">
                                <img src="images/icons/contacts.png" class="featured-block-image img-fluid" alt=""
                                    width="75" height="75" />

                                <p class="featured-block-text">
                                    Hubungi <strong>Kami</strong>
                                </p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="/pengembang" class="d-block">
                                <img src="images/icons/codestack.png" class="featured-block-image img-fluid" alt=""
                                    width="75" height="75" />

                                <p class="featured-block-text">
                                    <strong>Source code</strong> ?
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding section-bg" id="tentang kami">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <img src="images/ilustrasi.png" class="custom-text-box-image img-fluid" alt="" />
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="custom-text-box">
                            <h2 class="mb-3">Toserba & Sedia Bandeng Tanpa Duri</h2>

                            <h5 class="mb-3">
                                Toko Renata
                            </h5>

                            <p class="mb-0">
                            <p class="rapih">Toserba yang menyediakan berbagai macam kebutuhan sehari-hari, mulai dari
                                makanan, minuman, perlengkapan rumah tangga, hingga kebutuhan sehari-hari lainnya. <br>
                                Kami menawarkan produk yang lengkap dan berkualitas dengan harga yang terjangkau. Juga
                                menyediakan bandeng tanpa duri, sehingga Anda dapat menikmati bandeng dengan mudah dan
                                nyaman. Bandeng tanpa duri kami diproses dengan teknologi modern, sehingga tetap
                                memiliki cita rasa yang lezat.
                            </p>
                            </p>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-text-box mb-lg-0">
                                    <h5 class="mb-3">Tersedia</h5>
                                    <p>
                                        Harga terjangkau dan menjaga kualitas barang yg dijual. Rutin menjaga stock
                                        barang.
                                        ayo belanja karna ada..
                                    </p>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                    <div class="counter-thumb">
                                        <div class="d-flex">
                                            <span class="counter-number" data-from="1" data-to="1456"
                                                data-speed="1000"></span>
                                            <span class="counter-number-text"></span>
                                        </div>

                                        <span class="counter-text">Item</span>
                                    </div>

                                    <div class="counter-thumb mt-4">
                                        <div class="d-flex">
                                            <span class="counter-number" data-from="1" data-to="31" data-speed="1000">
                                            </span>
                                            <span class="counter-number-text"></span>
                                        </div>

                                        <span class="counter-text">Ikan Bandeng @hari</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5 col-12">
                        <img src="images/shortgirl.jpg" class="about-image ms-lg-auto bg-light shadow-lg img-fluid"
                            alt="" />
                    </div>

                    <div class="col-lg-5 col-md-7 col-12">
                        <div class="custom-text-block">
                            <h2 class="mb-0">Renata</h2>

                            <p class="text-muted mb-lg-4 mb-md-4 text-black">Owner</p>

                            <p>
                                Saya seorang wirausahawan yg merintis usaha mulai dari tahun 2017. Dengan pemahaman
                                terhadap
                                kebutuhan konsumen saya akan terus mengedepankan ketersedian stock dan konsiten dalam
                                usaha
                                lain saya.<i class="fab fa-user-hard-hat"></i>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-section section-padding" id="produk.php">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-7 col-12">
                        <div class="custom-text-block">
                            <h2 class="mb-3 text-black mx-1">Bandeng Tanpa Duri</h2>
                            <p class="mx-2">
                                " Bandeng fresh, dengan teknik tradisional. Dilakukan pengangkatan tulang. Agar bisa
                                langsung
                                dinikmati oleh Konsumen. "<i class="fab fa-user-hard-hat"></i>
                            </p>
                        </div><a href="produk.php"
                            class="btn btn-outline-primary text-black mx-5 justify-content-around">Lihat Produk</a>
                    </div>
                    <div class="col-lg-6 col-md-5 col-12 d-flex align-items-center mt-5">
                        <img src="images/causes/bandengsizeL.jpg"
                            class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt=""
                            style="max-width: 250px; height: 250px;" />
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


        <div class="card">
            <h2 class="fs-2 align-item-center text-center">Google Maps</h2>
            <div
                style="position: relative; padding-bottom: 56.25%; padding-top: 30px; height: 0; overflow: hidden; max-width: 800px;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995.7847433869158!2d117.57827186950114!3d3.315802638651262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32138a9c1c97c9c3%3A0xac0583d3bb6a8b36!2sJl.%20Mulawarman%20No.89%2C%20Karang%20Anyar%2C%20Kec.%20Tarakan%20Bar.%2C%20Kota%20Tarakan%2C%20Kalimantan%20Utara!5e0!3m2!1sid!2sid!4v1695704413373!5m2!1sid!2sid"
                    width="100%" height="100%"
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 5px solid rgb(67, 159, 220);"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <!-- Bagian (section) lain di bawahnya dengan padding -->
        <div style="padding-top: 45px;">
            <!-- Masukkan konten bagian lain di sini -->
        </div>
        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/counter.js"></script>
        <script src="js/custom.js"></script>

    </main>
    <script>
      feather.replace();
    </script>
</body>

    <footer style="padding-top: 75px;">
        <div class="site-footer-bottom my-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 col-12">
                        <p class="copyright-text my-0 mb-0">Copyright © 2036 <a href="#">Kind Heart</a> Charity Org.
                            <br>Design: <a href="https://templatemo.com" target="_blank">TemplateMo. </a>
                            | Dev: <a href="https://github.com/MuktiWithSoy" target="_blank">@MuktiWithSoy</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</html>