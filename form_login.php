<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="icon" type="image/x-icon" href="seafood.png">

  <link href="css/loginform.css" rel="stylesheet" />

  <!-- Font Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hedvig+Letters+Sans&display=swap" rel="stylesheet"></head>
  
</head>

<body id="bg-login">
  <div class="box-login">
    <h2>Login | Toko Renata</h2>
    <form action="" method="POST">
      <input class="login-form" type="text" name="user" placeholder="Username">
      <input class="login-form" type="password" name="password" placeholder="Password">
      <div class="container">
      <input class="btn-submit" type="submit" name="submit" value="Login">
      </div>
    </form>
    <?php
      if(isset($_POST['submit'])){
        session_start();
        include 'db.php';

        $user = $_POST['user'];
        $password = $_POST['password'];
        
        $cek = mysqli_query($conn,"SELECT * FROM tb_admin WHERE usrnm_admin = '".$user."' AND password = '".$password."'");
        if(mysqli_num_rows($cek)> 0){
            $d = mysqli_fetch_object($cek);
            $_SESSION['status_login'] = true;   
            $_SESSION['a_global'] = $d;
            $_SESSION['d'] = $d->id_admin;
            echo '<script>window.location="dashboard_admin.php"</script>';
        }else{
          echo '<script>alert("Username atau Sandi anda salah")</script>';
        }
        }

    ?>
        <div class="regis-link">
            <p>Belum punya akun ? <a href="form_register.php"><br style="teks">Daftar sekarang..</a></p>
        </div>
  </div>
  
  
</body>

</html>