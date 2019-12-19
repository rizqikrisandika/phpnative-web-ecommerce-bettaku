<?php 
	$db = mysqli_query($koneksi,"SELECT * FROM pelanggan where email_pelanggan='".$_SESSION['pelanggan']."'");
	$data = mysqli_fetch_assoc($db);
?>
  <body class="goto-here">
		
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('assets/images/background_3.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Profile</span></p>
            <h1 class="mb-0 bread">Profile</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	<div class="row d-flex mb-5 contact-info">
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Name:</span> <?php echo $data['nama_pelanggan'] ?></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Username:</span> <?php echo $data['username_pelanggan'] ?></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Email:</span> <?php echo $data['email_pelanggan'] ?></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Phone:</span> <?php echo $data['nohp_pelanggan'] ?></p>
	          </div>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="#" class="bg-white p-5 contact-form">
              <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" readonly value="<?php echo $data['nama_pelanggan'] ?>">
              </div>
              <div class="form-group">
                <label for="">Username</label>
                <input type="text" class="form-control" readonly value="<?php echo $data['username_pelanggan'] ?>">
              </div>
              <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" readonly value="<?php echo $data['email_pelanggan'] ?>">
              </div>
              <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="form-control" readonly value="<?php echo $data['nohp_pelanggan'] ?>">
              </div>
              <div class="form-group">
                <label for="">Address</label>
                <textarea name="" id="" cols="30" rows="7" readonly class="form-control" placeholder="Message"><?php echo $data['alamat_pelanggan'] ?></textarea>
              </div>
              <div class="form-group">
                <button name="editprofile" class="btn btn-primary py-3 px-5">Edit</button>
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div class="bg-white">
             
            </div>
          </div>
        </div>
      </div>
    </section>

  
  </body>