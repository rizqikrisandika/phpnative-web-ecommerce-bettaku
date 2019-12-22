<?php
$db = mysqli_query($koneksi,"SELECT * FROM pembelian JOIN pelanggan ON pembelian.
id_pelanggan=pelanggan.id_pelanggan WHERE pembelian.id_pembelian='$_GET[id]'"); 
$detail = mysqli_fetch_assoc($db);
?>

<div class="hero-wrap hero-bread" style="background-image: url('assets/images/background_3.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Detail shopping</span></p>
                <h1 class="mb-0 bread">Detail shopping</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="card-body">
        <strong>
            <h4><?php echo $detail['nama_pelanggan'];?></h4>
        </strong>

        <p>
            <?php echo $detail['nohp_pelanggan'];?>
            <br>
            <?php echo $detail['email_pelanggan'];?>
        </p>


        <p>
            Tanggal : <?php echo $detail['tanggal_pembelian'];?>
            <br>
            Total : Rp. <?php echo number_format($detail['total_pembelian']);?>
        </p>

        <p>
            Status : <?php echo $detail['status_pembelian'];?>
        </p>

        <p>

            <?php if($detail['status_pembelian']=="Belum bayar" OR $detail['status_pembelian']== "Di batalkan"): ?>
                <a href="index.php?bettaku=payment&id=<?php echo $detail['id_pembelian']; ?>"style="background: #212529" class="btn btn-primary">Bayar</a>
            <?php endif ?>
        </p>
        <div class="single-table">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead class="text-uppercase bg-dark">
                        <tr class="text-white">
                            <th>No</th>
                            <th>Product</th>
                            <th>Photo</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subs Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $mulai = 0;
							$no = $mulai+1; ?>
                        <?php 
                            $db = mysqli_query($koneksi,"SELECT * FROM pembelian_produk  WHERE id_pembelian='$_GET[id]'");                                               
                            while ($nota = mysqli_fetch_array($db)) { ?>
                        <tr>
                            <td><?php echo $no++?></td>
                            <td><?php echo $nota['nama_produk']; ?></td>
                            <td><img src="ls/images/<?php echo $nota['foto_produk'];?>" width="100"></td>
                            <td>RP. <?php echo number_format($nota['harga_produk']);?></td>
                            <td><?php echo $nota['jumlah']; ?></td>
                            <td>
                                Rp. <?php echo number_format($nota['harga_produk']*$nota['jumlah']) ;?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="5">Total</th>
                            <th>Rp. <?php echo number_format($detail['total_pembelian']);?></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<br><br><br>