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

    <title>Services - Corfu Dream</title>

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
	<?php include './php/R.php' ?>

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

   <div style=<?php echo '"background-image: url('. $image['SERVICES'] .');height: 85%;background-size: cover;"';?> class="bg"></div>
    <div class="jumbotron" style=<?php echo '"background:transparent;height: 85%;"';?> >
      <div class="row" style="margin-right:0;">
    <div class="content-title" style="margin-top:120px;">
      Everything you can imagine is real

    </div>
      <div>

          <a href="#"><i id="scroll" class="fa fa-angle-double-down"></i></a>

      </div>
        </div>
    </div>




    <section style="padding-top:0px;padding-bottom:0pxtext-align:center;"id="services" >

	<div class="row" style="margin-right:0px;">
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
			<p class="text-header" style="text-align:center;">myConcierge</p>
			<p style="padding-top:40px;">
					The original meaning of "concierge" is gatekeeper - a fitting word for whom holds the key to a memorable experience with Corfudream.
			</p>

					<p style="">Located in Corfu and intimately familiar with the islands' culture, our Concierge team provides an insider's perspective on preferred activities, excursions, and Corfu's many hidden treasures.
					Special care was given to the formation of Corfudream team as our members are Greek natives or people that have spent many years exploring the island as well as traveling throughout the world.
					</p>

					<p style="">From the beginning of your stay our Concierge will work with you directly to develop a package that is tailored made to your personal interests and needs.
					Whether you are planning a honeymoon retreat, a family vacation, a romantic getaway or a luxury vacation, your Concierge can plan your perfect customized service.
					</p>

					<p style="">From determining your specific interests and needs prior to travel, to facilitating transfers, 24/7 support throughout your stay, to post-travel follow-up, your Concierge's high-touch service gives you the freedom to relax and fully experience Corfu.
						Your Concierge will be a phone call (or e-mail!) away throughout your entire stay and will be more than happy to handle any of your needs, ensuring an enjoyable experience.
					</p>

					<p style="">Our team will share with enthusiasm their love for Corfu Island with you, in order to make your experience comfortably familiar and completely extraordinary.
					We promise an unparalleled experience that only a Greek friend could plan for you!
					</p>
		</div>
		<div class="col-md-3">
		</div>



	</div>
      </section>


      <section class="brightness" style=<?php echo '"padding-top:8%; padding-bottom:3%;background-image: url('. $image['SERVICES'] .');background-repeat:no-repeat;background-size: cover;"';?>>

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
              <input required name="firstname"style="height: 35px; width:100%; font-size:16px; margin: 10px 10px;" type="text" class="owners-form" placeholder="Your name">
                <input required type="email" name="email" style="height: 35px; width:100%; font-size:16px; margin: 10px 10px;" type="text" class="owners-form" placeholder="Your email">
                <input name="phone" style="height: 35px; width:100%; font-size:16px; margin: 10px 10px;" type="text" class="owners-form" placeholder="Phone Number">
                <textarea  required name="text" style="height: 90px; width:100%; font-size:16px; margin: 10px 10px;"class="owners-form" rows="6" placeholder="Tell us what you are looking for!"></textarea>
              <input style="margin-left: 10px;" class="form-submit"type="submit">
          </form>
          </div>
      </div>
    </div>
        </section>

    <!--

    <section class="second-act">
      <div id="alt-hover" style="width:33%; height:100px; float:left; margin: 100px 0px;" class="text-center">
        <i class="flaticon-info28"></i>
        <h3 style=" font-weight:bold;">Practical Info</h3>
      </div>
      <div id="alt-hover" style="width:34%; height:100px; float:left; margin: 100px 0px;" class="text-center">
        <i class="flaticon-social24"></i>
        <h3 style=" font-weight:bold;">Social Networks</h3>
      </div>
      <div id="alt-hover" style="width:33%; height:100px; float:left; margin: 100px 0px;" class="text-center">
        <i class="flaticon-conversation6"></i>
        <h3 style=" font-weight:bold">F.A.Q.</h3>
      </div>
    </section> -->

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
