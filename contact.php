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

    <title>Contact Us - Corfu Dream</title>

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

    <script language="JavaScript" src="./js/gen_validatorv4.js"
        type="text/javascript" xml:space="preserve"></script>

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


    <section style="padding-top:8%; padding-bottom:3%; background-image:url(http://bit.ly/1Z3cRiv); background-repeat:no-repeat;background-size:cover;">

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
				<form id="form" name="form" action="" enctype="multipart/form-data" method="POST" style="text-align:left;padding: 0 60px;">
						<h1 style="color: rgb(83, 78, 77); font-size: 45px;font-weight: 100;"> Get in touch! </h1>

            <input name="name"style="height: 35px; width:100%; font-size:16px; margin: 10px 10px;" type="text" class="owners-form" placeholder="Your name">

              <input name="email" style="height: 35px; width:100%; font-size:16px; margin: 10px 10px;" type="text" class="owners-form" placeholder="Your email">

              <input name="phone" style="height: 35px; width:100%; font-size:16px; margin: 10px 10px;" type="text" class="owners-form" placeholder="Phone Number">

              <textarea  name="text" style="height: 90px; width:100%; font-size:16px; margin: 10px 10px;"class="owners-form" rows="6" placeholder="Tell us what you are looking for!"></textarea>

              <div id="form_errorloc" class="error_strings">
              </div>

            <input style="margin-left: 10px;" class="form-submit"type="submit">

        </form>
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

  <script language="JavaScript" type="text/javascript"
  xml:space="preserve">
        var frmvalidator  = new Validator("form");
        frmvalidator.EnableOnPageErrorDisplay();
        frmvalidator.EnableMsgsTogether();

        frmvalidator.addValidation("name","maxlen=20",	"Max length for FirstName is 20");
          frmvalidator.addValidation("name","req");
        frmvalidator.addValidation("name","alpha_s","Name can contain alphabetic chars only");


        frmvalidator.addValidation("email","maxlen=50");
        frmvalidator.addValidation("email","req");
        frmvalidator.addValidation("email","email");

        frmvalidator.addValidation("phone","maxlen=50");
          frmvalidator.addValidation("phone","req");
        frmvalidator.addValidation("phone","numeric");

  </script>

</body>

</html>
