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

    <title>Calendar - Corfu Dream</title>
	<link rel="icon" type="image/ico" href="img/cd.ico"

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

	  <link rel="stylesheet" href="css/card.css">
    <!-- Custom Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
    <link rel="stylesheet" href="css/events.css" type="text/css">

	<?php include './php/navbar.php' ?>
	<?php include './php/footer.php' ?>
	<?php include './php/Events.php' ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn"t work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">
     <!-- Navbar -->
	 <?php $navbar = new Navbar(); ?>
	 <!-- Navbar End -->


    <div class="container">
    <div class="row">
	<h2>Events in Corfu </h2>

	<?php
		$events = new Events();
    $events->createEvent('1','May','http://greece.greekreporter.com/files/Easter-in-Corfu1.jpg','Easter in Corfu','','Easter in Corfu','Corfu Town','link');
    $events->createEvent('16-22','May','http://static1.squarespace.com/static/53816326e4b09192d2a666ec/t/5390a027e4b0eef6727a2ed7/1401987111854/free-golf-pacakage.jpg?format=1500w','Golf Event','','The 42th International Amateur Championship','Ropa Valley','link');
  	$events->createEvent('18-22','May','http://bit.ly/1Mj2C0o','10th Audiovisual Arts Festival','','Lorem ispum dolor sit amet','Corfu, Greece','http://avarts.ionio.gr/festival/');
    $events->createEvent('19-23','May','http://tst-turistik.ro/wp-content/uploads/2015/07/corfu.jpg','Corfu Beach Festival','','Corfu Beach Festival','Delfinia Beach Hotel','http://www.corfubeachfestival.com/');
    $events->createEvent('23-29','May','http://goravens.ca/wp-content/uploads/golf1.jpg','Golf Event','','Corfu Spring Festival','Ropa Valley','link');
    $events->createEvent('8-13','Jul','https://pbs.twimg.com/profile_images/464509650700730368/V1EHjyuu_400x400.jpeg','Sound & Silence Festival','','Sound & Silence Festival','Corfu','http://www.corfufestival.com/');
    $events->createEvent('9-10','Jul','http://www.touristorama.com/assets/images/viva/festival-club-54-dm-helios-festival.jpg','Helios Festival','','Helios Festival Barrakud Corfu','Ipsos, Corfu','https://www.facebook.com/heliosfestivalofficial');
    $events->createEvent('24-29','Jul','http://www.catrinebergeron.com/wp-content/uploads/2015/09/Summer-Festival-Blog.jpg','Gayatri Festival','','Gayatri Festival Corfu - Deva Premal & Miten','Arilla','http://devapremalmiten.com/');
    $events->createEvent('26-28','Aug','https://s-media-cache-ak0.pinimg.com/736x/14/2d/07/142d074b3a89dac0369f7c2306d06320.jpg','Folk Dance Festival','','1st Corfu International Folk Dance Festival','Corfu Town','http://eaff.eu/en/festivals/159-ii-international-folk-festival-in-corfu');
    $events->createEvent('26-2','Sept','http://myeo.eonetwork.org/images/114myeo-tee-totallers.jpg','Golf Event','','International seniors and veteran ladies championship','Ropa Valley','link');
    $events->createEvent('3-9','Oct','http://www.dundrumhousehotel.com/upload/sequencer_images/stock-golf.jpg','Golf Event','','Corfu Autumn festival','Ropa Valley','link');
    $events->createEvent('','Oct','http://www.boemagazine.com/wp-content/uploads/2015/04/Anchor-beer-festival4.jpg','Beer Festival','','Corfu Beer Festival','Arillas','http://www.corfubeer.com/');

    //$events->createEvent('day','month','image','Title','Subtitle','text','Location','link');
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
		$(document).ready(function(){
		  $(".post-module").hover(function() {
			$(this).find(".description").stop().animate({height: "toggle", opacity: "toggle"}, 300);
		  });
		});
	</script>

</body>

</html>
