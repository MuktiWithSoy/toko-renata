<?php
    session_start();
    include 'db.php';
    
    if(isset($_GET['idk'])){
        $delete = mysqli_query($conn,"DELETE FROM tb_kategori WHERE id_kategori = '".$_GET['idk']."'" );
        echo '<script>window.location="data-kategori.php"</script>';
    }
?>