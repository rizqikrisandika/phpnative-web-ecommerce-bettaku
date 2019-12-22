
  <body class="goto-here">
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('assets/images/background_3.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Shop</span></p>
            <h1 class="mb-0 bread">Shop</h1>
          </div>
        </div>
      </div>
	</div>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-8 col-lg-10 order-md-last">
    				<div class="row">
					<?php $db = mysqli_query($koneksi,"SELECT p.id_produk,p.nama_produk,p.harga_produk,p.foto_produk,k.id_kategori,k.nama_kategori from produk p join kategori k on p.id_kategori=k.id_kategori order by p.tanggal_produk desc");?>
					<?php while($perproduk = mysqli_fetch_assoc($db)){?>
						<div class="col-sm-12 col-md-12 col-lg-4 ftco-animate ">
							<div class="product d-flex flex-column">
								<a href="#" class="img-prod shop"><img class="img-fluid" src="ls/images/<?php echo $perproduk['foto_produk'];?>" alt="Colorlib Template">
									<div class="overlay"></div>
								</a>
								<div class="text py-3 pb-4 px-3">
									<div class="d-flex">
										<div class="cat">
											<span><?php echo $perproduk['nama_kategori'];?></span>
										</div>
									</div>
									<h3><a href="#"><?php echo $perproduk['nama_produk'];?></a></h3>
									<div class="pricing">
										<p class="price"><span>Rp. <?php echo number_format($perproduk['harga_produk']);?></span></p>
									</div>
									<p class="bottom-area d-flex px-3">
									<?php if(isset($_SESSION["pelanggan"])): ?>
										<a href="index.php?bettaku=addcart&id=<?php echo $perproduk['id_produk']; ?>" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
										<a href="index.php?bettaku=buy&id=<?php echo $perproduk['id_produk']; ?>" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
									<?php else: ?>
										<a href="index.php?bettaku=cartlogin" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
										<a href="index.php?bettaku=cartlogin" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
									<?php endif ?>

										
									</p>
								</div>
							</div>
						</div>
						<?php ?>
					<?php } ?> 
		    		</div>
		    		<div class="row mt-5">
		          <div class="col text-center">
		            <div class="block-27">
		              <ul>
		                <li><a href="#">&lt;</a></li>
		                <li class="active"><span>1</span></li>
		                <li><a href="#">2</a></li>
		                <li><a href="#">3</a></li>
		                <li><a href="#">4</a></li>
		                <li><a href="#">5</a></li>
		                <li><a href="#">&gt;</a></li>
		              </ul>
		            </div>
		          </div>
		        </div>
		    	</div>

		    	<div class="col-md-4 col-lg-2">
		    		<div class="sidebar">
							<div class="sidebar-box-2">
								<h2 class="heading">Categories</h2>
								<div class="fancy-collapse-panel">
								<ul class="navbar-nav ml-auto">
									<li class="nav-item"><a href="index.php?bettaku=home" class="nav-link">Plakat</a></li>
									<li class="nav-item"><a href="index.php?bettaku=home" class="nav-link">Halfmoon Plakat</a></li>
									<li class="nav-item"><a href="index.php?bettaku=home" class="nav-link">Halfmoon</a></li>
									<li class="nav-item"><a href="index.php?bettaku=home" class="nav-link">Slayer</a></li>
								</ul>
						</div>
    			</div>
    		</div>
    	</div>
    </section>
    
  </body>

  