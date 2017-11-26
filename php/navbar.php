<?php
class Navbar{

	public $item = '';

function __construct(){
	$this->addnav_item("Events Calendar", "calendar.php");
	$this->addnav_item("Home Owners", "owners.php");
	$this->addnav_item("Contact Us", "contact.php");

	echo '<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#js-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="./"><img style="margin-top: 3px;width: 200px;"src="./img/corfu_dream_logo.png"></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="js-navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown dropdown-large">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome to<b class="caret"></b></a>

					<ul id="dropdown" class="dropdown-menu dropdown-menu-large row">

							<div class="col-md-9" style="margin: 40px 0 0 50px;">
							<p style="font-size:25px;text-transform:uppercase";>Get inspired</p>
								<div class="wt-photos">
								 <ul class="inline margin-right-20" style="margin-left: 0px;">
									<a href="./corfu.php"><li class="hover-text-effect" style="display:inline-block;"><img class="img-res" src="http://bit.ly/1QrSg5P" height="150" width="200"><p  class="dropdown-p-hover">Emerald Island</p></a></li>
									<a href="./newadditions.php"><li class="hover-text-effect" style="display:inline-block;"><img class="img-res" src="http://bit.ly/1T1jUEA" height="150" width="200"><p  class="dropdown-p-hover">Hidden Gems</p></a></li>
									<a href="./cosmopolitan.php"><li class="hover-text-effect" style="display:inline-block;"><img class="img-res" src="http://bit.ly/1T1ho1e" height="150" width="200"><p  class="dropdown-p-hover" >Ionian Countess</p></a></li>
									<!-- <li><img class"img-responsive" src="http://placehold.it/200x150"></li>-->
								</ul>
								</div>
							</div>
							<div class="col-md-3 border-left" >
								<p style="font-size:25px;text-transform:uppercase;">About Corfu</p>
								<ul class="no-style">
									<li><a href="./aglance.php">Corfu at a Glance</a></li>
									<li><a href="./practicalinfo.php">Practical Information</a></li>
									<li><a href="./history.php">A Culinary Experience</a></li>
									<li><a href="./golf.php">Golfing in Corfu </a></li>
									<li><a href="./myth.php">Live the Myth</a></li>
									<li><a href="./nature.php">Gift of Nature</a></li>
									<li><a href="./tradition.php">Footsteps of Tradition </a></li>
								</ul>
							</div>
					</ul>

				</li>' . $this->item . '</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>';

}

	function addnav_item($string, $url){
	 $this->item .=  '<li>
			  <a class="page-scroll" href="'.$url.'">'.$string.'</a>
			</li>';
	}

}


?>
