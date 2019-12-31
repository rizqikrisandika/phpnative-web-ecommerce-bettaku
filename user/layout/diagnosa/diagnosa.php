
<?php

ob_start();

?>

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
    
    <div style="margin-right: 20px; align-self: center;" >
    
    <section id="ambiltes" style="margin-right: -20px;">   
    <center>
        <h2>Periksa kesehatan ikan cupangmu </h2>  
    </center>
        
       <!-- <div class="row ">
          <div class="col-lg-8 mx-auto">
			  
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">

                   
                        
                    </div>
                </div>
                    
                    <div class="row">
                        
                    </div>

                </div> -->
            <div style="align-self:center" class="container">
            <div  class="row">
            <!-- <div class="col-lg-8 col-lg-offset-2"> -->

                <form method="post">
                   
<!--  ini 1  -->  <hr class="star-primary"></hr>
                    <div class="row">
                    <div class="col-md-12">
                        <center>
                   <p>Apakah ikan kurang aktif?</p>
                   </div>
                        <div class="col-xs-1">
                            <input type="radio" name="q1"
                            value="<?php $Xg1=9/23; $g1=0; ?>" checked required>
                        </div>
                        <div class="col-xs-5">
                        Ya &nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="q1" 
                            value="<?php $Xg1=0; $g1=6/27; ?>" checked required>
                        </div>
                        <div class="col-xs-5">
                        Tidak   
                        </div>
                        </center>
                    </div>
                    <hr class="star-primary"></hr>

<!--  ini 2  -->
                    <div class="row">
                    <div class="col-md-12">
                   <center>
                   <p>Apakah warna ikan pucat?</p>
                   </div>
                        <div class="col-xs-1">
                            <input type="radio" name="q2"
                            value="<?php $Xg2=21/23; $g2=0; ?>" checked required>
                        </div>
                        <div class="col-xs-5">
                        Ya 
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="q2"
                            value="<?php $Xg2=0; $g2=16/27; ?>" checked required>
                        </div>
                        <div class="col-xs-5">
                        Tidak
                        </div></center>
                    </div>
                    <hr class="star-primary"></hr>

<!--  ini 3  -->
                    <div class="row">
                    <div class="col-md-12">
                   <center>
                   <p>Apakah sirip dan ekor ikan menguncup?</p>
                   </div>
                        <div class="col-xs-1">
                            <input type="radio" name="q3"
                            value="<?php $Xg3=11/23; $g3=0; ?>" checked required>
                        </div>
                        <div class="col-xs-5">
                        Ya
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="q3"
                            value="<?php $Xg3=0; $g3=10/27; ?>" checked required>
                        </div>
                        <div class="col-xs-5">
                        Tidak
                        </div></center>
                    </div>
                    <hr class="star-primary"></hr>
<!--  ini 4  -->
                    <div class="row">
                    <div class="col-md-12">
                   <center>
                   <p>Apakah nafsu makan ikan berkurang?</p>
                   </div>
                        <div class="col-xs-1">
                            <input type="radio" name="q4"
                            value="<?php $Xg4=9/23; $g4=0; ?>" checked required>
                        </div>
                        <div class="col-xs-5">
                        Ya
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="q4"
                            value="<?php $Xg4=0; $g4=6/27; ?>" checked required>
                        </div>
                        <div class="col-xs-5">
                        Tidak
                        </div></center>
                    </div>
                    <hr class="star-primary"></hr>
<!--  ini 5  -->
                    <div class="row">
                    <div class="col-md-12">
                   <center>
                   <p>Apakah mata ikan bengkak?</p>
                   </div>
                        <div class="col-xs-1">
                            <input type="radio" name="q5"
                            value="<?php $Xg5=15/23; $g5=0; ?>" checked required>
                        </div>
                        <div class="col-xs-5">
                        Ya
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="q5"
                            value="<?php $Xg5=0; $g5=14/27; ?>" checked required>
                        </div>
                        <div class="col-xs-5">
                        Tidak
                        </div></center>
                    </div>
                    <hr class="star-primary"></hr>
<!--  ini 6  -->
                    <div class="row">
                    <div class="col-md-12">
                   <center> 
                   <p>Apakah terdapat warna gelap/merah dipinggir sirip?</p>
                   </div>
                        <div class="col-xs-1">
                            <input type="radio" name="q6"
                            value="<?php $Xg6=14/23; $g6=0; ?>" checked required>
                        </div>
                        <div class="col-xs-5">
                        Ya
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="q6"
                            value="<?php $Xg6=0; $g6=19/27; ?>" checked required>
                        </div>
                        <div class="col-xs-5">
                        Tidak
                        </div></center>
                    </div>
                    <hr class="star-primary"></hr>
