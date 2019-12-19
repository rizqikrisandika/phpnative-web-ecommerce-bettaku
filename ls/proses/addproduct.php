<?php

    if(isset($_POST['save']))
    {
        if($_FILES['foto']['error']==0){
            $kategori = $_POST['kategori'];
            $nama = $_POST['nama'];
            $harga = $_POST['harga'];
            $img = $_FILES['foto'];
            $new_img = 'images/img_'.date('YmdHis').'.png';
            $deskripsi = $_POST['deskripsi'];
            if(copy($img['tmp_name'], $new_img)){

                mysqli_query($koneksi,"INSERT INTO produk(id_kategori,nama_produk,harga_produk,foto_produk,deskripsi_produk)
                VALUES('$kategori','$nama','$harga','$new_img','$deskripsi')");

                echo "<script>alert('Data telah ditambah')</script>";
                echo "<script>location='index.php?page=product'</script>";
            }
        }
    }
?>