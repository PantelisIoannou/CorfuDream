<?php

class Footer{
	function __construct(){
		echo '<!-- Inquire Form -->
		<footer class="footer-distributed">
			<div class="row"  style="padding-top:25px;">
				<div class="col-md-4" style="line-height:20px; text-align:center; font-weight:100; ">
					<h1 style="font-size:25px;margin-top: 45px;">About Us</h1>
					<br>
					<a href="./aboutus.php"><p class="footer-text">Our Company</p></a>
					<!--<a href="./ourteam.php"><p class="footer-text">Our Team</p></a>-->
					<a href="./faq.php"><p class="footer-text">F.A.Q</p></a>
					<a href="./contact.php"><p class="footer-text">Contact Us</p></a>
				</div>
				<div class="col-md-4 foot-border" style="text-align:center;padding:48px 20px;">
					<div class="subscribe__wrapper">
					<form action="./php/Subscribe.php" method="post">
						<input placeholder="email" type="text" name="subscribe" id="subscribe"/>
						<button name="ss" id="send">
						  <span class="divider"></span>
						  <span class="send">Subscribe</span>
						  <svg width="122.6px" height="250px" viewBox="0 0 122.6 77.9">
							<g id="p2" transform="scale(2)" fill="#fff">
							  <path d="M62.4,6.9L23.6,45.7c-0.3,0.3-0.9,0.3-1.2,0L0.3,23.7c-0.3-0.3-0.3-0.9,0-1.2l5.4-5.4c0.3-0.3,0.9-0.3,1.2,0l16.1,16.1
						L55.8,0.3c0.3-0.3,0.9-0.3,1.2,0l5.4,5.4C62.8,6,62.8,6.5,62.4,6.9L62.4,6.9z"/>
							</g>
							<g id="p1">
							  <path fill="#FFFFFF" d="M113.6,8.1v61.8H8V8.1H113.6 M121.6,0.1H0v77.8h121.6V0.1L121.6,0.1z" />
							  <polygon fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="9.9,73.1 60.8,48.8 115.5,73.1 " />
							  <polyline id="mail" fill="none" stroke="#FFFFFF" stroke-width="8" stroke-miterlimit="10" points="2.6,3.1 60.8,48.8 118.9,3.6 " />
							  <polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="5.4,6.9 60.8,48.8 115.5,6.9 " />
							</g>
						  </svg>
						</button>
						</form>
					  </div>
					<div class="footer-icons">
						<a href="#" ><i class="fa fa-facebook"></i></a>
						<a href="#" ><i class="fa fa-twitter"></i></a>
						<a href="#" ><i class="fa fa-google-plus"></i></a>
						<a href="#" ><i class="fa fa-tumblr"></i></a>
						<a href="#" ><i class="fa fa-instagram"></i></i></a>
					</div>

					<hr>

					<p style="font-size:17px;">Stay in touch with us, sunbscribe to get the latest news, new additions and special offers! </p>
				</div>
				<div class="col-md-4" style="text-align:center;">
					<img style="width:200px; padding-bottom:20px;" src="img/logo_grey.png"/>

					 <div>

					  <p class="footer-text"><span><i style="padding-right:10px; color:#000;" class="fa fa-map-marker"></i>Barbati</span> Corfu, Greece</p>
					</div>

					<div>

					  <p class="footer-text"> <i style="padding-right:10px; color:#000;" class="fa fa-phone"></i>+30 6980921811</p>
					</div>

					<div>

					  <p class="footer-text"><i style="padding-right:10px; color:#000;"class="fa fa-envelope"></i> <a href="mailto:support@company.com">info@corfudream.com</a></p>
					</div>
					<div>

					  <p class="footer-text"><i style="padding-right:10px;font-size: 25px; color:#000;"class="fa fa-clock-o"></i> Monday to Sunday 10:00 - 20:00</p>
					</div>
					<div>

					  <p class="footer-text"><img style="padding-right:10px;width:35px;height:25px;" src="img/clock.png" /> Service Mobile: +30 6970989232</p>
					</div>
					</div>
				</div>
		</footer>';

	}


}

?>
