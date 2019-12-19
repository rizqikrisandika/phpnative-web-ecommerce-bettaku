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

    header('location:index.php?bettaku=cart');
?>