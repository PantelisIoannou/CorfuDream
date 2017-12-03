<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Corfu Dream</title>

	<link rel="icon" type="image/ico" href="img/cd.ico"

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Petit+Formal+Script' rel='stylesheet' type='text/css'>
	  <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	  <link rel="stylesheet" type="text/css" href="js/slick/slick.css"/>
  	<link rel="stylesheet" type="text/css" href="js/slick/slick-theme.css"/>
  	<link rel="stylesheet" href="ind/flaticon.css" type="text/css">
	   <link rel="stylesheet" type="text/css" href="fonts/house.css">
     <link rel="stylesheet" href="flaticon-3icons/flaticon.css" type="text/css">
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

</head>

<body id="page-top">
	<!-- Navbar -->
     <?php $navbar = new Navbar(); ?>
	 <!-- Navbar End -->

    <!-- Carousel -->

  <div style="height: 85%;background-image:url(http://bit.ly/1OiPV79);background-repeat:no-repeat; background-size:cover;background-position: center;" class="bg"></div>
	<div class="jumbotron" style="height: 85%;background: transparent">
    <div class="wrpper">
       <p style="text-align:right;padding-top:250px;padding-right: 20px;font-size:19px; font-weight:200;margin-bottom: 1px;">
         Nothing truly defines the concept of CorfuDream more than our motto “Welcome home"</p>
         <p style="text-align:right;padding-right: 60px;font-size:21px; font-weight:200;">
           Your house is in trusted hands!</p>
   </div>
    <div>

         <a href="#"><i id="scroll" class="fa fa-angle-double-down"></i></a>

    </div>

	</div>

	<style>
		#villas i::before {
			font-size: 50px;
		}
	</style>


    <section id="villas">

	<div style="padding-left:50px; padding-right:50px; margin-bottom: -50px;margin-top:-75px; margin-right:0px;"  class="row text-center">

        <div class="col-md-4 col-sm-4">
			<i style="color: #333; "class="flaticon-sealife13"></i>
			<h4 class="values-col">OWNER REVENUE</h4>
			<p style="font-size:19px; text-align:center; color:rgba(0, 0, 0, 0.65);">We see all of our Owners as partners, optimizing exposure of their rental property to its maximum revenue potential.</p>
		</div>
        <div class="col-md-4 col-sm-4">
			<i style="color: #333;" class="flaticon-sealife14"></i>
			<h4 class="values-col">PROPERTY CARE</h4>
			<p style="font-size:19px; text-align:center; color:rgba(0, 0, 0, 0.65);">Managing over 10 million euro worth of real estate, we treat each home as if it were our own to ensure a professional maintenance of the property for our home Owner.</p>
		</div>
        <div class="col-md-4 col-sm-4">
			<i style="color: #333; " class="flaticon-slow"></i>
			<h4 class="values-col">SERVICE</h4>
			<p style="font-size:19px; text-align:center; color:rgba(0, 0, 0, 0.65);">We deliver a customer experience that lives up to our name, assuring every vacation is in the best hands for our Guests. We are not satisfied unless every vacation is truly unique.</p>

    </div>
  </div>
</section>


