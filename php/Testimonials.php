<?php
Class TestimonialsSlider {
  public $item = '';
  public $indicator = '';
  public $head = '';
  public $text = '';
  public $name = '';
	
  function __construct($head,$text,$name){
    $this->head = $head;
	$this->text = $text;
	$this->name = $name;
    $this->addItem();
     echo ' <div style="width:100%; background-color:#e7e7e7; border-radius:3px;"class="carousel slide" data-ride="carousel" id="quote-carousel">
				<!-- Bottom Carousel Indicators -->
				<ol class="carousel-indicators">
              '. $this->indicator .'
				  </ol>

          <!-- Wrapper for Slides -->
          <div class="carousel-inner">
              '. $this->item .'
          </div>

         <!-- Carousel Buttons Next/Prev -->
			<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-circle-left"></i></a>
			<a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-circle-right"></i></a>
      </header><!-- /.carousel -->';

     
  }

  public function addIndicatorC($slideTo, $class){
    $this->indicator .= '<li data-target="#myCarousel" data-slide-to="'. $slideTo .'" class="'. $class .'"></li>';
  }
  public function addIndicator($slideTo){
    $this->indicator .= '<li data-target="#myCarousel" data-slide-to="'. $slideTo .'" class=""></li>';
  }

  public function addItem(){
    $i = 0;
    $itemClass = '';
    foreach($this->name as $k => $v){
    if($i == 0){
      $this->addIndicatorC($i, 'active');
      $itemClass = 'active';
    }else{
      $this->addIndicator($i);
      $itemClass = '';
    }
    $this->item .= '<div class="item '.$itemClass.'">
										<blockquote>
										  <div style="margin-right:0px;">
											<div>
											  <h3>'.$this->head[$k].'</h3>
											  <p class="quote-p">'.$this->text[$k].'</p>
											</div>
											<h5>- '.$this->name[$k].'</h5>
										  </div>
										</blockquote>
									  </div>';
    $i++;

  }
}

}

 ?>
