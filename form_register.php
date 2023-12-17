<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Pengguna Baru</title>
</head>

<body class="bg-light">

    <div class="container mt-5" style="max-width: 400px; max-height: 600px;">
        <h2 class="text-center mb-4">Pengguna Baru</h2>
        <form action="adduser.php" method="post">
            
            <div class="mb-3" style="margin-top: 10px; margin-auto">
                <label for="id" class="form-label">Id : <br style="font: size 8px;">*contoh : 4</label>
                <input type="text" class="form-control" name="id" required>
            </div>

            <div class="mb-3" style="margin-top: 10px; margin-auto">
                <label for="nama" class="form-label">Nama :</label>
                <input type="text" class="form-control" name="nama" required>
            </div>

            <div class="mb-3" style="margin-top: 10px; margin-auto">
                <label for="username" class="form-label">Username :</label>
                <input type="text" class="form-control" name="username" required>
            </div>

            <div class="mb-3" style="margin-top: 10px; margin-auto">
                <label for="password" class="form-label">Password :</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-outline-success mt-4" style="margin-top: 40px;"> Lanjut </button>
            </div>

            <div class="text-left">
                <a href="form_login.php" class="btn btn-succes text-center mt-4" style="margin-top: 40px;">Kembali</a>
            </div>


        </form>

    </div>

    <!-- Bootstrap JS and Popper.js (Make sure to include these dependencies) -->
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
