<?php
session_start();

if (isset($_SESSION['username']) && $_SESSION['role'] === 'user') {
    $username = $_SESSION['username'];

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Home Page</title>
    </head>
    <body>

    <div class="container mt-5">
        <h2>Selamat datang, <?php echo $username; ?>!</h2>
        <br>

        <div class="card">

            <div class="card-body">
                <h5 class="card-title">Data Pengguna</h5>
                <p class="card-text">Anda adalah seorang pengguna.</p>
                <img src="iso.jpeg" alt="iso" class="img-fluid" height="200" width="100">
            </div>
        </div>

        <br><br>

        <a href='logout.php' class='btn btn-danger'>Logout</a>
    </div>

    </body>
    </html>

    <?php
} else {
    header("Location: login.php");
}
?>
