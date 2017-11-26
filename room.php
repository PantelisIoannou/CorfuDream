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

	<?php

		if (!file_exists('data/villas/'. $_GET['villa'] .'/connector.php')) {
			//include ('data/general/qbi/connector.php');
			//$index_location = '"' . 'index_en.php' . '"';
			//$img_location = 'qbi_banner.jpg';
			//<meta http-equiv="refresh" content="0;url=http://example.com">
			header('Location: error404.php');

		}else{
			include ('data/villas/'. $_GET['villa'] .'/connector.php');
			$img_location = '"' . "data/buildings/". $_GET['villa']. "/"  . $info['img1'] .'"';
		}
?>
    <title><?php echo $info['name']; ?> - Corfu Dream</title>
	<link rel="icon" type="image/ico" href="img/cd.ico"

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	<link rel="stylesheet" href="icons/villaicons/flaticon.css" type="text/css">
	<link rel="stylesheet" href="css/form.css"/>


    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
	<link rel="stylesheet" href="css/new.css" type="text/css">

	<!-- PHP Connections -->
	<?php include './php/navbar.php' ?>
	<?php include './php/footer.php' ?>
	<?php include './php/ImageSlider.php' ?>
	<?php include './php/Testimonials.php' ?>

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
  <div style="height: 85%;background-image:url(<?php echo $images['1'] ?>);background-size:cover;background-position: 10% 65%;" class="bg"></div>
	 <div style="background: transparent; height: 85%;" class="jumbotron">
			<div class="block" style="margin-top: 10%;">
				<i class="hovicon small effect-1 sub-a op-0"><i id="full-screen" class="fa fa-play"></i></i>
			</div>

    </div>

	 <?php
		$carousel = new Carousel($images);
	 ?>

	<!-- Main Content -->
	<div style="margin-top: -60px;width:95%;" class="container">
    <div class="wrapper">
	 <div class="col-md-7">
		<div id="info" class="top-info bott-border">
		<h2 style="text-transform: uppercase;" class="h2room"><?php echo $info['name']; ?> </h2>
		<p style="font-size:18px;"><?php echo $info['location']?><br>
		Sleeps <?php echo $info['sleeps'] ?>:  <?php echo $info['prices'] ?> / night<br>
		<span class="tourist-license" style="font-size: 18px; font-weight: 300;">GNTO / R.T.E<img width="30px" src="http://bit.ly/1Tcle8d" style="
			-webkit-filter: grayscale(100%);
			filter: grayscale(100%);"/> <?php echo $info['id']; ?> </span></p>
		<div class="right-div" style="margin-top:-15%;">

			<button style="margin-top: 55%;width: 135%;" type="button" class="btn btn-default btn-right btn-room scroll">INQUIRE</button>

		</div>
		<ul  class="info-list inline DARK compact" style="font-weight:300; font-size: 18px;font-family: 'Lato' sans-serif;">
		  <?php if (!empty($info['bedrooms'])) { echo '<li class="flaticon-bedroom19"><br>'.$info['bedrooms']. ' Bedrooms</li>';} ?>
		  <?php if (!empty($info['bathrooms'])) { echo '<li class="flaticon-bathtub5"><br>'.$info['bathrooms']. ' Bathrooms</li>';} ?>
		  <?php if (!empty($info['pool'])) { echo '<li class="flaticon-swimmingpool6"><br>Private Pool</li>';} ?>
		  <?php if (!empty($info['beach'])) { echo '<li class="flaticon-sunumbrella1"><br>Beachfront</li>';} ?>

		</ul>
	 </div>

            <!-- Post Content -->
				<section class="inf bott-border" style="text-align:justify;">
					<div id="info_det">
					  <h2 class="h2room">Details</h2>
						<p>
							<?php echo $info['details']; ?>

						</p>
					  <h2 class="h2room">Key info</h2>
						<table class="table table-striped">
						  <tbody>
							<?php foreach ($keyinfo as $k => $v){ echo '<tr>
																		<td>'.$k.'</td>
																		<td>'.$v.'</td>
																		</tr>';} ?>
							<?php foreach ($location as $k => $v){ echo '<tr>
																		<td>'.$k.'</td>
																		<td>'.$v.'</td>
																		</tr>';} ?>
						  </tbody>
						</table>
						</div>
					</div>
					<p style="font-size: 16px;text-decoration: underline;float: right;cursor: pointer;" id="readmorebutton" class="readmorebutton">READ MORE</p>
				</section>
				<section class="inf bott-border">
					<table class="table table-condensed">
						<thead>
						<h2 class="h2room">Pricing</h2>
						  <tr>
							<th>Season</th>
							<th style="text-align:center;">Daily Price</th>
							<th style="text-align:center;">Weekly Price</th>
						  </tr>
						</thead>
						<tbody style="font-size: 18px;">
						  <tr class="low_tip">
							<td>Low</td>
							<td style="text-align:center;"><?php echo $pricing['lowlow']; ?></td>
							<td style="text-align:center;"><?php echo $pricing['lowhigh'];?></td>
						  </tr>
              <?php if (!empty($pricing['midlowlow'])) { echo '<tr class="mid_low_tip" >
							<td>Mid Low</td>
							<td style="text-align:center;">'.$pricing['midlowlow'].'</td><td style="text-align:center;">'.$pricing['midlowhigh'].'</td>
						  </tr>';} ?>
						  <tr class="mid_tip" >
							<td>Mid</td>
							<td style="text-align:center;"><?php echo $pricing['midlow']; ?></td>
							<td style="text-align:center;"><?php echo $pricing['midhigh'];?></td>
						  </tr>
						  <?php if (!empty($pricing['midhighlow'])) { echo '<tr class="mid_high_tip" >
							<td>Mid High</td>
							<td style="text-align:center;">'.$pricing['midhighlow'].'</td><td style="text-align:center;">'.$pricing['midhighhigh'].'</td>
						  </tr>';} ?>
              <?php if (!empty($pricing['midhighlow2'])) { echo '<tr class="mid_high_tip2" >
							<td>Mid High (2)</td>
							<td style="text-align:center;">'.$pricing['midhighlow2'].'</td><td style="text-align:center;">'.$pricing['midhighhigh2'].'</td>
						  </tr>';} ?>
						  <tr class="high_tip" >
							<td>High</td>
							<td style="text-align:center;"><?php echo $pricing['highlow']; ?></td>
							<td style="text-align:center;"><?php echo $pricing['highhigh'];?></td>
						  </tr>
						</tbody>
            <?php if (!empty($pricing['notes'])) { echo '<p style="color:red; font-weight:400;">Note: '.$pricing['notes'].'</p>'; } ?>
					  </table>
				  <h2 class="h2room">Policies</h2>
			<div id="tab-slide bott-border"><!-- Amenities Facilities -->
				<ul id="tabs" class="nav nav-pills nav-justified" data-tabs="tabs">
				  <li class="active" style="font-size:19px;"><a href="#booking" data-toggle="tab">Booking</a></li>
                  <li style="font-size:19px;"><a href="#payment" data-toggle="tab">Payment</a></li>
                  <li style="font-size:19px;"><a href="#cancellation" data-toggle="tab">Cancellation</a></li>
              </ul>
				<div id="my-tab-content" class="tab-content" style="font-size: 18px;">
				  <div class="tab-pane active" id="booking">
					<ul>
						<?php echo $policies['booking']; ?>
					</ul>
                  </div>
                  <div class="tab-pane" id="payment">
					<ul>
						<?php echo $policies['payment']; ?>
					</ul>
                  </div>
                  <div class="tab-pane" id="cancellation">
					<ul>
						<?php echo $policies['cancelation']; ?>
					</ul>
                  </div>
              </div>
            </div><!-- ./ Amenities Facilities -->


			<h2 class="h2room">Facilities</h2>
			<div id="tab-slide bott-border" style="font-size:18px;"><!-- Amenities Facilities -->
              <ul id="tabs" class="nav nav-pills nav-justified" data-tabs="tabs" style="font-size: 19px;">
				  <li class="active"><a href="#facilities" style="padding-left:0px;padding-right:0px;" data-toggle="tab">AMENITIES</a></li>
                  <li><a href="#amenities" style="padding-left:0px;padding-right:0px;" data-toggle="tab">OUTDOOR FEATURES</a></li>
                  <li><a href="#resort-amenities" style="padding-left:0px;padding-right:0px;" data-toggle="tab">STAFF & SERVICES</a></li>
              </ul>
              <div id="my-tab-content" class="tab-content">
			  <div class="tab-pane active" id="facilities" >
						<div class="row" style="padding: 0px; margin:0px;">
								  <div class="col-md-6" style="line-height:2.5;">
									<p style="line-height:2.5;">
											<ul class="no-bullets">
											<?php echo $facilities['amenities']; ?>
											</ul>
									</p>
								  </div>
								  <div class="col-md-6" style="line-height:2.5";>

											<p style="line-height:2.5;">
											<ul class="no-bullets">
											<?php echo $facilities['amenities2']; ?>
											</ul>
											</p>
								  </div>
						</div>




                </div>
                <div class="tab-pane" id="amenities" >
					<div class="row" style="padding: 0px; margin:0px;">
								  <div class="col-md-4">
								  </div>
								  <div class="col-md-4 col-sm-12" style="line-height:2.5;padding-left:0px; padding-right:0px;">
									<p style="line-height:2.5;">
											<ul class="no-bullets" style="padding-left:0px;line-height:2.5;">
												<?php echo $facilities['outdoor']; ?>
											</ul>
									</p>
								  </div>
								  <div class="col-md-4">
								  </div>

						</div>
                 </div>

				 <div class="tab-pane" id="resort-amenities" >
						<div class="row" style="padding: 0px; margin:0px;">
								  <div class="col-md-6" style="line-height:2.5;">
									<p style="line-height:2.5;">
											<ul class="no-bullets">
												<?php echo $facilities['services']; ?>
											</ul>
									</p>
								  </div>
								  <div class="col-md-6" style="line-height:2.5;">
											<p style="line-height:2.5;">
												<ul class="no-bullets">
													<?php echo $facilities['services2']; ?>
												</ul>
											</p>

								</div>
						</div>


                 </div>
              </div>
            </div><!-- ./ Amenities Facilities -->
		</section>
          </div><!-- ./ col-md-9 -->




		<div class="col-md-5">
            <aside id="sidebar" class="sidebar">
             <div class="widget widget_recent_post">
              <h4 class="widget-title" style="padding-bottom:0px;">Testimonials</h4><!-- /.widget-title -->
              <div class="widget-details">

				<?php $testim = new TestimonialsSlider($testimonial_head,$testimonial_text,$testimonial_name); ?>

              </div><!-- /.widget-details -->
            </div><!-- /.widget -->

			<?php if (!empty($recommendation['name'])) { echo '
			<div class="widget widget_recent_post">
              <h4 class="widget-title" style="padding-top:4%; padding-bottom:0px;">We Also Recommend</h4><!-- /.widget-title -->
              <div class="widget-details">
                <article class="type-post post">
                  <div class="wrapper" style="margin-top:30px;">
				<a href="'.$recommendation['link'].'">  <div class="side-item" style="background-image:url('.$recommendation['img'].'); background-size:cover; background-position:bottom;">
					<div class="body" >
					<p>'. $recommendation['name'].'</p>
					</div>
					</div></a>
					</div>
                </article>
              </div><!-- /.widget-details -->
            </div><!-- /.widget -->
			';} ?>

			<div class="widget widget_recent_post">
              <!-- <h4 class="widget-title" style="padding-top:20%; padding-bottom:0px;">TEXT HERE</h4><!-- /.widget-title -->
              <div class="widget-details">
                <article class="type-post post">
                  <div class="wrapper">

					<div id="contact">
						<div class="cntn">
						  <div class="rwo hdr ">
							<h1>Inquire</h1>
						  </div>
						  <div class="row body" >
							<form action="./mailtesting.php" enctype="multipart/form-data" method="POST">
							  <ul >

								<li>
								  <p class="left">
									<!--<label for="first_name">First Name <span class="req">*</span></label>-->
									<input required type="text" name="firstname" class="owners-form" placeholder="First Name*" />
								  </p>
								  <p class="pull-right">
									<!--<label for="last_name">Last Name <span class="req">*</span></label>-->
									<input required type="text" name="lastname" class="owners-form" placeholder="Last Name*" />
								  </p>
								</li>
								<li>

									<!--<label for="email">Email <span class="req">*</span></label>-->
									<input required type="email" name="email" class="owners-form" placeholder="Email*" />


									<!--<label for="last_name">Phone Number<span class="req">*</span> </label>-->
									<input required type="text" name="phone" class="owners-form" placeholder="Phone Number*" />

								</li>
								<li>
								  <p class="left">
									<!--<label for="email">Check in <span class="req">*</span></label>-->
									<input required="required" style="padding: 6px 1px;" type="date" class="owners-form"  name="checkin" placeholder="Check in" />
								  </p>
								  <p class="pull-right">
									<!--<label for="last_name">Check out <span class="req">*</span> </label>-->
									<input required="required" style="padding: 6px 1px;" type="date" class="owners-form"  name="checkout" placeholder="Check out" />
								  </p>
								</li>
								<li>
								  <!--<label for="comments">Comments</label>-->
								  <textarea required cols="46" rows="3" name="text" class="owners-form" placeholder="Comments"></textarea>
								</li>

								<li>
                  <input class="form-submit" type="submit">
								</li>

							  </ul>
							</form>
						</div>
					</div>
				</div>
			</article>
              </div><!-- /.widget-details -->
            </div><!-- /.widget -->

			<div class="widget widget_recent_post">
              <div class="widget-details">
                <article class="type-post post">
                 <img style="margin-top: 20px;width: 50%; margin-left: 25%;" src="http://locandasyros.gr/wp-content/themes/nevo/images/eot_logo_2.gif" alt="EOT Logo"/>
                </article>
              </div><!-- /.widget-details -->
            </div><!-- /.widget -->
          </aside>
        </div>

	</div><!-- ./ wrapper -->
	</div><!-- ./ Container -->

		<div class="bott-border">
			<section id="cd-google-map">
				<div id="google-container"></div>
				<div id="cd-zoom-in"></div>
				<div id="cd-zoom-out"></div>
				<address style="font-size: 18px;">Location: <?php echo $info['name']; ?></address>
			</section>
		</div>

	</div>

	<!--Footer-->
    <?php $footer= new Footer(); ?>
	<!--Footer End-->

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
	<script src="js/form.js"></script>
	<script src="js/readmore.js"></script>
	<script type="text/javascript">
     jQuery(document).ready(function ($) {
		$( document ).ready(function() {
			$('#major').readmore({
			  speed: 1000,
			  collapsedHeight: 250,
			  heightMargin: 5,
			  lessLink: '<a class="readmore-link" href="#one">Read less</a>'
			});
		});
		$(".readmore-link").click(function() {
			$('html, body').animate({
				scrollTop: $("#major").offset().top-40
			}, 2000);
			});
		var open = false;
		$("#readmorebutton").click(function() {
			if(open == true){
      $("#readmorebutton").html("READ MORE");
			$('.readmr').slideUp();
      $('html, body').animate({
          scrollTop: $("#info_det").offset().top-40
      }, 400);
			open = false;
			}else{
      $("#readmorebutton").html("READ LESS");
			$('.readmr').slideDown();

			open = true;
			}
		});
		$('.readmr').slideUp();

	});

	$(".scroll").click(function() {
    $('html, body').animate({
        scrollTop: $("#contact").offset().top-40
    }, 2000);
	});

	$('.widget-details .carousel').carousel({
	  interval: 1000 * 10
	});

	var doc = document.documentElement;
	var left = (window.pageXOffset || doc.scrollLeft) - (doc.clientLeft || 0);
	var top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);

	$('#full-screen').click(function(){
		$("html, body").animate({ scrollTop: 0 }, "slow");
		$('.carouselslider').removeClass('hidecarousel');
		$('.carouselslider').addClass('fullcarousel');
		$('body').addClass('overflow');
	});

	$('.jumbotron').click(function(){
		$("html, body").animate({ scrollTop: 0 }, "slow");
		$('.carouselslider').removeClass('hidecarousel');
		$('.carouselslider').addClass('fullcarousel');
		$('body').addClass('overflow');
	});

	$('#exit').click(function(){
		$('.carouselslider').addClass('hidecarousel');
		$('.carouselslider').removeClass('fullcarousel');
		$('body').removeClass('overflow');
	});
  </script>

  <script>
	$('.img-text').animate({'marginLeft': '+=550px'}, 1000);
  </script>
  <style>
	.tip-text{
		font-family: 'Lato', sans-serif;
		font-weight: 200;
	}
	.popover {
		background: rgba(255, 255, 255, 0.6) !important;
		left: 35px !important;
	}

	.popover-title {
		background-color: rgba(247, 247, 247, 0.56) !important;
	}
  </style>
<script>
					$( '.low_tip').click(function( event ) {

					  event.preventDefault();

					  });

					  $('.low_tip').popover({

						html:true,

						placement:'top',

						trigger:'hover',

						title:'Low Season',

						content:'<span class="tip-text"><?php echo $info['seasonlow1'].'<br>'.$info['seasonlow2']; ?></span>'



					  });

            $( '.mid_low_tip').click(function( event ) {

              event.preventDefault();

              });

              $('.mid_low_tip').popover({

              html:true,

              placement:'top',

              trigger:'hover',

              title:'Mid Low Season',

              content:'<span class="tip-text"><?php echo $info['seasonmidlow1']; ?></span>'



              });

					  $( '.mid_tip').click(function( event ) {

					  event.preventDefault();

					  });

					  $('.mid_tip').popover({

						html:true,

						placement:'top',

						trigger:'hover',

						title:'Mid Season',

						content:'<span class="tip-text"><?php echo $info['seasonmid1']; ?></span>'



					  });
					  $( '.mid_high_tip').click(function( event ) {

					  event.preventDefault();

					  });

					  $('.mid_high_tip').popover({

						html:true,

						placement:'top',

						trigger:'hover',

						title:'Mid High Season',

						content:'<span class="tip-text"><?php echo $info['seasonmidhigh1'].'<br>'.$info['seasonmidhigh2']; ?></span>'



					  });

            $( '.mid_high_tip').click(function( event ) {

            event.preventDefault();

            });

            $('.mid_high_tip2').popover({

            html:true,

            placement:'top',

            trigger:'hover',

            title:'Mid High (2) Season',

            content:'<span class="tip-text"><?php echo $info['seasonmidhigh21'].'<br>'.$info['seasonmidhigh22']; ?></span>'



            });

					  $( '.high_tip').click(function( event ) {

					  event.preventDefault();

					  });

					  $('.high_tip').popover({

						html:true,

						placement:'top',

						trigger:'hover',

						title:'High Season',

						content:'<span class="tip-text"><?php echo $info['seasonhigh1'].'<br>'; ?></span>'



					  });
				</script>
	<script
		src="http://maps.googleapis.com/maps/api/js">
		</script>

		<script>
				jQuery(document).ready(function($){
	//set your google maps parameters
	var $latitude =<?php echo $info['lat']; ?>,
		$longitude = <?php echo $info['long']; ?>,
		$map_zoom = 17;

	//google map custom marker icon - .png fallback for IE11
	var is_internetExplorer11= navigator.userAgent.toLowerCase().indexOf('trident') > -1;
	var $marker_url = './img/marker.png';

	//define the basic color of your map, plus a value for saturation and brightness
	var	$main_color = '#2d313f',
		$saturation= -20,
		$brightness= 5;

	//we define here the style of the map
	var style= [
		{
			//set saturation for the labels on the map
			elementType: "labels",
			stylers: [
				{saturation: $saturation}
			]
		},
	    {	//poi stands for point of interest - don't show these lables on the map
			featureType: "poi",
			elementType: "labels",
			stylers: [
				{visibility: "off"}
			]
		},
		{
			//don't show highways lables on the map
	        featureType: 'road.highway',
	        elementType: 'labels',
	        stylers: [
	            {visibility: "off"}
	        ]
	    },
		{
			//don't show local road lables on the map
			featureType: "road.local",
			elementType: "labels.icon",
			stylers: [
				{visibility: "off"}
			]
		},
		{
			//don't show arterial road lables on the map
			featureType: "road.arterial",
			elementType: "labels.icon",
			stylers: [
				{visibility: "off"}
			]
		},
		{
			//don't show road lables on the map
			featureType: "road",
			elementType: "geometry.stroke",
			stylers: [
				{visibility: "off"}
			]
		},
		//style different elements on the map
		{
			featureType: "transit",
			elementType: "geometry.fill",
			stylers: [
				{ hue: $main_color },
				{ visibility: "on" },
				{ lightness: $brightness },
				{ saturation: $saturation }
			]
		},
		{
			featureType: "poi",
			elementType: "geometry.fill",
			stylers: [
				{ hue: $main_color },
				{ visibility: "on" },
				{ lightness: $brightness },
				{ saturation: $saturation }
			]
		},
		{
			featureType: "poi.government",
			elementType: "geometry.fill",
			stylers: [
				{ hue: $main_color },
				{ visibility: "on" },
				{ lightness: $brightness },
				{ saturation: $saturation }
			]
		},
		{
			featureType: "poi.sport_complex",
			elementType: "geometry.fill",
			stylers: [
				{ hue: $main_color },
				{ visibility: "on" },
				{ lightness: $brightness },
				{ saturation: $saturation }
			]
		},
		{
			featureType: "poi.attraction",
			elementType: "geometry.fill",
			stylers: [
				{ hue: $main_color },
				{ visibility: "on" },
				{ lightness: $brightness },
				{ saturation: $saturation }
			]
		},
		{
			featureType: "poi.business",
			elementType: "geometry.fill",
			stylers: [
				{ hue: $main_color },
				{ visibility: "on" },
				{ lightness: $brightness },
				{ saturation: $saturation }
			]
		},
		{
			featureType: "transit",
			elementType: "geometry.fill",
			stylers: [
				{ hue: $main_color },
				{ visibility: "on" },
				{ lightness: $brightness },
				{ saturation: $saturation }
			]
		},
		{
			featureType: "transit.station",
			elementType: "geometry.fill",
			stylers: [
				{ hue: $main_color },
				{ visibility: "on" },
				{ lightness: $brightness },
				{ saturation: $saturation }
			]
		},
		{
			featureType: "landscape",
			stylers: [
				{ hue: $main_color },
				{ visibility: "on" },
				{ lightness: $brightness },
				{ saturation: $saturation }
			]

		},
		{
			featureType: "road",
			elementType: "geometry.fill",
			stylers: [
				{ hue: $main_color },
				{ visibility: "on" },
				{ lightness: $brightness },
				{ saturation: $saturation }
			]
		},
		{
			featureType: "road.highway",
			elementType: "geometry.fill",
			stylers: [
				{ hue: $main_color },
				{ visibility: "on" },
				{ lightness: $brightness },
				{ saturation: $saturation }
			]
		},
		{
			featureType: "water",
			elementType: "geometry",
			stylers: [
				{ hue: $main_color },
				{ visibility: "on" },
				{ lightness: $brightness },
				{ saturation: $saturation }
			]
		}
	];

	//set google map options
	var map_options = {
      	center: new google.maps.LatLng($latitude, $longitude),
      	zoom: $map_zoom,
      	panControl: false,
      	zoomControl: false,
      	mapTypeControl: true,
      	streetViewControl: false,
      	mapTypeId: google.maps.MapTypeId.ROADMAP,
      	scrollwheel: false,
      	styles: style,
    }
    //inizialize the map
	var map = new google.maps.Map(document.getElementById('google-container'), map_options);
	//add a custom marker to the map
	var marker = new google.maps.Marker({
	  	position: new google.maps.LatLng($latitude, $longitude),
	    map: map,
	    visible: true,
	 	icon: $marker_url,
	});

	//add custom buttons for the zoom-in/zoom-out on the map
	function CustomZoomControl(controlDiv, map) {
		//grap the zoom elements from the DOM and insert them in the map
	  	var controlUIzoomIn= document.getElementById('cd-zoom-in'),
	  		controlUIzoomOut= document.getElementById('cd-zoom-out');
	  	controlDiv.appendChild(controlUIzoomIn);
	  	controlDiv.appendChild(controlUIzoomOut);

		// Setup the click event listeners and zoom-in or out according to the clicked element
		google.maps.event.addDomListener(controlUIzoomIn, 'click', function() {
		    map.setZoom(map.getZoom()+1)
		});
		google.maps.event.addDomListener(controlUIzoomOut, 'click', function() {
		    map.setZoom(map.getZoom()-1)
		});
	}

	var zoomControlDiv = document.createElement('div');
 	var zoomControl = new CustomZoomControl(zoomControlDiv, map);

  	//insert the zoom div on the top left of the map
  	map.controls[google.maps.ControlPosition.LEFT_TOP].push(zoomControlDiv);
});



			</script>


</body>

</html>
