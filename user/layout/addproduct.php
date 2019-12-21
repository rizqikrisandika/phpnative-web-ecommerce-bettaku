<?php 
    
    if(!isset($_SESSION["pelanggan"]) OR empty($_SESSION["pelanggan"])){
        echo "<script>alert('Login Required')</script>";
        echo "<script>location='index.php?bettakuu=login-user'</script>";
        exit();
    }else{
        $query = "Select * from kategori";
        $db = mysqli_query($koneksi, $query);
    }
?>

<body>

    <div class="hero-wrap hero-bread" style="background-image: url('assets/images/background_3.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Add Product</span></p>
                    <h1 class="mb-0 bread">Add Product</h1>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Add Product</h4>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Name Product</label>
                        <input class="form-control" type="text" name="nama" id="example-text-input">
                    </div>
                    <div class="form-group">
                        <label for="example-search-input" class="col-form-label">Price</label>
                        <input class="form-control" type="number" name="harga" id="example-search-input">
                    </div>
                    <div class="form-group">
                        <label for="example-search-input" class="col-form-label">Photo</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="foto" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Category</label>
                        <select class="custom-select" name="kategori">
                            <?php while($kategori = mysqli_fetch_array($db)): ?>
                            <option value="<?php echo $kategori['id_kategori']?>">
                                <?php echo $kategori['nama_kategori']?>
                            </option>
                            <?php endwhile;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="example-search-input" class="col-form-label">Desc</label>
                        <textarea class="form-control" aria-label="With textarea" name="deskripsi" cols="30"
                            rows="10"></textarea>
                    </div>
                    <button class="btn btn-primary" name="save">Save</button>
                </form>
            </div>
        </div>
    </div>
    <br><br><br>

</body>

<?php

    $id_pelanggan = $_GET['id'];

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

                mysqli_query($koneksi,"INSERT INTO produk(id_kategori,id_pelanggan,nama_produk,harga_produk,foto_produk,deskripsi_produk)
                VALUES('$kategori','$id_pelanggan','$nama','$harga','$new_img','$deskripsi')");

                echo "<script>alert('Add Product Succes')</script>";
                echo "<script>location='index.php?bettaku=profile'</script>";
            }
        }
    }
?>