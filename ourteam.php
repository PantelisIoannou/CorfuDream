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

    <title>Our Team - Corfu Dream</title>
	<link rel="icon" type="image/ico" href="img/cd.ico"

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/card.css">
    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
	<link rel="stylesheet" href="css/accommodation.css" type="text/css">
	<link rel="stylesheet" href="css/parallax.css" type="text/css">

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
		.section {
		  color: #5c6166;
		}

		.hr.invisible_hr {
		  height: 0;
		  padding: 0;
		}

		.hr.big_size_hr {
		  margin: 30px 0;
		}

		.hr {
		  clear: both;
		  display: block;
		  font-size: 0;
		  height: 24px;
		  margin: 20px 0;
		  overflow: hidden;
		  padding: 2px 0;
		  position: relative;
		  text-align: center;
		  width: 100%;
		}

		.highlight_secondary {
		  color: #F24046;
		}

		.team-role {
		  color: #A4A7AA;
		}

		.team img {
			    width: 400px;
				height: 300px;
		}
	</style>

</head>

<body id="page-top">

  <!-- Navbar -->
	 <?php $navbar = new Navbar(); ?>
	 <!-- Navbar End -->


    <div style="height: 85%;background-image: url(http://bit.ly/1I8IXoY); background-size: cover;" class="jumbotron">
        <div class="row" style="margin-right:0px;">
			<div class="content-title" style="margin-top:120px;font-weight: 100;">
				 Our Team
			</div>
			<p style="background: rgba(244, 228, 194, 0);
    margin: 0px 24%;
    border-radius: 3px;" class="quotations">Our people are our greatest asset and biggest differentiator.
        <br>They also believe in having a lot of fun along the way.</p>

			<a href="#"><i style="margin-top:5%;font-size: 60px;" id="scroll" class="fa fa-angle-double-down"></i></a>

        </div>
    </div>




    <section style="padding-top:60px;"id="services">

	<div class="row"style="margin-right:0px;">
		<div class="col-md-3">
		</div>
		<div class="col-md-6" style="text-align:center;">

			<section id="team" class="text-center section">
  <div class="container">
    <div class="hr big_size_hr invisible_hr">
        <i class="fa fa-"></i>
    </div>

    <div class="row">
      <div class="col-md-6 col-sm-12">
        <div class="team">
          <div class="team-image">
            <a href="#">
              <img src="http://bit.ly/1TgdiCl" class="img-circle img-responsive">
            </a>
            <div class="team-links">
              <div class="team-links-list">
                <a href="#" target="_blank"><i class="fa fa-envelope"></i></a>
                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="#" target="_blank"><i class="fa fa-linked"></i></a>
                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
              </div><!-- /.team-links-list -->
            </div><!-- /.team-links -->
          </div><!-- /.team-image -->
          <div class="team-content">
            <div class="team-name"><a href="#"><h5>Spyros Vradis</h5></a></div>
            <div class="team-role">Co-founder</div>
            <div class="team-description"></div>
          </div><!-- /.team-content -->
        </div><!-- /.team -->
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="team">
          <div class="team-image">
            <a href="#">
              <img src="http://bit.ly/1QAdRYw" class="img-circle img-responsive">
            </a>
            <div class="team-links">
              <div class="team-links-list">
                <a href="#" target="_blank"><i class="fa fa-envelope"></i></a>
                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="#" target="_blank"><i class="fa fa-linked"></i></a>
                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
              </div><!-- /.team-links-list -->
            </div><!-- /.team-links -->
          </div><!-- /.team-image -->
          <div class="team-content">
            <div class="team-name"><a href="#"><h5>Sofia Vrioni</h5></a></div>
            <div class="team-role">Co-founder</div>
            <div class="team-description"></div>
          </div><!-- /.team-content -->
        </div><!-- /.team -->
      </div>

    </div>



    <div class="hr big_size_hr invisible_hr">
        <i class="fa fa-"></i>
    </div>

  </div><!-- /.container -->
</section>

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

	<script>
	$("#scroll").click(function() {
		$('html, body').animate({
			scrollTop: $("#services").offset().top-40
		}, 900);
		});
	</script>

</body>

</html>
