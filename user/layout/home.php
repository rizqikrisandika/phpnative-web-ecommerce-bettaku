<section id="home-section" class="hero">
	<div class="home-slider owl-carousel">
		<div class="slider-item js-fullheight">
			<div class="overlay"></div>
			<div class="container-fluid p-0">
				<div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end"
					data-scrollax-parent="true">
					<img class="one-third order-md-last img-fluid cs" src="assets/images/background_1.png" alt="">
					<div class="one-forth d-flex align-items-center ftco-animate"
						data-scrollax=" properties: { translateY: '70%' }">
						<div class="text">
							<div class="horizontal">
								<h1 class="mb-4 mt-3">Betta's Collection 2019</h1>
								<p class="mb-4">A small river named Duden flows by their place and supplies it with the
									necessary regelialia. It is a paradisematic country.</p>
								<p>

									<?php if(isset($_SESSION["pelanggan"])): ?>
									<a href="index.php?bettaku=shop" class="btn btn-primary">SHOP NOW</a>
									<?php else: ?>
									<a href="index.php?bettakuu=signup-user" class="btn btn-primary">SIGN UP NOW</a>
									<?php endif ?>
									
								</p>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="slider-item js-fullheight">
			<div class="overlay"></div>
			<div class="container-fluid p-0">
				<div class="row d-flex no-gutters slider-text align-items-center justify-content-end"
					data-scrollax-parent="true">
					<img class="one-third order-md-last img-fluid cs" src="assets/images/background_2.png" alt="">
					<div class="one-forth d-flex align-items-center ftco-animate"
						data-scrollax=" properties: { translateY: '70%' }">
						<div class="text">
							<div class="horizontal">
								<h1 class="mb-4 mt-3">New Betta's Collection</h1>
								<p class="mb-4">A small river named Duden flows by their place and supplies it with
									the
									necessary regelialia. It is a paradisematic country.</p>
								<p>
									<?php if(isset($_SESSION["pelanggan"])): ?>
									<a href="index.php?bettaku=shop" class="btn btn-primary">SHOP NOW</a>
									<?php else: ?>
									<a href="index.php?bettakuu=signup-user" class="btn btn-primary">SIGN UP NOW</a>
									<?php endif ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
	<div class="container">
		<div class="row no-gutters ftco-services">
			<div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services p-4 py-md-5">
					<div class="icon d-flex justify-content-center align-items-center mb-4">
						<span class="flaticon-bag"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Free Shipping</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
							there live the blind texts.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services p-4 py-md-5">
					<div class="icon d-flex justify-content-center align-items-center mb-4">
						<span class="flaticon-customer-service"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Support Customer</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
							there live the blind texts.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services p-4 py-md-5">
					<div class="icon d-flex justify-content-center align-items-center mb-4">
						<span class="flaticon-payment-security"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Secure Payments</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
							there live the blind texts.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php

	$db1 = mysqli_query($koneksi,"SELECT * FROM pelanggan where email_pelanggan='".$_SESSION['pelanggan']."'");
	$data1 = mysqli_fetch_assoc($db1);

?>

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-center mb-3 pb-3">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">New Betta Arrival</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php $db = mysqli_query($koneksi,"SELECT * from produk join kategori on produk.id_kategori=kategori.id_kategori order by produk.tanggal_produk desc LIMIT 8");?>
			<?php while($perproduk = mysqli_fetch_assoc($db)){?>
			<?php if($perproduk['stok_produk']=='1'):?>
			<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate ">
				<div class="product d-flex flex-column">
					<a href="index.php?bettaku=productdetail&id=<?php echo $perproduk['id_produk']; ?>"
						class="img-prod"><img class="img-fluid" src="ls/images/<?php echo $perproduk['foto_produk'];?>"
							alt="Colorlib Template">
						<div class="overlay"></div>
					</a>
					<div class="text py-3 pb-4 px-3">
						<div class="d-flex">
							<div class="cat">
								<span><?php echo $perproduk['nama_kategori'];?></span>
							</div>
						</div>
						<h3><a href="index.php?bettaku=productdetail&id=<?php echo $perproduk['id_produk']; ?>"><?php echo $perproduk['nama_produk'];?></a></h3>
						<div class="pricing">
							<p class="price"><span>Rp. <?php echo number_format($perproduk['harga_produk']);?></span>
							</p>
						</div>
						<p class="bottom-area d-flex px-3">
							<?php if(isset($_SESSION["pelanggan"])): ?>
							<?php if($data1['id_pelanggan']!==$perproduk['id_pelanggan']): ?>
							<a href="index.php?bettaku=addcarthome&id=<?php echo $perproduk['id_produk']; ?>"
								class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i
										class="ion-ios-add ml-1"></i></span></a>
							<a href="index.php?bettaku=buy&id=<?php echo $perproduk['id_produk']; ?>"
								class="buy-now text-center py-2">Buy now<span><i
										class="ion-ios-cart ml-1"></i></span></a>
							<?php endif?>
							<?php else: ?>
							<a href="index.php?bettaku=cartlogin" class="add-to-cart text-center py-2 mr-1"><span>Add to
									cart <i class="ion-ios-add ml-1"></i></span></a>
							<a href="index.php?bettaku=cartlogin" class="buy-now text-center py-2">Buy now<span><i
										class="ion-ios-cart ml-1"></i></span></a>
							<?php endif ?>
						</p>
					</div>
				</div>
			</div>
			<?php endif?>
			<?php ?>
			<?php } ?>
		</div>
	</div>
</section>

<section class="ftco-gallery">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 heading-section text-center mb-4 ftco-animate">
				<h2 class="mb-4">Follow Us On Instagram</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
					the blind texts. Separated they live in</p>
			</div>
		</div>
	</div>
	<div class="container-fluid px-0">
		<div class="row no-gutters">
			<div class="col-md-4 col-lg-2 ftco-animate">
				<a href="assets/images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center"
					style="background-image: url(assets/images/gallery-1.jpg);">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-lg-2 ftco-animate">
				<a href="assets/images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center"
					style="background-image: url(assets/images/gallery-2.jpg);">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-lg-2 ftco-animate">
				<a href="assets/images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center"
					style="background-image: url(assets/images/gallery-3.jpg);">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-lg-2 ftco-animate">
				<a href="assets/images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center"
					style="background-image: url(assets/images/gallery-4.jpg);">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-lg-2 ftco-animate">
				<a href="assets/images/gallery-5.jpg" class="gallery image-popup img d-flex align-items-center"
					style="background-image: url(assets/images/gallery-5.jpg);">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-lg-2 ftco-animate">
				<a href="assets/images/gallery-6.jpg" class="gallery image-popup img d-flex align-items-center"
					style="background-image: url(assets/images/gallery-6.jpg);">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>