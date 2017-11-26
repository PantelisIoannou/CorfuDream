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

    <title>Live the Myth - Corfu Dream</title>

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
   
    <div style="height: 85%;background-image:url(http://bit.ly/1Ro5lxj);background-size:cover;margin-bottom:0px;" class="bg"></div>
    <div style="height: 85%;background: transparent"class="jumbotron">
        <div class="row">

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

			<p class="text-header"style="margin-bottom:20px;">Live the Myth</p>

			<p style="font-size:19px;">
					Travel at your own speed between the myth and emerald blue of the Ionian Islands
					discovering the secret treasures that have to offer.

<br><br>
			With their superb beaches, excellent
			marinas and safe harbors, enthusiasts will have the experience of a lifetime."A different world, western Greece", that's how some described the Ionian Sea and its islands.
			The Ionians call them the 'Seven Islands', but there are many more of these emerald gems.

		<br><br>The island and islets parade themselves in front of you,
		with their emerald water and sea caves. Sailing and breathing in the sea of eternal history, the myths
		unfold with the waves. Odysseus - the king who wandered for years in search of his Ithaca, Poseidon the
		God of the Sea.



		<br><br>The Ionian shines bright before your eyes, the light
		caressing the coastline, docking in isolated beaches and secret coves. You'll be mesmerised by the different
		shades of blue.
    <br><br>
	The first aperitif of the evening is served in the lounge, cook on board
		or enjoy a few delicacies prepared by your private chef, celebrate your wedding, honeymoon or anniversary at sea
    <br><br>
		At night, walk along the harbours and Corfu town, through the cobblestone
		streets, restaurants, chic boutiques and bars. Savor the flavours of fresh fish and seafood, paired with local wines.
		Become one with the multicultural crowd of people, dancing until dawn

		<br><br>Live your myth!
		<br><br>From May until October the Ionian Sea is an open invitation for all!</p>

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
