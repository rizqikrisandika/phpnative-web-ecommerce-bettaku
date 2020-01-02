
<?php include "conn.php"; ?>

<body class="goto-here">
	<!-- END nav -->

	<div class="hero-wrap hero-bread" style="background-image: url('assets/images/background_3.jpg');">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-lg-2">
					
				</div>
				
				<div class="col-md-8 col-lg-10 order-md-last">
					<div class="row">
						
						<div class="col-sm-12 col-md-12 col-lg-4 ftco-animate ">
            <h2>Diagnosa</h2>
            <?php if (isset($_GET['error'])) {echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong>Ups! </strong> $_GET[error]
            </div>";} else { echo "";} ?>
            <form method="POST" action="index.php?bettaku=hasil" name="diagnosa" enctype="form-data/multipart">
            <?php 
              $query = mysqli_query($koneksi,"SELECT * FROM gejala ORDER BY kd_gejala ASC");
                  $no=0;
              while ($data=mysqli_fetch_array($query)) {
                  $a = $data['gejala'];
                      $no++;
            ?>
            <?php echo $no; ?>.    <input type="checkbox" value="<?php echo $data['kd_gejala'];?>" name="cek[]" /> <?php echo $data['gejala']; ?><br />
            <?php }?><br />
            <input type="submit" class="btn btn-medium btn-primary" value="Cek Diagnosa" name="proses" />
            </form>
						</div>
					</div>
					
				</div>


	</section>

</body>