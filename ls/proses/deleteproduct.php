<?php

    $db = mysqli_query($koneksi,"SELECT * FROM produk WHERE id_produk='$_GET[id]'");
    $produk = mysqli_fetch_assoc($db);
    $fotoproduk = $produk['foto_produk'];

    if(file_exists("images/$fotoproduk"))
    {
        unlink("$fotoproduk");
    }

    $db = mysqli_query($koneksi,"DELETE FROM produk WHERE id_produk='$_GET[id]'");

    echo "<script>alert('Data telah terhapus')</script>";
    echo "<script>location='index.php?page=product'</script>";
?>