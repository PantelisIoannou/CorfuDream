<?php
Class Carousel {
  public $item = '';
  public $indicator = '';
  public $images = '';

  function __construct($images){
    $this->images = $images;
    $this->addItem();
    $innerCarousel = '  <header id="myCarousel" class="carousel slide">
          <!-- Indicators -->
          <ol class="carousel-indicators dark">
              '. $this->indicator .'
          </ol>

          <!-- Wrapper for Slides -->
          <div class="carousel-inner">
              '. $this->item .'
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="fa fa-chevron-circle-left marg-100"></span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="fa fa-chevron-circle-right marg-100"></span>
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
    foreach($this->images as $image){
    if($i == 0){
      $this->addIndicatorC($i, 'active');
      $itemClass = 'active';
    }else{
      $this->addIndicator($i);
      $itemClass = '';
    }
    $this->item .= '<div class="item ' . $itemClass . '">
        <!-- Set the first background image using inline CSS below. -->
        <div class="fill" style="background-size: 100% 100%; background-image:url('. $image .');"></div>
        <div class="over-img">
					<img style="height: 100%;" src="'. $image .'"/>
				</div>
                <div class="carousel-caption">
                  <div class="header-content-inner">
				  
                  </div>
                  <p class="img-text a-slider-text">Caption Text</p>
                </div>
    </div>';
    $i++;
  }
}

}

 ?>
