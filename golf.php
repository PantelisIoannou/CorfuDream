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

    <title>Golfing - Corfu Dream</title>

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

  <div style="height: 85%;background-image:url(http://images.wisegeek.com/golfing-on-golf-course.jpg);background-size:cover;margin-bottom:0px;" class="bg"></div>
    <div style="height: 85%;background: transparent;"class="jumbotron">
        <div class="row">

			<div>

				  <a href="#" id="scroll" class="fa fa-angle-double-down"></a>

			</div>
        </div>
    </div>




    <section style="padding-top:0px;padding-bottom:0px; padding-bottom:0px;"id="services">

	<div class="row"style="padding-right:0px;">
		<div class="col-md-3">
		</div>
		<div class="col-md-6" style="text-align:center;">

			<p class="text-header">Golfing in Corfu</p>
			<p style="font-size:19px;">
					Golfing in Corfu is a delightful experience, which has flourished in recent years. Corfu’s 18-hole golf course in located in Ropa valley
The variety of Tees means that the course is suitable for all levels of player. From the front Tees there are no long Carries, whilst at almost 7000 yards from back it is a real test.
		<br><br>The course is a flat parkland style with numerous streams and lakes to be negotiated. Although it is built on a relatively small piece of land, the trees between the holes often make you think you have the course to yourself.

		<br><br>The Club has a good supply of trollies and electric trollies to hire. Buggies are also available, but should be booked in advance. Clubs and lockers can also be hired.
Tom Scott, former Editor of ‘’Golf Illustrated ‘’ and founder member of the Association of Golf writers, was a great lover of the island of Corfu and did much to promote Corfu Golf Club.



				<br><br> In his memory, the club provided a special seat with a plaque and planted a tree in his honor at the first tee where he spent so many happy hours during the championships, encouraging players and giving many the benefit of his caustic Scottish wit. As a further memorial, the Tom Scott Challenge Cup for senior players is held during the championship.


		<br><br>Unique landscape offers beauty in abundance to please the eye while you exercise your body and mind. Add to all this, the wonderful climate and sunshine throughout the year, as well as the rich Corfiot cuisine to combine a holiday with your beloved sport and complete the experience of golfing in one of the most beautiful landscapes in Greece.
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
