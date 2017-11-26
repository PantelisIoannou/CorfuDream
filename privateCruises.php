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

    <title>Private Cruises - Corfu Dream</title>

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
    <link rel="stylesheet" href="css/form.css"/>
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

   <div style="height: 85%;background-image:url(http://bit.ly/1S8LOAv);background-size:cover;" class="bg"></div>
    <div style="height: 85%;background: transparent;"class="jumbotron">

			<div>

				  <a href="#"><i id="scroll" class="fa fa-angle-double-down"></i></a>

			</div>
        </div>
    </div>




    <section style="padding:0;"id="services">
<div class="container">
	<div class="row"style="margin-right:0px;">

		<div class="">
      <h2 class="title new-title-size" style="font-weight: 200;">Private Cruises</h2>
			<p style="padding-top:40px;">
        In addition to our regular tours we are proud to offer the finest of elegant cruises custom made to fit your needs. Our private cruises are available on an exclusive selection of stylish sailing and motor yachts and come with captain as well as hostess to make sure your every need is catered to!

<br>Our stylish cruises may include recommended itineraries or tailored made and can be one or more days depending on your schedule and needs.
<br><br>Just let us know your requirements and we will be pleased to help make your dream trip to the Corfu island one to never forget!
</p>
 		</div>
  </div>
      </section>

      <section id="contact" class="brightness" style="padding-top:8%; padding-bottom:3%; background-image:url(http://bit.ly/1S8LOAv); background-repeat:no-repeat;background-size:cover;">

  	<div class="row" style="margin-left:0px; margin-right:0px;">
  		<div class="col-md-5" style="color:#fff; padding-bottom: 50px;">
  				<h3 style="font-weight: 100;
          text-align: center;
          padding: 10px;
          margin-top: 50%;
          border-radius: 3px;">Contact us to help you!<br>
              Name your request and
              we'll get in touch with you within 48 hours</h3>
  		</div>
  		<div class="col-md-7" style="
      font-weight: 100;
      margin-top: 10px;
      text-align: center;
      padding: 10px;
      padding-bottom: 40px;
      border-radius: 3px;
  ">
  			<div class="holder" style="padding-left:25px; padding-right:25px;">
  				<form action="./mailtesting.php" enctype="multipart/form-data" method="POST" style="text-align:left;padding: 0 60px;">
  						<h1 style="color: rgb(83, 78, 77); font-size: 45px;font-weight: 100;"> Get in touch! </h1>
  					  <input name="name"style="height: 35px; width:100%; font-size:16px; margin: 10px 10px;" type="text" class="owners-form" placeholder="Your name">
  						  <input name="email" style="height: 35px; width:100%; font-size:16px; margin: 10px 10px;" type="text" class="owners-form" placeholder="Your email">
  						  <input name="phone" style="height: 35px; width:100%; font-size:16px; margin: 10px 10px;" type="text" class="owners-form" placeholder="Phone Number">
  						  <textarea  name="text" style="height: 90px; width:100%; font-size:16px; margin: 10px 10px;"class="owners-form" rows="6" placeholder="Tell us what you are looking for!"></textarea>
  						<input style="margin-left: 10px;" class="form-submit"type="submit">
  				</form>
  			  </div>
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
