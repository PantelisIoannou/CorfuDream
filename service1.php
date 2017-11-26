<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{service.name}} - Corfu Dream</title>
	
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
	 
	 
    <div style="margin-bottom:0px;"class="jumbotron">
        <div class="row">
			<div class="content-title" style="margin-top:120px;">
				 RESTAURANT RESERVATIONS 
				 		 
			</div>
			<div>
				
				  <p style="margin-top:10%;"id="scroll" class="btn btn-default">Read More</p>
			
			</div>
        </div>
    </div>




    <section style="padding-top:60px;"id="services">
	
	<div style="padding-left:350px; padding-right:350px;"class="row text-center">
		
			<h2 style="font-size:35px; font-weight:bold;">myConcierge</h2>
			<p style="font-size:20px;padding-top:40px;">
					The original meaning of "concierge" is gatekeeper - a fitting word for whom holds the key to a memorable experience with myCorfudream.
			</p>
		
					<p style="font-size:20px;">Located in Corfu and intimately familiar with the islands' culture, our Concierge team provides an insider's perspective on preferred activities, excursions, and Corfu's many hidden treasures. 
					Special care was given to the formation of myCorfudream team as our members are Greek natives or people that have spent many years exploring the island as well as traveling throughout the world.  
					</p>

					<p style="font-size:20px;">From the beginning of your stay our Concierge will work with you directly to develop a package that is tailored made to your personal interests and needs. 
					Whether you are planning a honeymoon retreat, a family vacation, a romantic getaway or a luxury vacation, your Concierge can plan your perfect customized service.
					</p>

					<p style="font-size:20px;">From determining your specific interests and needs prior to travel, to facilitating transfers, 24/7 support throughout your stay, to post-travel follow-up, your Concierge's high-touch service gives you the freedom to relax and fully experience Corfu.
						Your Concierge will be a phone call (or e-mail!) away throughout your entire stay and will be more than happy to handle any of your needs, ensuring an enjoyable experience.
					</p>

					<p style="font-size:20px;">Our team will share with enthusiasm their love for Corfu Island with you, in order to make your experience comfortably familiar and completely extraordinary. 
					We promise an unparalleled experience that only a Greek friend could plan for you!
					</p>
			
		
	</div>	
      </section>

	<section style="padding-bottom:0px;padding-top:10px;height:525px; background-image:url(./img/blur.jpg); background-repeat:no-repeat;background-size:cover;">
	<form style="padding-left:400px; padding-right:400px;"action="action_page.php">
		  <br>
		  <div class="row">
			<h2 style="color:#fff; text-align:center;">Send us a message</h2>
		  <div style="padding-left:15%;"class="col-sm-6">
			  <span style="font-weight:bold; font-size:15px; color:#fff; padding-bottom:10px;">First Name</span><br>
			  <input style="height:35px; width:200px;" type="text" name="firstname" placeholder="*Required" ><br><br>
			  <span style="font-weight:bold; font-size:15px; color:#fff; padding-bottom:10px;">Email</span><br>
			  <input style="height:35px; width:200px;" type="text" name="email" placeholder="*Required">
		  </div>
		  <div  class="col-sm-6">
			  <span style="font-weight:bold; font-size:15px; color:#fff; padding-bottom:10px;">Last Name</span><br>
			  <input style="height:35px; width:200px;" type="text" name="lastname" placeholder="*Required" ><br><br>
			  <span style="font-weight:bold; font-size:15px; color:#fff; padding-bottom:10px;">Phone Number</span><br>
			  <input style="height:35px; width:200px;" type="text" name="phone_number" placeholder="Phone Number">
			  			 
		  </div>
		  <div style="padding-left:15%;" class="col-sm-3" style="padding-top:20px;">
		  <br>
			  <span style="font-weight:bold; font-size:15px; color:#fff; padding-bottom:10px;">Comments</span><br>
			  <input type="text"  style=" width:475px; height:150px;"name="message" placeholder="">
			  <br><br>
	
		  <input type="submit" style="margin-left:20%;" class="btn btn-default" value="Submit"> 
		  </div>
		    </div>

		  

		 
		</form>
	</section>
 
    <!--

    <section class="second-act">
      <div id="alt-hover" style="width:33%; height:100px; float:left; margin: 100px 0px;" class="text-center">
        <i class="flaticon-info28"></i>
        <h3 style="font-size:20px; font-weight:bold;">Practical Info</h3>
      </div>
      <div id="alt-hover" style="width:34%; height:100px; float:left; margin: 100px 0px;" class="text-center">
        <i class="flaticon-social24"></i>
        <h3 style="font-size:20px; font-weight:bold;">Social Networks</h3>
      </div>
      <div id="alt-hover" style="width:33%; height:100px; float:left; margin: 100px 0px;" class="text-center">
        <i class="flaticon-conversation6"></i>
        <h3 style="font-size:20px; font-weight:bold">F.A.Q.</h3>
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