<section style="padding:100px 0px; margin-top:-25px; background-color:#fff;">

        <div class="row">
                <div class="col-md-4" style="padding: 3% 3% 3% 3%; background-color:#EFEFEF; margin-top:28px;border-radius: 3px;" >
                      <p style="font-weight:600;font-size:25px;text-decoration:underline; text-align:center;">For The Owner</p>
                      <br>
                      <p style="font-size:19px; line-height:2;text-align:center;">Our team is committed to establishing long-lasting relationships with our home owners while providing unique inspirational holiday experiences to our guests.
                         CorfuDream Team is well known for its professionalism, accuracy, discreet and efficient work.
                         If you are interested in joining CorfuDream portfolio, please complete the form below and our expert team will be in touch with you within 48 hours.
                      </p>
                  </div>




                          <div class="col-md-8" style="margin-top: -5%;" >
                            <h2 style="font-weight: 400;font-size: 45px;text-align: center;color:#000;">Get in touch with us!</h2>
                          <form action="./mailtesting.php" enctype="multipart/form-data" method="POST" style="text-align:center;" >

                            <h2 style="text-align:center;font-weight: 100;">About the owner</h2>
                            <input required class="owners-form"name="firstname"style="height: 35px; width:40%; font-size:16px; margin: 10px 10px;" type="text" placeholder="First name">
                            <input required class="owners-form"name="lastname"style="height: 35px; width:40%; font-size:16px;margin: 10px 10px;" type="text" placeholder="Last name">
                            <br>
                            <input required class="owners-form"name="email" type="email" style="height: 35px; width:40%; font-size:16px;margin: 10px 10px;" type="text" placeholder="Email">
                            <input class="owners-form"name="phone"style="height: 35px; width:40%; font-size:16px;margin: 10px 10px;" type="text" placeholder="Phone Number">
                            <h2 style="text-align:center;font-weight: 100;">About the property</h2>


                            <input required class="owners-form"name="property_name"style="height: 35px; width:40%; font-size:16px;margin: 10px 10px;" type="text" placeholder="Name of property">

                            <input required class="owners-form"name="location"style="height: 35px; width:40%; font-size:16px;margin: 10px 10px;" type="text" placeholder="Location">



                            <input class="owners-form"name="rooms"style="height: 35px; width:40%; font-size:16px;margin: 10px 10px;" type="text" placeholder="No of rooms">
                            <input class="owners-form"name="bathrooms"style="height: 35px; width:40%; font-size:16px;margin: 10px 10px;" type="text" placeholder="No of bathrooms">
                            <input class="owners-form"name="guests"style="height: 35px; width:40%; font-size:16px;margin: 10px 10px;" type="text" placeholder="Guests">
                            <input required class="owners-form"name="facilities"style="height: 35px; width:40%; font-size:16px;margin: 10px 10px;" type="text" placeholder="Facilities">
							<textarea  name="facilities" style="margin-left:10px;height: 90px; width:84%; font-size:16px; "class="owners-form" rows="6" placeholder="Facilities"></textarea>


                            <div class="text-center input-label" style="margin-top: 10px;margin-left: 35px;">
                              <input class="owners-form"type="checkbox" name="promotion" value="Yes" id="promotion"><label class="promotion noselect" for="promotion"> Property Promotion</label>
                              <input class="owners-form"type="checkbox" name="management" value="Yes" id="management"><label class="management noselect"for="management"> Property Management</label>
                              <input class="owners-form"type="checkbox" name="maintenance" value="Yes" id="maintenance"><label class="maintenance  noselect"for="maintenance "> Property Maintenance </label>
                            </div>
                              <input style="margin-top: 30px;margin-left: 30%;width: 40%;" class="form-submit"type="submit"/>
                            </div>
                            </form>
                        </div>
                    	</div>
                    </section>

	<section class="bg-primary DARK" id="about" style="padding-top:0px;padding-bottom:0px;">
        <div class="container">
          <div class='row' style="margin-right:0px;">

			<div class="col-md-2">
			</div>

            <div class=''>
              <div style="width:65%;"class="carousel slide col-md-8 col-sm-12" data-ride="carousel" id="quote-carousel">
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
                      <div class="row" style="margin-right:0px;">

                        <div class="col-sm-12">
						  
                          <p>Corfudream has given us necessary and quality guidance in every aspect of property management, especially because we were handling everything from out of country. They were very helpful with easing our minds and taking care of everything that needed to be handled. The transactions all went very smoothly and we couldn’t be happier. We look forward to working with Corfudream again this summer when we put our house on the market.</p>
						  <h4 style="font-weight: bold;text-align:right;">- D.T Glyfada Corfu</h4>
						</div>
                      </div>
                    </blockquote>
                  </div>
                  <!-- Quote 2 -->
                  <div class="item">
                    <blockquote>
                      <div class="row" style="margin-right:0px;">

                        <div class="col-sm-12">						  
                          <p>Corfudream has been a great partner to work with for managing my property. They have all the qualities that I was looking in a partner: professionalism, accuracy and efficiency.</p>
						  <h4 style="font-weight: bold;text-align:right;">- A.I Pelekas Corfu</h4>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!-- Quote 3 -->
                  <div class="item">
                    <blockquote>
                      <div class="row">

                        <div class="col-sm-12">						  
                          <p>It was a pleasure working with Corfudream over the last year. Their concierge team is top notch! I know that when I’m not present Corfudream is taking care of my guests.</p>
						  <h4 style="font-weight: bold; text-align:right;">- B.M Kavos Corfu </h4>
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
			<div class="col-md-2">
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
        scrollTop: $("#villas").offset().top-40
      }, 900);
      });
  </script>
  <script>
		$('.sld').slick({
		  dots: false,
		  infinite: true,
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
