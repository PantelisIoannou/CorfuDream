<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include './php/SEO.php' ?>

	<?php echo $description;
		  echo $keywords; ?>
    <meta name="author" content="">

    <title>Yachting - Corfu Dream</title>
	<link rel="icon" type="image/ico" href="img/cd.ico"

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/card.css">
    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
	<link rel="stylesheet" href="css/accommodation.css" type="text/css">
	<link rel="stylesheet" href="css/new.css" type="text/css">
	<!-- PHP Connections -->
	<?php include './php/navbar.php' ?>
	<?php include './php/footer.php' ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <!-- Navbar -->
	 <?php $navbar = new Navbar(); ?>
	 <!-- Navbar End -->

	 <div style="height: 85%;background-image: url('http://bit.ly/1NwT1oy');background-size: cover;"class="jumbotron">
     <div class="wrpper">
        <p class="hidden" id="slide">Luminosity and Transparency</p>
    </div>
        <div class="row" style="margin-right:0px;">
			<div class="content-title" style="margin-top:-24%;font-weight: 100;">
				 Yachts Collection

			</div>
			<div>

				  <!--<p style="margin-top:10%;" id="scroll" class="btn btn-default new-btn">View Villas</p>-->
				  <a href="#"><i id="scroll" class="fa fa-angle-double-down"></i></a>

			</div>
        </div>
    </div>

    <div class="row" style="margin-right:0px;padding-right:0px;" id="villas">
        <p style="font-size:50px; text-align:center; font-weight:100;color: #333;margin-bottom:0px;">Our Collection</p>
        <p style="text-align:justify; padding-bottom:0px; font-size:20px;font-weight:300;padding-left:50px;padding-right:50px;">
          <br>Planning a holiday and want do to something different?
          <br>How about spending a day on the sea?
          <br>Why not charter one of our yachts for a day or even a few?
          <br>Whether you explore the coves, "learn the ropes" or simply have a relaxing day, we will have something to offer you.
          <br>Don’t miss out the opportunity to explore all the Corfu has to offer!
          <br>Just let us know your requirements and we will take care of the rest!

        </p>
    </div>

    <div class="container" style="padding-top:0px;">
    <div class="row">



	<?php
		createVilla("Yacht Aiolis","Boat certified and insured","6","Upon Request","Greece, Corfu, Marina Gouvia","./yacht.php?yacht=aiolis","https://lh3.googleusercontent.com/iPLMbGOc63dfyoQTBTsj9LXNY41HD7_l91BOOIqbYx5v0NMFZmZBcfrYf7K-ZC-39Rm3uv15Rriy149DJcrsDFpwWaMDrbnpri8izORaG7_t2JvNNFpTRPiVZ8N1j__djLMQOBS9NkMkpz85KeuZgYt31b_WIG5bM_OM4WeoHNgdAriNhxHUgUa3tbGolQAoZRoP8VQXdUZkkqfWT8RkKjXmj3rg59uQUCKIrtGse7oS2oPkKFl8WoyOvvi529n9YMJaPrtgxUegvB0R_xHD1VRKoovumx2Lc2xk0qLzG6TyBn_xAgn05ioCUSGtv4Fm1mS-m75o1A0cBTfraNl4l5GF1gs0_F5RoSXnnGWg7rsJQwZsNOrMqjegSfiA8dSMcUXjQNlLO9lIC4XJ-6NXIPmfSoDbuRW2RX-4SDA663YMyTtnBpjQLVGABBSNrTFPbuR6_b45KTmZ5uXmt7ybrFFVxzN-M_ZFeWbn1SPc9iPvt6cuobAcpSlkWFfnk4jUAeVidIXbprhlb0-DdtZ7gq-Ay16sU_8Jq7i8QPRE_9cg1wIXZBL8Ymh_IJTrIb60nNfU=w1002-h643-no");
    createVilla("Yacht Skyfall","Boat certified and insured","9","Upon Request","Greece, Corfu, Marina Gouvia","./yacht.php?yacht=skyfall","https://lh3.googleusercontent.com/EQcAr-z862xhgZsjteprp61t3cd4JmAZjenfobbTPKqhFdu_mynG9mCGpljlc9WDiI9M6RWQTfA-M5yRoEneJJo-T84JvI6AcGzrZ4-1ws1WgE7ELqkURbZQhe9nMyw8kHT8KWtd2RV-YJ9LUXddpv9FBOlji8KLPHFlZg_NWAmTXJ94n0vbqH8lB4XfG4XLkVI0Ks6z2kTQd4u-dJMJ0JbyHonvUWOcR1H6KV0gcxaxdtXMCcI5SGllVKCRujn_yUvCssDvGad82ET7tBwI8VHJKTjIvK8izlrUO-BkkU_N7pYFgzTNshkPfNXE6spBWGCO0rDwAJRfTpRXZybSOu5Qt2d2TfEWQynLiSpCY4E4rMK0vNOrVlOPy7HKNA7TsQftDzmDiaLbG9Wafde8ONt1Lj4IGouCqQQY_pYMvdOFd57L08meQGFAHtG4u63kgreJ6vwmnJyG4HaguuxNaLbiVZGjpP-_MVNP9zsVY8S3sV61fhPfJv70icOxsH_XrMjDCVvuXr8Dsn8mFAmbaEjuyWsw_3v7QjhDjQwPjyRiLjsbk2uavJkIIxroKSnMchBz=w1377-h920-no");


	function createVilla($name, $id, $persons, $price, $location, $url, $img){

		echo '<div class="col-md-6">
      <div class="card-section">
		<article class="card">
		  <header class="card__thumb" style="background-image: url('.$img.');background-size: cover;">

		  </header>
		  <div class="card__body">
			<div class="card__category">New Addition</div>
			<p class="card__title"><a href="http://46.101.142.74/corfudream/room.php">'. $name .'</a></p>

		  </div>
		  <footer class="card__footer">
		  <div class="left-div width-50">
		  <div class="card__subtitle"><i class="fa fa-anchor"></i>'.$location.'
		  </div>
		  <div class="card__subtitle"><span class="tourist-license">'.$id.'</span>
			<ul class="acc-list inline">
				<li><span>'.$persons.' </span><i class="fa fa-male"></i> </li>
				<li></li>
				<li>Price: '.$price.'</li>
			</ul>
			</div>
    </div><a href="'.$url.'"><button type="button" class="btn btn-default btn-right">View Yacht</button></a>
			<div class="right-div width-50">



			</div>
		   </footer>
		</article>
		</div>
	</div>';
	}
	?>
    </div>
  </div><!-- /container -->



    <!--Footer-->
    <?php $footer= new Footer(); ?>
	<!--Footer End-->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

	<script>
	$("#scroll").click(function() {
		$('html, body').animate({
			scrollTop: $(".container").offset().top-40
		}, 900);
		});

    $(document).ready(function(){
      $('.hidden').fadeIn(1000).removeClass('hidden');
    });
</script>

</body>

</html>
