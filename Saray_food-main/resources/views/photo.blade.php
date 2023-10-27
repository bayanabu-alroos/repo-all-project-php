@extends('layout.master')

@section('content')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>




    <div class="content-block stick-to-footer">
      <div class="container-bg with-bg container-fluid" data-style="background-image: url(https://static.wixstatic.com/media/f36f88_e9d2426c8cb142609eca611609f5baee~mv2.jpg/v1/fill/w_1903,h_660,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/f36f88_e9d2426c8cb142609eca611609f5baee~mv2.jpg);">
          <div class="container-bg-overlay">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="page-item-title">
                              <h1 class="text-center texttransform-none">Photo</h1>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>



      <!-- title -->
      <div class="container mt-5 mb-5">
      <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6" aria-label="Slide 7"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="7" aria-label="Slide 8"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="8" aria-label="Slide 9"></button>






        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="https://static.wixstatic.com/media/f36f88_fcbfae2184f04e4f9fcb9b37cd969716~mv2.jpg/v1/fill/w_669,h_501,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/f36f88_fcbfae2184f04e4f9fcb9b37cd969716~mv2.jpg" class="d-block w-100" alt="...">
            
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="https://static.wixstatic.com/media/f36f88_092ba9b99e704c5d9054e79bd5036296~mv2.jpg/v1/fill/w_334,h_501,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/f36f88_092ba9b99e704c5d9054e79bd5036296~mv2.jpg" class="d-block w-100" alt="...">
            
          </div>
          <div class="carousel-item">
            <img src="https://static.wixstatic.com/media/f36f88_732123f6230f48ada14cab6919674fe5~mv2.jpg/v1/fill/w_334,h_501,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/f36f88_732123f6230f48ada14cab6919674fe5~mv2.jpg" class="d-block w-100" alt="...">
            
          </div>

          <div class="carousel-item">
            <img src="https://static.wixstatic.com/media/f36f88_d78634c47285487ca4efb4bb9d958b3a~mv2.jpg/v1/fill/w_751,h_501,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/f36f88_d78634c47285487ca4efb4bb9d958b3a~mv2.jpg" class="d-block w-100" alt="...">
            
          </div>

          <div class="carousel-item">
            <img src="https://static.wixstatic.com/media/f36f88_f906710d1ffe44d09f8b10f5252e5728~mv2.jpg/v1/fill/w_751,h_501,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/f36f88_f906710d1ffe44d09f8b10f5252e5728~mv2.jpg" class="d-block w-100" alt="...">
            
          </div>
          <div class="carousel-item">
            <img src=" https://static.wixstatic.com/media/f36f88_eb38ab6a0c6443039195a39a756d85dd~mv2.jpg/v1/fill/w_751,h_501,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/f36f88_eb38ab6a0c6443039195a39a756d85dd~mv2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src=" https://static.wixstatic.com/media/f36f88_3e88ddf4a24340668150a3571a27cb7e~mv2.jpg/v1/fill/w_334,h_501,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/f36f88_3e88ddf4a24340668150a3571a27cb7e~mv2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://static.wixstatic.com/media/f36f88_e4e2fef72a6448898a77918a0bce5ab8~mv2.jpg/v1/fill/w_751,h_501,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/f36f88_e4e2fef72a6448898a77918a0bce5ab8~mv2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://static.wixstatic.com/media/f36f88_25e38aa747d1405781cbc06c28c440ed~mv2.jpg/v1/fill/w_751,h_501,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/f36f88_25e38aa747d1405781cbc06c28c440ed~mv2.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon " aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div> --}}


    <div class="content-block stick-to-footer">
      <div class="container-bg with-bg container-fluid" data-style="background-image: url(https://static.wixstatic.com/media/f36f88_e9d2426c8cb142609eca611609f5baee~mv2.jpg/v1/fill/w_1903,h_660,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/f36f88_e9d2426c8cb142609eca611609f5baee~mv2.jpg);">
          <div class="container-bg-overlay">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="page-item-title">
                              <h1 class="text-center texttransform-none">{{ __('index.photo') }}</h1>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>


    <div class="content-block stick-to-footer">
      <div class="page-container container">
          <div class="row">
              <div class="col-md-12 entry-content">
                  <article>
                      
                      
                          
                      
                     
  
                      <div class="vc_row-full-width vc_clearfix"></div>
                      <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1501762265855 vc_row-has-fill">

                          <div class="wpb_column vc_column_container ">
                              <div >
                                  <div class="wpb_wrapper">
                                      <div class="mgt-portfolio-grid wpb_content_element">
                                          <div class="portfolio-list portfolio-columns-4 portfolio-grid-layout-4 clearfix" id="portfolio-list-76440791">
                                              <div class="portfolio-item-block text-left portfolio-item-animation-1 slide-item desert events fish meat" data-item="1" data-name="Beef Brisket Poutine">
                                                  <div class="portfolio-item-block-inside">
                                                          <div class="portfolio-item-image" data-style="background-image: url(https://static.wixstatic.com/media/f36f88_fcbfae2184f04e4f9fcb9b37cd969716~mv2.jpg/v1/fill/w_669,h_501,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/f36f88_fcbfae2184f04e4f9fcb9b37cd969716~mv2.jpg);"></div>
                                                          <div class="portfolio-item-bg"></div>
  
                                                          
                                                      </a>
                                                  </div>
                                              </div>
                     
                                              <div class="portfolio-item-block text-left portfolio-item-animation-1 slide-item fish" data-item="3" data-name="Salmon Tartare">
                                                  <div class="portfolio-item-block-inside">
                                                      <a href="upload/brooke-lark.jpg" target="_self" rel="lightbox">
                                                          <div class="portfolio-item-image" data-style="background-image: url(https://static.wixstatic.com/media/f36f88_092ba9b99e704c5d9054e79bd5036296~mv2.jpg/v1/fill/w_334,h_501,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/f36f88_092ba9b99e704c5d9054e79bd5036296~mv2.jpg);"></div>
                                                          <div class="portfolio-item-bg"></div>
  
                                                       
                                                      </a>
                                                  </div>
                                              </div>
                          
                                              <div class="portfolio-item-block text-left portfolio-item-animation-1 slide-item events" data-item="2" data-name="Beef CheeseBurger">
                                                  <div class="portfolio-item-block-inside">
                                                      <a href="upload/barmen-coctail.jpg" target="_self" rel="lightbox">
                                                          <div
                                                              class="portfolio-item-image"
                                                              data-style="background-image: url(https://static.wixstatic.com/media/f36f88_732123f6230f48ada14cab6919674fe5~mv2.jpg/v1/fill/w_334,h_501,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/f36f88_732123f6230f48ada14cab6919674fe5~mv2.jpg);"
                                                          ></div>
                                                          <div class="portfolio-item-bg"></div>
  
                                                     
                                                      </a>
                                                  </div>
                                              </div>
                                              <div class="portfolio-item-block text-left portfolio-item-animation-1 slide-item desert events meat" data-item="3" data-name="Tuna Salad">
                                                  <div class="portfolio-item-block-inside">
                                                      <a href="upload/food-plate.jpg" target="_self" rel="lightbox">
                                                          <div class="portfolio-item-image" data-style="background-image: url(https://static.wixstatic.com/media/f36f88_d78634c47285487ca4efb4bb9d958b3a~mv2.jpg/v1/fill/w_751,h_501,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/f36f88_d78634c47285487ca4efb4bb9d958b3a~mv2.jpg);"></div>
                                                          <div class="portfolio-item-bg"></div>
  
                                                      </a>
                                                  </div>
                                              </div>
                                              <div class="portfolio-item-block text-left portfolio-item-animation-1 slide-item desert events meat" data-item="3" data-name="Tuna Salad">
                                                  <div class="portfolio-item-block-inside">
                                                      <a href="upload/food-plate.jpg" target="_self" rel="lightbox">
                                                          <div class="portfolio-item-image" data-style="background-image: url(https://static.wixstatic.com/media/f36f88_eb38ab6a0c6443039195a39a756d85dd~mv2.jpg/v1/fill/w_751,h_501,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/f36f88_eb38ab6a0c6443039195a39a756d85dd~mv2.jpg);"></div>
                                                          <div class="portfolio-item-bg"></div>
  
                                                      </a>
                                                  </div>
                                              </div>
                                              <div class="portfolio-item-block text-left portfolio-item-animation-1 slide-item desert events meat" data-item="3" data-name="Tuna Salad">
                                                  <div class="portfolio-item-block-inside">
                                                      <a href="upload/food-plate.jpg" target="_self" rel="lightbox">
                                                          <div class="portfolio-item-image" data-style="background-image: url(https://static.wixstatic.com/media/f36f88_092ba9b99e704c5d9054e79bd5036296~mv2.jpg/v1/fill/w_334,h_501,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/f36f88_092ba9b99e704c5d9054e79bd5036296~mv2.jpg);"></div>
                                                          <div class="portfolio-item-bg"></div>
  
                                                      </a>
                                                  </div>
                                              </div>

                                              <div class="portfolio-item-block text-left portfolio-item-animation-1 slide-item desert events meat" data-item="3" data-name="Tuna Salad">
                                                  <div class="portfolio-item-block-inside">
                                                      <a href="upload/food-plate.jpg" target="_self" rel="lightbox">
                                                          <div class="portfolio-item-image" data-style="background-image: url(https://static.wixstatic.com/media/f36f88_3e88ddf4a24340668150a3571a27cb7e~mv2.jpg/v1/fill/w_334,h_501,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/f36f88_3e88ddf4a24340668150a3571a27cb7e~mv2.jpg);"></div>
                                                          <div class="portfolio-item-bg"></div>
  
                                                      </a>
                                                  </div>
                                              </div>

                                              <div class="portfolio-item-block text-left portfolio-item-animation-1 slide-item desert events meat" data-item="3" data-name="Tuna Salad">
                                                  <div class="portfolio-item-block-inside">
                                                      <a href="upload/food-plate.jpg" target="_self" rel="lightbox">
                                                          <div class="portfolio-item-image" data-style="background-image: url(https://static.wixstatic.com/media/f36f88_f906710d1ffe44d09f8b10f5252e5728~mv2.jpg/v1/fill/w_751,h_501,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/f36f88_f906710d1ffe44d09f8b10f5252e5728~mv2.jpg);"></div>
                                                          <div class="portfolio-item-bg"></div>
  
                                                      </a>
                                                  </div>
                                              </div>
                                              
                                              <div class="portfolio-item-block text-left portfolio-item-animation-1 slide-item desert events meat" data-item="3" data-name="Tuna Salad">
                                                  <div class="portfolio-item-block-inside">
                                                      <a href="upload/food-plate.jpg" target="_self" rel="lightbox">
                                                          <div class="portfolio-item-image" data-style="background-image: url(https://static.wixstatic.com/media/f36f88_25e38aa747d1405781cbc06c28c440ed~mv2.jpg/v1/fill/w_751,h_501,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/f36f88_25e38aa747d1405781cbc06c28c440ed~mv2.jpg);"></div>
                                                          <div class="portfolio-item-bg"></div>
  
                                                      </a>
                                                  </div>
                                              </div>
                                              
                                              <div class="portfolio-item-block text-left portfolio-item-animation-1 slide-item desert events meat" data-item="3" data-name="Tuna Salad">
                                                  <div class="portfolio-item-block-inside">
                                                      <a href="upload/food-plate.jpg" target="_self" rel="lightbox">
                                                          <div class="portfolio-item-image" data-style="background-image: url(https://static.wixstatic.com/media/f36f88_e4e2fef72a6448898a77918a0bce5ab8~mv2.jpg/v1/fill/w_751,h_501,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/f36f88_e4e2fef72a6448898a77918a0bce5ab8~mv2.jpg);"></div>
                                                          <div class="portfolio-item-bg"></div>
  
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
  
                                  </div>
                              </div>
                          </div>
                          
                          
                      </div>
  
                 
                      <div class="vc_row-full-width vc_clearfix"></div>
                      
                  </article>
              </div>
          </div>
      </div>
  </div>

          


@endsection
