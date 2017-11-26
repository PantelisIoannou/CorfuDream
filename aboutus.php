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

    <title>About Us - Corfu Dream</title>
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
	<link rel="stylesheet" href="css/parallax.css" type="text/css">
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

   <div style="height: 85%;background-image:url(http://bit.ly/1k2fYaB);background-size:cover;" class="bg"></div>
    <div style="height: 85%;background: transparent;" class="jumbotron">
        <div class="row" style="padding-left:-0px; margin-top:24%;">  <!--margin-top:335px; -->

			<p class="quotations" style="background: rgba(14, 188, 255, 0.49);
    margin: 0px 37%;
    border-radius: 3px; font-size:24px; margin-left:7%;text-align:left;">The easiest thing to do, is make things complicated.We keep it simple.</p>

		 <a href="#"><i id="scroll" class="fa fa-angle-double-down"></i></a>

        </div>
    </div>




    <section id="services">

	<div class="row"style="margin-right:0px;">
		<div class="col-md-3">
		</div>
		<div class="col-md-6" style="text-align:center;">

			<p class="text-header">About Us</p>
			<p style="font-size:20px;padding-top:40px; font-weight:300;">
			Established in 2014, Corfudream is an innovative newly launched company specialized in refined, elegant rentals and stylish yachting, created to offer an authentic and unparalleled guests experience.
      <br>
      <br>
      The unique architectural features of Corfu are at one and at the same time an ornament and a historical verification of the life of Corfiot's have led during the past. In the old town of Corfu visitors can still feel the flame of the Ionian Islanders.
			Our goal is to provide unique, sophisticated accommodation to guests by marketing beautiful, exceptional properties and yachts, inspiring discerning guests every step of their stay.
      <br>
      <br>
      Our portfolio offers to our guests a stylish break from daily routine.
			Because of our deep knowledge of the local market and our strong relationships within the local community, we are able to provide immaculately executed experiences and outstanding customer service.</p>
		</div>
		<div class="col-md-3">
		</div>
		</div>
      </section>

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
			scrollTop: $("#services").offset().top-40
		}, 900);
		});
	</script>

</body>

</html>
