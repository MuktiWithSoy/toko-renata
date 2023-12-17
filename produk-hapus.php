<?php
    include'db.php';

    if(isset($_GET['idk'])){
        $delete= mysqli_query($koneksi, "DELETE FROM tb_kategori WHERE id_kategori='".$_GET['idk']."'");
        
        echo '<script>window.location="kategori.php"</script>';
    }

    if(isset($_GET['idp'])){
        $produk = mysqli_query($koneksi, "SELECT gambar_produk FROM tb_produk WHERE id_produk ='".$_GET['idp']."'");
        $p = mysqli_fetch_object($produk);

        unlink('./images/produk/'.$p->product_image);
        $delete= mysqli_query($koneksi, "DELETE FROM tb_produk WHERE id_produk='".$_GET['idp']."'");
        
        echo '<script>window.location="data-produk.php"</script>';
    }
?>