<?php
    $id_produk=$_GET['id'];
    unset($_SESSION['cart'][$id_produk]);

    echo "<script>alert('produk dihapus dari keranjang');</script>";
    header('location:index.php?bettaku=cart');
?>