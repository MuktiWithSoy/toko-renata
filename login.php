<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet"  type="text/css" href="./css/style.css">

  <!-- Font Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hedvig+Letters+Sans&display=swap" rel="stylesheet"></head>
</head>

<body id="bg-login">
  <div class="box-login">
    <h2>Login</h2>
    <form action="" method="POST">
      <input class="input-formulir" type="text" name="user" placeholder="Username">
      <input class="input-formulir" type="password" name="password" placeholder="Password">
      <div class="container">
      <input class="btn-submit" type="submit" name="submit" value="Login">
      </div>
    </form>
    <?php
      if(isset($_POST['submit'])){
        include 'db.php';
        
        $user = mysqli_escape_string($conn, $_POST['user']);
        $password = mysqli_escape_string($conn, $_POST['password']);
        
        $cek = mysqli_query($conn,"SELECT * FROM tb_admin WHERE usrnm_admin = '".$user."' AND password = '".$password."'");
        
        if(mysqli_num_rows($cek)> 0){
            $id = mysqli_fetch_object($cek);
            $_SESSION['status_login'] = true;
            $_SESSION['admin_global'] = $d;
            $_SESSION['id'] = $d ->$id_admin;
            echo '<script>window.location="dashboard.php"</script>';

        }else{
          echo '<script>alert("Username atau Sandi anda salah")</script>';
        }
        }

    ?>
  </div>
  
  
</body>

</html>