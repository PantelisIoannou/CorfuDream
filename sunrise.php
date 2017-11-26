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

    <title>Sunrise Collection - Corfu Dream</title>

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

   <div style="height: 85%;background-image:url(http://bit.ly/1UyLIkZ);background-size:cover;" class="bg"></div>
    <div style="height: 85%;background: transparent;"class="jumbotron">
      <div class="wrpper">
         <p class="hidden" id="slide">Always return to the Light</p>
     </div>
        <div class="row">
			<div class="content-title" style="margin-top:-24%;font-weight: 100;">
				 Sunrise Collection

			</div>
      <!--<p style="margin-top:10%;" id="scroll" class="btn btn-default new-btn">View Villas</p>-->
      <a href="#"><i id="scroll" class="fa fa-angle-double-down"></i></a>
        </div>
    </div>

    <div class="row" style="margin-right:0px;padding-right:0px;" id="villas">
      <p style="font-size:50px; text-align:center; font-weight:300;margin-bottom:0px;">Our Collection</p>
      <p style="text-align:justify; padding-bottom:0px; font-size:19px;font-weight:300;padding-left:50px;padding-right:50px;">
        <br>Sunrise is a collection of elegant and stylish properties created in 2014, located on the north east coastline of Corfu Island.
        <br>Our goal is to provide truly unique stylish accommodation to guests by marketing beautiful and unique properties around the island, inspiring discerning guests every step of their stay.
        <br>Let the sunrise inspire you!
      </p>

    </div>

    <hr style="border-color:#676258; margin-top:0px;margin-bottom:5px; border-width:1px;" >

	<div id="villas" class="container"  style="padding-top:0px;">
    <div class="row">
	<?php
		createVilla("Villa Barbati","0829K10000479301","8+2","&euro; 690 - &euro; 1,320","Greece, Corfu, Barbati","./room.php?villa=barbati","https://lh3.googleusercontent.com/yUUoou8qMrZlatBzSmX104FvCy2pJrX0as5_9KOXWbO01LrB-E_gh9eFYGfdwCtHqNgZR9Aptjj0LL4EJAo0k_WCcSWJJ4AC-HfenWgc6VHnJYfhUJocGaFXNAzrPA_oX5fnGCV8stCD_tJ91N2gz0gbch4KFsuAge-kEjC85WngdQQn08j0Zbk82dItMpwjdTFw-y3VdhGQ19Me6khAQMUXs_AtzwhFLY0Y7Pu77WreA1i716KwHL59gvdV8IGYqYrYycZOnkJgup_7KElYNTbuQK96xBqKnpLgUj9V7N0wQZ7x1mAoiKN_rSSm7QGkM-VHoiX9wlsAAglNog0GLpSwU4v9CnNH1dPKZR1OYJsy6AfjItqFcKBaJKDQYISX8e2e2TSSiEJqOv8uhDiAogjcJ5Z-uESkX9MACbvaBa27L3_fRG69fbqQjPwhHWk17GtGf3q6kCcQBYRtBY4lnpJE0Z7MWvcddAu-GLoi5xsSn5tM_fh8BneVdBXH8GFldnH4j2OkZd8Tu7FCHqexubV7k2sO-kdPiTGWhyIKCc4=w901-h599-no");


	function createVilla($name, $id, $persons, $price, $location, $url, $img){

				echo '<div class="col-md-6">
      <div class="card-section">
		<article class="card">
		  <header class="card__thumb" style="background-image: url('.$img.');background-size: cover;">

		  </header>
		  <div class="card__body">
			<div class="card__category">Sunrise</div>
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
