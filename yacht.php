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

		if (!file_exists('data/yachts/'. $_GET['yacht'] .'/connector.php')) {
			//include ('data/general/qbi/connector.php');
			//$index_location = '"' . 'index_en.php' . '"';
			//$img_location = 'qbi_banner.jpg';
			//<meta http-equiv="refresh" content="0;url=http://example.com">
			header('Location: error404.php');

		}else{
			include ('data/yachts/'. $_GET['yacht'] .'/connector.php');

		}
	?>


    <title><?php echo $info['name']; ?> - Corfu Dream</title>
	<link rel="icon" type="image/ico" href="img/cd.ico"

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	<link rel="stylesheet" href="icons/flaticon.css" type="text/css">
	<link rel="stylesheet" href="ic-amenities/flaticon.css" type="text/css">
	<link rel="stylesheet" href="css/form.css"/>


    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="js/slick/slick.css"/>
  	<link rel="stylesheet" type="text/css" href="js/slick/slick-theme.css"/>

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
	<link rel="stylesheet" href="css/new.css" type="text/css">

	<!-- PHP Connections -->
	<?php include './php/navbar.php' ?>
	<?php include './php/footer.php' ?>
	<?php include './php/ImageSlider.php' ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" style="text-align:justify;">

    <!-- Navbar -->
	 <?php $navbar = new Navbar(); ?>
	 <!-- Navbar End -->


     <div style="background-image: url(<?php echo $images['1'] ?>);height: 85%;background-size: cover;" class="jumbotron">
			<div class="block" style="margin-top: 10%;">
				<i class="hovicon small effect-1 sub-a op-0"><i id="full-screen" class="fa fa-play"></i></i>
			</div>

    </div>
		 <!-- Wrapper for slides -->
	 <?php $carousel = new Carousel($images); ?>


	<!-- Main Content -->
	<div class="container" style="width:95%;">
			<div class="wrapper row" style="margin-top:-35px;">
			 <div class="col-md-7">
				<div id="info" class="top-info">
				<h2 style="text-transform: uppercase;" class="h2room"> <?php echo $info['name']; ?> </h2>
				<p style="font-size:18px; font-family:'Lato', sans-serif !important; margin-bottom:0px;"><i class="fa fa-anchor"></i> <?php echo $info['location']?><br></p>
				<p style="font-size:18px; font-family:'Lato', sans-serif !important; padding-bottom:0px;">Guests: <?php echo $info['guests'] ?><br>
				Price: <?php echo $info['prices'] ?><br>
				<span class="tourist-license" style="font-size: 18px; font-weight: 300;"> <?php echo $info['comments'] ?> </span><br>
				<br></p>
        <div class="right-div" style="margin-top:-15%;">

    			<button style="width: 135%;" type="button" class="btn btn-default btn-right btn-room scroll">INQUIRE</button>

    		</div>

			 <section style="padding: 0px">
							  <h2 class="h2room">SPECIFICATIONS</h2>
								<table class="table table-striped">
								  <tbody>
									<?php foreach ($specifications as $k => $v){ echo '<tr>
																				<td>'.$k.'</td>
																				<td>'.$v.'</td>
																				</tr>';} ?>
								  </tbody>
								</table>
			 </section>
					<!-- Post Content -->
					<section class="inf bott-border" style="padding: 20px 0;margin-top: -35px;">
							<div>

               <?php if (!empty($info['cruise'])){ echo '<h2>MOTOR YACHT CRUISE</h2>
      								<p>
      									'.$info['cruise'].'</p>'; }   ?>


                <h2>INFORMATION</h2>
								<p>
									<?php echo $info['details']; ?>
								</p>
								<h2>DETAILS</h2>
								<div id="tab-slide bott-border"><!-- Amenities Facilities -->
									<ul id="tabs" class="nav nav-pills nav-justified" data-tabs="tabs">
									  <li class="active"><a href="#accommodation" data-toggle="tab">Accommodation</a></li>
									  <li><a href="#communication" data-toggle="tab">Communication</a></li>
									  <li><a href="#entertainment" data-toggle="tab">Entertainment</a></li>
								  </ul>
									<div id="my-tab-content" class="tab-content">
									  <div class="tab-pane active" id="accommodation" style="padding-left:0px;padding-right:0px;">
                    <div class="row" style="padding: 0px; margin:0px;">
                      <div class="col-md-6" style="line-height:2.5;">
                        <p style="line-height:2.5;">
    											<?php echo $details['accommodation']; ?>
    										</p>
                      </div>
                      <div class="col-md-6">
                        <p style="line-height:2.5;"><?php echo $details['accommodation2']; ?></p>
                      </div>
                    </div>
									  </div>
									  <div class="tab-pane" id="communication">
										<p style="line-height:2.5;">
										  <?php echo $details['communication']; ?>
										</p>
									  </div>
									  <div class="tab-pane" id="entertainment">
										<p style="line-height:2.5;">
										  <?php echo $details['entertainment']; ?>
										</p>
									  </div>
								  </div>
								</div><!-- ./ Amenities Facilities -->
              <?php if (!empty($programs['full'])){ echo'
								<h2>PROGRAMS</h2>
								<div id="tab-slide bott-border"><!-- Amenities Facilities -->
									<ul id="tabs" class="nav nav-pills nav-justified" data-tabs="tabs">
									  <li class="active"><a href="#fullday" data-toggle="tab">Full Day Cruise</a></li>
									  <li><a href="#halfday" data-toggle="tab">Half Day Cruise</a></li>
									  <li><a href="#semiday" data-toggle="tab">Semi Day Cruise</a></li>
								  </ul>
									<div id="my-tab-content" class="tab-content" style="text-align:justify;">
									  <div class="tab-pane active" id="fullday">
										<p>
											'.$programs['full'].'
										</p>
									  </div>
									  <div class="tab-pane" id="halfday">
										<p>
										  '.$programs['half'].'
										</p>
									  </div>
									  <div class="tab-pane" id="semiday">
										<p style="margin-bottom:0px;">
										'.$programs['semi'].'
										</p>
									  </div>
								  </div>
								</div><!-- ./ Amenities Facilities -->'; } ?>

							  </div>
					  </section>


				  </div><!-- ./ col-md-9 -->
			 </div>



				<div class="col-md-5">
            <aside id="sidebar" class="sidebar">
             <div class="widget widget_recent_post">
              <h4 class="widget-title" style="padding-bottom:0px;">Testimonials</h4><!-- /.widget-title -->
              <div class="widget-details">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				  </ol>

				
		  
				
					
								<div style="width:100%; background-color:#e7e7e7; border-radius:3px;"class="carousel slide" data-ride="carousel" id="quote-carousel">
									<!-- Bottom Carousel Indicators -->
									<ol class="carousel-indicators">
									  <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
									  <li data-target="#quote-carousel" data-slide-to="1"></li>
									  <li data-target="#quote-carousel" data-slide-to="2"></li>
									</ol>

									<!-- Carousel Slides / Quotes -->
									<div class="carousel-inner">
									  <!-- Quote 1 -->
									  <div class="item active">
										<blockquote>
										  <div style="margin-right:0px;">
									
											<div>
											  <h2 style="font-weight: bold;">July</h2>
											  <p>Did someone stole your sweetrolls?</p>
											</div>
											<h5>- Andrew A.</h5>
										  </div>
										</blockquote>
									  </div>
									  <!-- Quote 2 -->
									  <div class="item">
										<blockquote>
										  <div class="row" style="margin-right:0px;">
											
											<div>
											  <h2 style="font-weight: bold;">Great!</h2>
											  <p>Lorem ipsum dolor</p>
											</div>
											<h5>- Pappas C.</h5>
										  </div>
										</blockquote>
									  </div>
									  <!-- Quote 3 -->
									  <div class="item">
										<blockquote>
										  <div>
										   
											<div >
											  <h2 style="font-weight: bold;">What a pleasant stay!</h2>
											  <p>It was a pleasure working with Corfudream</p>
												<h5>- Mary K.</h5>
											</div>
										  </div>
										</blockquote>
									  </div>
									</div>

										<!-- Carousel Buttons Next/Prev -->
										<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-circle-left"></i></a>
										<a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-circle-right"></i></a>
								</div>
							
				
					
				</div>
              </div><!-- /.widget-details -->
            </div><!-- /.widget -->

			 <?php echo '
        <section class="widget " id="about" style="padding: 50px 0; background-color:#E7E7E7;">
            <div class="video-container">';
                
						generateVideo('https://youtu.be/BfGURqcVtH8','Absolute 43-47-56 STC');
						generateVideo('https://youtu.be/mPiJxV2ojTo', 'Speed Boat Absolute 45');
      					echo'
          </div>
        </section>'; ?>

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
						  <div class="row body">
							<form action="./mailtesting.php" enctype="multipart/form-data" method="POST">
							  <ul>

								<li>
								  <p class="left">
									<!--<label for="first_name">First Name <span class="req">*</span></label>-->
									<input required ="text" name="firstname" class="owners-form" placeholder="First Name*" />
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
				<address style="font-size: 16px;"><?php echo $info['location'];  ?></address>
			</section>
		</div>
	</div>

     <!--Footer-->
    <?php $footer= new Footer(); ?>
	<!--Footer End-->

    <?php
      function generateVideo($url, $quote){
        echo '<div class="item">

                    <div class="row">
                      <div class="video">
                      <iframe width="300" height="175" src="https://www.youtube.com/embed/'. youtube_id_from_url($url) .'?showinfo=0&iv_load_policy=3&controls=0'.'" frameborder="0" allowfullscreen>
          </iframe>
          </div>
          <div class="quote text-center">
            <p margin-bottom:0px;>'. $quote .'</p>
          </div>
                    </div>

                </div>';
      }

      function youtube_id_from_url($url) {
      $pattern =
        '%^# Match any youtube URL
        (?:https?://)?  # Optional scheme. Either http or https
        (?:www\.)?      # Optional www subdomain
        (?:             # Group host alternatives
          youtu\.be/    # Either youtu.be,
        | youtube\.com  # or youtube.com
          (?:           # Group path alternatives
          /embed/     # Either /embed/
          | /v/         # or /v/
          | /watch\?v=  # or /watch\?v=
          )             # End path alternatives.
        )               # End host alternatives.
        ([\w-]{10,12})  # Allow 10-12 for 11 char youtube id.
        $%x'
        ;
      $result = preg_match($pattern, $url, $matches);
      if (false !== $result) {
        return $matches[1];
      }
      return false;
    }

    ?>


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
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
		$(".slide").click(function() {
			if(open == true){
			$('.readmr').slideUp();
			open = false;
			}else{
			$('.readmr').slideDown();
			open = true;
			}
		});
		$('.readmr').slideUp();

	});

	$("#scroll").click(function() {
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
	var $marker_url = 'img/marker.png';

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
      <script type="text/javascript" src="js/slick/slick.min.js"></script>

    	<script>

    		$('.video-container').slick({
    		  dots: false,
    		  infinite: true,
    		  speed: 300,
    		  slidesToShow: 1,
    		  slidesToScroll: 1,

    			}
    			// You can unslick at a given breakpoint now by adding:
    			// settings: "unslick"
    			// instead of a settings object

    		);


    	</script>

</body>

</html>
