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

    <title>F.A.Q - Corfu Dream</title>
	<link rel="icon" type="image/ico" href="img/cd.ico"

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/card.css">
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
	<link rel="stylesheet" href="css/accordion.css" type="text/css">
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

   <div style="height: 85%;background-image:url(http://anita-hotel.com/wp-content/uploads/2014/12/corfu-liston-night.jpg);background-size:cover;" class="bg"></div>
    <div style="height: 85%;background: transparent;" class="jumbotron">
        <div class="row" style="padding-left:-0px; margin-top:24%;">  <!--margin-top:335px; -->

			
		 <a href="#"><i id="scroll" class="fa fa-angle-double-down"></i></a>

        </div>
    </div>




    <section style="padding-top:0px; padding-bottom:0px;"id="services">

	<div class="row"style="margin-right:0px;">
		<div class="col-md-3">
		</div>
		<div class="col-md-6" style="text-align:center;">

			<p class="text-header">F.A.Q</p>
			
				<div class="accordion">
					<dl><ol style="background-color:#fff;" class="accordion-title accordion-fix">
					  <?php
						generateFAQuestion('When is the best time of year to visit the Greek islands?','June through September is considered the high season, with average temperatures that allow swimming in the Ionian. <br>May and October are also excellent months to travel to Corfu Island, and offer an even greater sense of seclusion and escape.<br> The most popular time of year to visit is early to mid-August, when the island tends to be very busy with Greek and European visitors.');
						generateFAQuestion('Can I book my accommodation on CorfuDream website, or must I do it over the phone?','You may acquire information on the various type of accommodations as well as yachts and services on CorfuDream website.<br>When you submit your Booking Request, we will contact you within two business days to confirm availability.<br>As an alternative, you may also give us a call direct at 0030 6980 92 18 11. ');
						generateFAQuestion('Is my EU driver’s license valid in Greece?','If you are planning to drive in Corfu you must carry a valid driver’s license as well as an International Driving Permit. ');
						generateFAQuestion('Are travelers cheques widely accepted in Corfu? Should I bring cash with me?','We do not recommend carrying an abundance of travelers cheques, since they are not widely accepted in Greece. Some banks accept travelers cheques and some do not, and many taverns and restaurants do not.<br>Additionally, you do not want to spend your valuable time in Corfu searching for the banks that do accept Travelers cheques. Although credit card use is wide-spread for shops and restaurants, please keep in mind that you are visiting small villages on the islands, and many places will only accept cash.<br>We recommend carrying a small cash balance with you upon departure from your country, withdrawing money in Greece with your debit card, and always carrying some cash on you while in Corfu. There is an abundance of ATMs in Corfu. Consulting with your bank before your departure is recommended to ensure that you will be able to withdraw money from an ATM machine while in Greece and that no fees apply.');
						generateFAQuestion('What type of electrical source is available in Greece?','Electricity in Greece is supplied at 220 volts AC at a frequency of 50 Hz. and the plugs are of type F. To avoid the risk of a short circuit, be sure to have transformers and adaptors for your electronic devices.
		<br>For your convenience, you may purchase a small, inexpensive transformer and a European plug adopter before your departure, two items that many times can be combined in one device. ');
						generateFAQuestion('Can I rent a car or motorbike for the islands through CorfuDream?','Due to complex legal issues CorfuDream is unable to book car rentals for our guests. We can act as an intermediary between you and the car rental company, but the car rental contract will be under your name, and you will be responsible for paying the car rental company directly.');
						generateFAQuestion('Are visas required for travel to Greece?','Each traveler should be in possession of a valid, signed passport that will remain valid for at least three months beyond the completion of your trip. E.U. citizens do not require a visa for Greece.<br>Citizens of other countries should contact CorfuDream, the Greek Consulate or Embassy for specific details on visa requirements.');
						generateFAQuestion('Is English widely spoken in Corfu or it “all be Greek to me”?','As tourism is an important aspect of the Islands economy and with a flourishing service sector, English is spoken throughout the major tourist areas.<br>All of CorfuDream staff and affiliates are also fluent in English. However please note that if you are venturing off to smaller villages, you may find communicating with the locals a bit more of a challenge. <br>Additionally as most road signs and road names throughout Corfu are also displayed in English, with the help of your map (which you will receive in your welcome package) you should be able to find your way around.');
						generateFAQuestion('Will I be able to use my PC while in Corfu? Will I be able to access the internet while in Corfu?','If you choose to bring your lap top computer to Corfu, please remember that electricity in Greece is supplied at 220 volts.<br>Additionally you will need an adaptor for the “Schuko” plugs used in Greece as well as a transformer if your lap top is not designed to receive 220 volts. 
		<br>Most of the rentals included in CorfuDream portfolio either have hard line internet access (where you will have to unplug the telephone and plug in your computer) or wireless internet access.
		Additionally keep in mind that there are also plenty of internet cafes on the island where you may access the internet.');
						generateFAQuestion('Will I be able to use my mobile phone while in Corfu?','The mobile phone operators in Greece use a GSM network so if your cell phone is compatible you should be able to use your mobile phone while in Greece through roaming.<br>We strongly recommend that you contact the customer services department of your mobile telecommunications provider and inquire about switching on this function and any additional charges associated with this feature.');
						generateFAQuestion('What is the currency in Corfu and from where can I obtain money?','As a member state of EU and Euro zone, Greece uses the EU’s common currency, the euro (€)
		Cash can be obtained from:
		All banks that accept currency exchange (Monday-Thursday: 8am-2.30pm & Friday: 8am-1.30pm, closed on weekends and public holidays).
		<br>Exchange offices are situated at the airport, central port, as well as designated areas around the island.<br>A passport is required when exchanging currencies.
		The ATMs of the banks that accept your credit card.');
						generateFAQuestion('What public transportations are available in Corfu? ','During your visit to Corfu you have the option of using city and intercity buses as well as taxis. There is a regular daytime bus service operated by KTEL, to and from Corfu Town to all the towns and villages around the island.<br>The green buses are used for the services to the town and villages and the blue buses operate from the centre of Corfu Town and the outskirts. Radio taxis are available 24/7 ');
						generateFAQuestion('From where can I buy bus tickets?','All tickets should be acquired by passengers before getting on board at the points of sale, which are located near the bus stops.
		(Automatic ticket vending machine, Station Master’s office in San Rocco Square, Kiosks etc.)
		<br>Attention: Tickets aboard are issued at a higher price than the ordinary one according to the Law.');
					  ?>
          </ol>
					</dl>

				  </div>
			
			</div>
		<div class="col-md-3">
		</div>
		</div>
      </section>
	  
	  <?php
		function generateFAQuestion($question, $answer){
			echo '<li><dt>
                <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger accordion-fix">'.$question.'</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
                <p style="text-align:justify;">'.$answer.'</p>
              </dd></li>';
		}
	?>


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
			scrollTop: $("#services").offset().top-40
		}, 900);
		});
	</script>

	
	<script>
				//uses classList, setAttribute, and querySelectorAll
		//if you want this to work in IE8/9 youll need to polyfill these
		(function(){
			var d = document,
			accordionToggles = d.querySelectorAll('.js-accordionTrigger'),
			setAria,
			setAccordionAria,
			switchAccordion,
		  touchSupported = ('ontouchstart' in window),
		  pointerSupported = ('pointerdown' in window);

		  skipClickDelay = function(e){
			e.preventDefault();
			e.target.click();
		  }

				setAriaAttr = function(el, ariaType, newProperty){
				el.setAttribute(ariaType, newProperty);
			};
			setAccordionAria = function(el1, el2, expanded){
				switch(expanded) {
			  case "true":
				setAriaAttr(el1, 'aria-expanded', 'true');
				setAriaAttr(el2, 'aria-hidden', 'false');
				break;
			  case "false":
				setAriaAttr(el1, 'aria-expanded', 'false');
				setAriaAttr(el2, 'aria-hidden', 'true');
				break;
			  default:
						break;
				}
			};
		//function
		switchAccordion = function(e) {
			e.preventDefault();
			var thisAnswer = e.target.parentNode.nextElementSibling;
			var thisQuestion = e.target;
			if(thisAnswer.classList.contains('is-collapsed')) {
				setAccordionAria(thisQuestion, thisAnswer, 'true');
			} else {
				setAccordionAria(thisQuestion, thisAnswer, 'false');
			}
			thisQuestion.classList.toggle('is-collapsed');
			thisQuestion.classList.toggle('is-expanded');
				thisAnswer.classList.toggle('is-collapsed');
				thisAnswer.classList.toggle('is-expanded');

			thisAnswer.classList.toggle('animateIn');
			};
			for (var i=0,len=accordionToggles.length; i<len; i++) {
				if(touchSupported) {
			  accordionToggles[i].addEventListener('touchstart', skipClickDelay, false);
			}
			if(pointerSupported){
			  accordionToggles[i].addEventListener('pointerdown', skipClickDelay, false);
			}
			accordionToggles[i].addEventListener('click', switchAccordion, false);
		  }
		})();
	</script>
</body>

</html>
