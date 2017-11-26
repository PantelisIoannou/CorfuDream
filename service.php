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


    <div style="height: 85%;" class="jumbotron">
        <div class="row">
			<div class="content-title" style="margin-top:120px;">
				 RESTAURANT RESERVATIONS
			</div>

        </div>
    </div>




    <section style="margin-bottom:100px;" id="services">

        <div class="container" style="margin-top:-10px;">
            <div class="row">
                <div id="hover-main" class="col-md-4 text-center">
                    <div class="service-box">
                        <h3>Lorem ispum</h3>
                        <p class="text-muted">Lorem ispum dolor sit amet</p>
                    </div>
                </div>
				<div id="hover-main" class="col-md-4 text-center">
                    <div class="service-box">
                        <h3>Lorem ispum</h3>
                        <p class="text-muted">Lorem ispum dolor sit amet</p>
                    </div>
                </div>
				<div id="hover-main" class="col-md-4 text-center">
                    <div class="service-box">
                        <h3>Lorem ispum</h3>
                        <p class="text-muted">Lorem ispum dolor sit amet</p>
                    </div>
                </div>

			</div>
		</div>
      </section>

<section class="blur-background DARK" id="about">
        <div class="container">

          <div class="row">
            <div class="col-md-offset-2 col-md-8">
              <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                <!-- Bottom Carousel Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#quote-carousel" data-slide-to="0" class=""></li>
                  <li data-target="#quote-carousel" data-slide-to="1" class=""></li>
                  <li data-target="#quote-carousel" data-slide-to="2" class="active"></li>
                </ol>

                <!-- Carousel Slides / Quotes -->
                <div class="carousel-inner">

                  <!-- Quote 1 -->
                  <div class="item">
                    <blockquote>
                      <div class="row">
                        <div class="col-sm-3 text-center">
                          <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/keizgoesboom/128.jpg" style="width: 100px;height:100px;">
                          <!--<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" style="width: 100px;height:100px;">-->
                        </div>
                        <div class="col-sm-9">
                          <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
                          <small style="color:#000;">Someone famous</small>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!-- Quote 2 -->
                  <div class="item">
                    <blockquote>
                      <div class="row">
                        <div class="col-sm-3 text-center">
                          <img class="img-circle" src="https://49.media.tumblr.com/d309a854ae98bb1ba2832595cc98aad7/tumblr_mfuqoo3IKs1r8zonao1_500.gif" style="width: 100px;height:100px;">
                        </div>
                        <div class="col-sm-9">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.</p>
                          <small style="color:#000;">Someone famous</small>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!-- Quote 3 -->
                  <div class="item active">
                    <blockquote>
                      <div class="row">
                        <div class="col-sm-3 ">
                          <img class="img-circle" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRwv74TvxFoeOTpKM2_6De0marUZMRMDZdpnhngrXSiPuUE5KLo" style="width: 100px;height:100px;">
                        </div>
                        <div class="col-md-9">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</p>
                          <small style="color:#000;">Someone famous</small>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                </div>

                <!-- Carousel Buttons Next/Prev -->
                <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>
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
