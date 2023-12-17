<?php 
    session_start();
    session_destroy();
    echo '<script>window.location="form_login.php"</script>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            text-align: center;
            margin: 50px;
        }

        .logout-message {
            margin-top: 20px;
            padding: 20px;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            color: #155724;
        }

        .link-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <div class="logout-message">
        <h2>Anda berhasil logout.</h2>
        <p>Kembali ke <a href="index.php">Halaman Utama</a></p>
    </div>

</body>
</html>
