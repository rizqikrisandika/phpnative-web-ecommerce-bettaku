<?php

    $id_produk = $_GET['id'];

    if(isset($_SESSION['cart'][$id_produk]))
    {
        $_SESSION['cart'][$id_produk]+=1; 
    }
    else
    {
        $_SESSION['cart'][$id_produk]=1;
    }

    echo "<script>alert('Produk telah masuk ke keranjang')</script>";
    echo "<script>location='index.php?bettaku=home'</script>";
    header('location:index.php?bettaku=home');
?>