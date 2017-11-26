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

    <title>Beach Front Collection - Corfu Dream</title>

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
	<link rel="stylesheet" href="css/card.css">
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

   <div style="height: 85%;background-image:url(http://bit.ly/1RRBa0R);background-size:cover;" class="bg"></div>
    <div style="height: 85%;background: transparent;"class="jumbotron">
      <div class="wrpper">
         <p class="hidden" id="slide">A moment to face the sun</p>
     </div>
        <div class="row">
			<div class="content-title" style="margin-top:-26%;font-weight: 100;">
				 Beach Front Retreats
			</div>
			<div>

				  <!--<i class="fa fa-angle-double-down"></i>-->
				  <a href="#"><i id="scroll" class="fa fa-angle-double-down"></i></a>

			</div>
        </div>
    </div>

	<div id="villas" class="container">
    <div class="row">
	<?php
		createVilla("Villa Sissy","0829K121K77826001","6","&euro; 750 - &euro;1,250","Greece, Corfu, Dassia","./room.php?villa=sissy","https://lh3.googleusercontent.com/lhguGQcBhT1CE20fpG-BMdLzA2En2MHo7IPj4KGY9W7GlrdIEQ0ZCicjCpiTBZmvU0Qq-3TxAQdSgVQuQSSW7mq5wp8E_ZmQc1dvp05xFTiSVxmWGHmsYJVM1ag6Y0eT3WQjwusVAZSQ21dD4HiUsvGYZRsZPN6xUavbZ209eKb_VK9vFaRxLSBhNHrqghOcpvJpASvaV6gBq3n23jEpXHrDPOOFFs5jwObzbOpSn1mUO2QpVunhcECnNxw201FsOPtFl5c9ryX-86_96UF_TPgSFSfCZ27nxGzMU0jb_QiPfSUimUevxeL1FUW0UThajMIwrqhg03CAkaYS5CRVCJL4TqWe7IP-gVTDmtyz1v7-uaFHtW1jlKrskETqprB0bzDcfjkihkOiIJe--UCjO0ViXlBVqZQPS5qj4QHd1pYnZhA5-tzP7qQz6Kl_Q4XEnOdwf6a3mzYnj8ElvPb4ujgIZ3WBhKkoV1BTqyNoAgnrUFjxWL3H6wUBHBRiiEK5L8sO8ocWLbi-eOy9P2CsbX4vw3c8gfxHHf73T-3h9gA=w899-h599-no");
		createVilla("Villa Olympia","0829K121K77826001","6","&euro; 750 - &euro;1,250","Greece, Corfu, Dassia","./room.php?villa=olympia","https://lh3.googleusercontent.com/Fso8Vvcq5LnaQdRVta_SpHZ6fSrhX2iSECuFIPzZuXa5NTDT11zUUkX7PR7m6IV33IKM2SFStBZ0xdpGmsjUC9jUMpZPgjYOOj3ajxIHA27TnBXD5qNbiPYYU7y2QViiX628FZtp45fh7ypL-w7Y6BZg-eqS-YnhRPK6Pg1v_7CwcX8lp9pB-j2JeVefgOgooV-Vr5Gtf6AopevkqNwHkQz5jll8yIZqG-9wwjBAbWHvknaLDjHkpege0S7jg3In2aD_85HWecknPwAJ8R4DCXQ-oqOMmrhiFEHygQaTb7ZbgmQTRpaKtUIO7hkX54mqaONxfyDdnTP5u95RDs9NPxI0SRGSNMYM3jrKfzBpI_PFu0f7cwtYD9JMF-4qxwuyZ0fs288XSaSbFd4NA4TXOKlFGjxpMz90ePN7eJaxiHGqfHGSw5vBZhm4gIXzcDQcDiFO9jyxb1LIlGiwTWAsIdlrW3z7xr0xgZTsn9wm5kEU_LXZ-Hajgm_0HLJttnWnHftKTFuOgIObiEwTLJl1SlsrxhfXaM8QK-LCuSvF0pg=w965-h643-no");


	function createVilla($name, $id, $persons, $price, $location, $url, $img){

				echo '<div class="col-md-6">
      <div class="card-section">
		<article class="card">
		  <header class="card__thumb" style="background-image: url('.$img.');background-size: cover;">

		  </header>
		  <div class="card__body">
			<div class="card__category">Beach Front</div>
			<p class="card__title"><a href="http://46.101.142.74/corfudream/room.php">'. $name .'</a></p>

		  </div>
		  <footer class="card__footer">
		  <div class="left-div width-50">
		  <div class="card__subtitle">'.$location.'
		  </div>
		  <div class="card__subtitle"><span class="tourist-license">GNTO/R.T.E
		  <img width="30px" src="http://bit.ly/1Tcle8d" style="
			-webkit-filter: grayscale(100%);
			filter: grayscale(100%);"/> '.$id.'</span>
			<ul class="acc-list inline">
				<li><span>'.$persons.' </span><i class="fa fa-male"></i> </li>
				<li></li>
				<li> '.$price.' / night</li>
			</ul>
			</div>
			</div><a href="'.$url.'"><button type="button" class="btn btn-default btn-right">View Villa</button></a>
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
			scrollTop: $("#villas").offset().top-40
		}, 900);
		});
</script>

	<script>
  $(document).ready(function(){
    $('.hidden').fadeIn(1000).removeClass('hidden');
  });
	</script>
</body>

</html>
