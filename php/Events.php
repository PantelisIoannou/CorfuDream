<?php
class Events{

	function createEvent($day,$month,$img,$title,$subTitle,$info,$location,$url){

		echo '<div class="col-md-4">
				<div class="column">
					<div class="post-module">
					  <div class="thumbnail">
						<div class="date">
						  <div class="day">' . $day . '</div>
						  <div class="month">'. $month .'</div>
						</div>
						<img src="'. $img .'">
					  </div>
					  <div class="post-content">
						<div class="category" style="background-color:rgba(0,0,0,0);"><img src="./img/cd.ico"></div>
						<h1 style="font-size: 20px;" class="title">'. $title .'</h1>
						<h2 class="sub_title">'. $subTitle .'</h2>
						<p class="description">'. $info .'</p>
						<div class="post-meta">
						  <span class="timestamp">
							<i class="fa fa-map-marker"></i>
							'. $location .'
						  </span>
						  <span class="comments">
							<i class="fa fa-info-circle"></i>
							<a target="_blanck" href="'. $url .'">Read More</a>
						  </span>
						</div>
					  </div>
					</div>
				  </div>
			  </div>';
	}

}
?>