<!--  ini 7  -->
                    <div class="row">
                    <div class="col-md-12">
                   <center>
                   <p>Apakah sirip ikan rontok atau sobek?</p>
                   </div>
                        <div class="col-xs-1">
                            <input type="radio" name="q7"
                            value="<?php $Xg7=4/23; $g7=0; ?>" checked required>
                        </div>
                        <div class="col-xs-5">
                        Ya
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="q7"
                            value="<?php $Xg7=0; $g7=7/27; ?>" checked required>
                        </div>
                        <div class="col-xs-5">
                        Tidak
                        </div></center>
                    </div>
                    <hr class="star-primary"></hr>
<!--  ini 8  -->
				<div class="row">
                    <div class="col-md-12">
                   <center>
                   <p>Apakah terdapat bintik putih pada ikan?</p>
                   </div>
                    <div class="col-xs-1">
                    	<input type="radio" name="q8"
                        value="<?php $Xg8=10/23; $g8=0; ?>" checked="" required="">
                    </div>
                    <div class="col-xs-5">
                    Ya
                    </div>
                    <div class="col-xs-1">
                        <input type="radio" name="q8"
                        value="<?php $Xg8=0; $g8=18/27; ?>" required="">
                    </div>
                    <div class="col-xs-5">
                    Tidak
                    </div></center>
                    </div>
                    <hr class="star-primary"></hr>
<!--  ini 9  -->
                    <div class="row">
                    <div class="col-md-12">
                   <center>
                   <p>Apakah ikan menabrakan diri ke akuarium?</p>
                   </div>
                        <div class="col-xs-1">
                            <input type="radio" name="q9"
                            value="<?php $Xg9=15/23; $g9=0; ?>" checked required>
                        </div>
                        <div class="col-xs-5">
                        Ya
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="q19"
                            value="<?php $Xg9=0; $g9=18/27; ?>" checked required>
                        </div>
                        <div class="col-xs-5">
                        Tidak
                        </div></center>
                    </div>
                    <hr class="star-primary"></hr>
<!--  ini 10  -->
                    <div class="row">
                    <div class="col-md-12">
                   <center>
                   <p>Apakah perut ikan membengkak?</p>
                   </div>
                        <div class="col-xs-1">
                            <input type="radio" name="q10"
                            value="<?php $Xg10=18/23; $g10=0; ?>" checked required>
                        </div>
                        <div class="col-xs-5">
                        Ya
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="q10"
                            value="<?php $Xg10=0; $g10=21/27; ?>" checked required>
                        </div>
                        <div class="col-xs-5">
                        Tidak
                        </div></center>
                    </div>
                    <hr class="star-primary"></hr>
<!--  ini 11  -->
                    <div class="row">
                    <div class="col-md-12">
                   <center>
                   <p>Apakah ikan tidak bisa buang kotoran?</p>
                   </div>
                        <div class="col-xs-1">
                            <input type="radio" name="q11"
                            value="<?php $Xg11=12/28; $g11=0; ?>" checked required>
                        </div>
                        <div class="col-xs-5">
                        Ya                           
                        </div>
                        <div class="col-xs-1">
                            <input type="radio" name="q11"
                            value="<?php $Xg11=0; $g11=11/22;  ?>" checked required>
                        </div>
                        <div class="col-xs-5">
                        Tidak
                        </div></center>
                    </div>
                    <hr class="star-primary"></hr>


    <h4><input type="submit" name="submit"></h4>

</form>
                </div>
            </div>
            </div>

          </div>
      </div>
    </section>

<br>
<br>
<?php



    $Xpe = $Xg1*$Xg2*$Xg3*$Xg4*$Xg5*$Xg6;
    $Xfr = $Xg1*$Xg2*$Xg3*$Xg4*$Xg6*$Xg7;

    $Xws = $Xg1*$Xg2*$Xg3*$Xg4*$Xg8*$Xg9;
    $Xd = $Xg1*$Xg2*$Xg3*$Xg4*$Xg10*$Xg11;
///////////////////////////////////////////////////////////////////
    if ($Xpe) {
        $hasil1 = 'i';
    }else {
        $hasil1 = 'e';
    }
//////////////////////////////////////////////////////////////////
    if ($Xfr) {
        $hasil2 = 's';
    }else {
        $hasil2 = 'n';
    }
//////////////////////////////////////////////////////////////////
    if ($Xws) {
        $hasil3 = 't';
    }else {
        $hasil3 = 'f';
    }
//////////////////////////////////////////////////////////////////
    if ($Xd) {
        $hasil4 = 'p';
    }else {
        $hasil4 = 'j';
    }
//////////////////////////////////////////////////////////////////



    if (isset($_POST['submit'])) {
        header('Location: index.php?bettaku='.$hasil1.$hasil2.$hasil3.$hasil4);      
    }

?>


<br>
<br>

    

      
          
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>

      
</body>

<?php
ob_flush();
?>
