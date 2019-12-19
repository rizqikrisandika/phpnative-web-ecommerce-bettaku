<?php
$db = mysqli_query($koneksi,"SELECT * FROM pembelian JOIN pelanggan ON pembelian.
id_pelanggan=pelanggan.id_pelanggan WHERE pembelian.id_pembelian='$_GET[id]'"); 
$detail = mysqli_fetch_assoc($db);
?>

<div class="hero-wrap hero-bread" style="background-image: url('assets/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Nota</span></p>
            <h1 class="mb-0 bread">Nota</h1>
          </div>
        </div>
      </div>
    </div>

	<div class="container">
	<div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-12 mt-5">
					<strong>
                        <?php echo $detail['nama_pelanggan'];?>
                    </strong>

                    <p>
                        <?php echo $detail['nohp_pelanggan'];?>
                        <br>
                        <?php echo $detail['email_pelanggan'];?>
                    </p>


                    <p>
                        Tanggal : <?php echo $detail['tanggal_pembelian'];?>
                        <br>
                        Total   : <?php echo $detail['total_pembelian'];?>
                    </p>
                            <div class="card-body">
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
                                            $db = mysqli_query($koneksi,"SELECT * FROM pembelian_produk JOIN produk ON
                            pembelian_produk.id_produk=produk.id_produk WHERE pembelian_produk.id_pembelian='$_GET[id]'");                                               
                                            
                                            while ($nota = mysqli_fetch_array($db)) { ?>
                                                <tr>
                                                    <td><?php echo $no++?></td>
                                                    <td><?php echo $nota['nama_produk']; ?></td>
													<td><img src="ls/<?php echo $nota['foto_produk'];?>" width="100"></td>
                                                    <td>RP. <?php echo number_format($nota['harga_produk']);?></td>
													<td><?php echo $nota['jumlah']; ?></td>
                                                    <td>
													Rp. <?php echo number_format($nota['harga_produk']*$nota['jumlah']) ;?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
	</div>
