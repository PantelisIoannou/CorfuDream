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

		if (empty($_GET)) {
			//include ('data/general/qbi/connector.php');
			//$index_location = '"' . 'index_en.php' . '"';
			//$img_location = 'qbi_banner.jpg';
			//<meta http-equiv="refresh" content="0;url=http://example.com">
			
		}else{
			include ('data/villas/'. $_GET['villa'] .'/connector.php');
			$img_location = '"' . "data/buildings/". $_GET['villa']. "/"  . $info['img1'] .'"';
		}
?>
    <title><?php echo $info['name']; ?> - Corfu Dream</title>
	<link rel="icon" type="image/ico" href="img/cd.ico" 
	
    <!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">


    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
	<link rel="stylesheet" href="css/new.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
body {
	background: #e7e7e7;
}
.thanks{
	padding: 0 24%;
}
.container{
	background: #185E86;
	margin-top: 20%;
	margin-left: 0px;
	margin-right: 0px;
	width: 100%;
}

.row {
	border-top: 2px solid #868686;
}
</style>
</head>

<body id="page-top">

	<section class="thanks">
		<div class="left">
			<img src="img/logo.png"/>
		</div>
		
		<div style="float:right">
			<h1> Thank you for contacting </h1>
			<h4> You will receive an email </h4>
			<p>We  <i style="color: #868;" class="fa fa-heart"></i>  corfu <br>
			<a href="index.php"><span>To the start</span></a>
			</p>
			
		</div>
	</section>


	
		 <div class="container">
		<div class="row">
		<h2 style="color:#FFF;text-align:center;">See Also </h2>
		
		<?php
			createVilla("Villa Aurora","2000","Corfu","img/au3.jpg");
			createVilla("Villa Barbati","2000","Corfu","img/au2.jpg");
			createVilla("Villa Aurora","2000","Corfu","img/au1.jpg");
			createVilla("Villa Aurora","2000","Corfu","img/au4.jpg");
			createVilla("Villa Aurora","2000","Corfu","http://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-9060.jpg");
			createVilla("Villa Aurora","2000","Corfu","http://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-169732.png");
			createVilla("Villa Aurora","2000","Corfu","http://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-169732.png");
			createVilla("Villa Aurora","2000","Corfu","http://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-169732.png");


		function createVilla($name, $price, $location, $img){

			echo '<div class="col-md-6">
		  <div class="card-section">
			<article class="card">
			  <header class="card__thumb">
				<a href="http://46.101.142.74/corfudream/room.php"><img class="head-img" src="'. $img .'"/></a>
			  </header>
			  <div class="card__body">
				<div class="card__category">New Addition</div>
				<h3 class="card__title"><a href="http://46.101.142.74/corfudream/room.php">'. $name .'</a></h3>
				
			  </div>
			  <footer class="card__footer">
			  <div class="left-div width-50">
			  <div class="card__subtitle">
			  <img width="30px" src="http://bit.ly/1Tcle8d" style="
				-webkit-filter: grayscale(100%);
				filter: grayscale(100%);"/> BAR 001
				<ul class="acc-list inline">
					<li><span>2 </span><i class="fa fa-male"></i> </li>
					<li></li>
					<li> &euro;1,500 - &euro;2,000 / night</li>
				</ul>
				</div>
				</div>
				<div class="right-div width-50">
				<a href="http://46.101.142.74/corfudream/room.php">
				<button type="button" class="btn btn-default btn-right">View Villa</button>
				</a>
				</div>
			   </footer>
			</article>
			</div>
		</div>';
		}
		?>
		</div>
	  </div><!-- /container -->


   

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

</body>

</html>
