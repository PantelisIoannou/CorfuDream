<?php
Class Carousel {
  public $item = '';
  public $indicator = '';
  public $images = '';

  function __construct($images){
    $this->images = $images;
    $this->addItem();
    $innerCarousel = '  <header style="" id="myCarousel" class="carouselslider hidecarousel carousel slide">
          <!-- Indicators -->
          <ol class="carousel-indicators dark">
              '. $this->indicator .'
          </ol>

          <!-- Wrapper for Slides -->
          <div class="carousel-inner"><div class="block">
				<i id="exit" class="hovicon small effect-1 sub-a"><i class="fa fa-times"></i></i>
			</div>
              '. $this->item .'
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="fa fa-angle-left marg-100"></span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="fa fa-angle-right marg-100"></span>
          </a>
      </header><!-- /.carousel -->';

      echo $innerCarousel;
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
    foreach($this->images as $caption => $image){
    if($i == 0){
      $this->addIndicatorC($i, 'active');
      $itemClass = 'active';
    }else{
      $this->addIndicator($i);
      $itemClass = '';
    }
    $this->item .= '<div class="item ' . $itemClass . '">
        <!-- Set the first background image using inline CSS below. -->
        <div class="fill blur-bgimage" style="background-size: cover; background-image:url('. $image .');"></div>
        <div class="over-img">
					<img class="img-effect" src="'. $image .'"/>
				</div>
                <div class="carousel-caption">
                  <div class="header-content-inner">

                  </div>
                </div>
    </div>';
    $i++;

  }
}

}

 ?>
