<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Accommodation - Corfu Dream</title>
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

    <div class="container">
    <div class="row">
	<h2>Our Collection </h2>
	
	<?php
		createVilla("Villa Aurora","2000","Corfu","img/au3.jpg");
		createVilla("Villa Barbati","2000","Corfu","img/au2.jpg");
		createVilla("Villa Aurora","2000","Corfu","img/au1.jpg");
		createVilla("Villa Aurora","2000","Corfu","img/au4.jpg");
		createVilla("Villa Aurora","2000","Corfu","http://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-9060.jpg");
		createVilla("Villa Aurora","2000","Corfu","http://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-169732.png");
		createVilla("Villa Aurora","2000","Corfu","http://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-169732.png");
		createVilla("Villa Aurora","2000","Corfu","http://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-169732.png");


	function createVilla($name, $price, $location, $img){

		echo '<div class="col-md-6">
      <div class="card-section">
		<article class="card">
		  <header class="card__thumb">
			<a href="http://46.101.142.74/corfudream/room.php"><img class="head-img" src="'. $img .'"/></a>
		  </header>
		  <div class="card__body">
			<div class="card__category">New Addition</div>
			<h3 class="card__title"><a href="http://46.101.142.74/corfudream/room.php">'. $name .'</a></h3>
			
		  </div>
		  <footer class="card__footer">
		  <div class="left-div width-50">
		  <div class="card__subtitle">
		  <img width="30px" src="http://bit.ly/1Tcle8d" style="
			-webkit-filter: grayscale(100%);
			filter: grayscale(100%);"/> BAR 001
			<ul class="acc-list inline">
				<li><span>2 </span><i class="fa fa-male"></i> </li>
				<li></li>
				<li> &euro;1,500 - &euro;2,000 / night</li>
			</ul>
			</div>
			</div>
			<div class="right-div width-50">
			<a href="http://46.101.142.74/corfudream/room.php">
			<button type="button" class="btn btn-default btn-right">View Villa</button>
			</a>
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

</body>

</html>
