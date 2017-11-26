<?php
Class CollectionSlider{
	
	function createItem($title, $img, $url){
		
		echo '<div style="background-image: url('. $img .');background-size: cover;" class="a-row-left">
			<div class="transp">'. $title .'
			</div>
				<p id="hover" class="collection">View Collection</p>
		  </div>';
		 		
	}
	
}

?>
