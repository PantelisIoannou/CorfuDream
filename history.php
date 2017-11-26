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

    <title>Origins - Corfu Dream</title>

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

    <div style="height: 85%;background-image:url(http://bit.ly/1YjSECE);background-size:cover; margin-bottom:0px;" class="bg"></div>
    <div style="height: 85%;background: transparent;"class="jumbotron">
        <div class="row">
			<div class="content-title col-md-12" style="position:absolute;top:35%;">
				A culinary experience

			</div>
			<div>

				 <a href="#"><i id="scroll" class="fa fa-angle-double-down"></i></a>

			</div>
        </div>
    </div>




    <section style="padding-top:0px;padding-bottom:0px;"id="services">

	<div class="row"style="padding-right:0px;">
		<div class="col-md-3">
		</div>
		<div class="col-md-6" style="text-align:center;">

			<p class="text-header">In search of the origins </p>

			<p style="font-size:19px;padding-top:40px;">
					You’ve come to an island blessed with a rare Mediterranean beauty, which unfolds in an extraordinary diversity of landscapes and seascapes, opening your horizons to every possible kind of experience, not least gastronomical. Forget that the Greek sun and sea usually refer to beaches. Think instead of the delicious things they produce, from the miraculous olive tree to the lowliest mollusc.

      <br><br>
			Corfu promises to be a culinary experience that you’ll never forget. Here you’ll take part in a game of discovering new tastes and aromas, new combinations of foods, new fruits of the earth. The gastronomy here will excite you: colorful authentic Mediterranean cuisine, Corfiot local products, fine wines, fresh local beer and local spirits.
			<br><br>
			Corfu has its unique specialities that have evolved over time from the interplay of necessity and invention, from raw materials that grew naturally in harsh or lush environments, from passersby – invaders or refugees – who introduced new ideas, and of wonderful vegetarian and vegan dishes. Come and discover Corfiot cuisine in all its manifestations:  traditional or modern, sophisticated or simple, one thread connects all the food you will eat here.
		    <br></p>
			<h2 style="font-size:30px; font-weight:300; color:#000;">Gastronomic tradition in Corfu</h2>
			<p style="font-size:19px;padding-top:20px;">
			Seek out local products, bend to the ancient culinary tradition of a universal culture, exchange treats with your neighbors as you drink wine made from exquisite local grapes, have fun at lunch parties on Sundays and holidays that last till evening, enjoying traditional dishes that have been seasoned with love and special care.
			<br><br>
			Turn your exploration of the flavors of Corfu into an exciting gastronomic odyssey.
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
