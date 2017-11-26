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

    <title>Footsteps of tradition - Corfu Dream</title>

	<link rel="icon" type="image/ico" href="img/cd.ico"

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	  <link rel="stylesheet" type="text/css" href="js/slick/slick.css"/>
  	<link rel="stylesheet" type="text/css" href="js/slick/slick-theme.css"/>
  	<link rel="stylesheet" href="ind/flaticon.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="fonts/house.css">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
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

	<style>
	#quote-carousel .carousel-control {
		background: none;
		color: #FFF;
		font-size: 2.3em;
		text-shadow: none;
		margin-top: 30px;
	}
	</style>

</head>



<body id="page-top">

    <!-- Navbar -->
	 <?php $navbar = new Navbar(); ?>
	 <!-- Navbar End -->

   <div style="height: 85%;background-image:url(http://bit.ly/1NpgwC5);background-size:cover;" class="bg"></div>
    <div style="height: 85%;background: transparent;"class="jumbotron">
        <div class="row" style="margin-right:0px;">

			<div>

				  <a href="#"><i id="scroll" class="fa fa-angle-double-down"></i></a>

			</div>
        </div>
    </div>




    <section style="padding-top:0px;padding-top:0px;padding-bottom:0px;"id="services">

	<div class="row"style="margin-right:0px;">
		<div class="col-md-3">
		</div>
		<div class="col-md-6" style="text-align:center;">

			<p class="text-header"style="margin-bottom:20px;">Footsteps of tradition</p>
			<p style="font-size:19px;">Corfu is an island with a multifarious personality. The time-honored love of its inhabitants for the arts, music and culture in general has today been, harmoniously combined with the cultivation of the olive, production of local products and last but not least the steadily growing tourism trade which has bestowed its largess upon the island.
			<br><br>

			The unique architectural features of Corfu are at one and at the same time an ornament and a historical verification of the life of Corfiot's have led during the past. In the old town of Corfu visitors can still feel the flame of the Ionian Islanders.
				This is a place more suited the Greek national Anthem than any other being its birthplace really, and music and literature, theater, dance and tradition have survived right to the present with a beauty that is unique and with a special flavor that is peculiar to the Ionian islands.

      <br><br>
			The Corfiot's have learned to honor their heritage and today the imprint of these past times lives on its timeless traditions. You too, can experience them in rural parts of the country by participating in village feasts or the moving and deeply religious celebration of Easter.
			<br><br>

			Corfu is not just the past. You will also be delighted by its modern culture and arts, to be found in the islands museums and art galleries, as well as the numerous of events held at open-air spaces, fortresses and squares around the Island.

			</p>

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

	<script type="text/javascript" src="js/slick/slick.min.js"></script>

	<script>
	$("#scroll").click(function() {
		$('html, body').animate({
			scrollTop: $("#services").offset().top-40
		}, 900);
		});
	</script>
	<script>
	$("#scroll2").click(function() {
		$('html, body').animate({
			scrollTop: $("#contact").offset().top-40
		}, 900);
		});
	</script>

	<script>

		$('.sld').slick({
		  dots: false,
		  infinite: false,
		  speed: 300,
		  slidesToShow: 2,
		  slidesToScroll: 1,
		  responsive: [
			{
			  breakpoint: 500,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		  ]
		});

	</script>
</body>

</html>
