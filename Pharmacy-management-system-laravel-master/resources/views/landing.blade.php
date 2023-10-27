
@extends('layouts.master')

@section('content')


    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      We Provide Best Healthcare
                    </h1>
                    <h4 style="color: white ">
Good health is not something we can buy. However, it can be an extremely valuable savings account                    <div class="btn-box">
                      <a href="{{route('login')}}" class="btn1">
                        Sign In
                    </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                 <div class="detail-box">
                    <h1>
                      We Provide Best Healthcare
                    </h1>
                    <h4 style="color: white ">
You can’t control what goes on outside, but you CAN control what goes on inside                   <div class="btn-box">
                      <a href="{{route('login')}}" class="btn1">
                        Sign In
                    </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
              <div class="detail-box">
                    <h1>
                      We Provide Best Healthcare
                    </h1>
                    <h4 style="color: white ">
Keeping your body healthy is an expression of gratitude to the whole cosmos- the trees, the clouds, everything             <div class="btn-box">
                      <a href="{{route('login')}}" class="btn1">
                        Sign In
                    </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>





  <!-- end department section -->



  <!-- end about section -->

  <!-- doctor section -->

  <section class="doctor_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2 style="color: black" >
          Our Team
        </h2>
        <p style="color: black" class="col-md-10 mx-auto px-0">
        </p>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div   class="img-box">
              <img style=" object-fit: cover; " src="{{asset('index/images/asma.jpg')}}"  alt="">
            </div>
            <div class="detail-box">


              <h6 class="">

              </h6>
            </div>
          </div>
          <br>

           <h5 style="text-align: center ; color:white ;background-color : #2a4054">
                Asma'a Alnsour
              </h5>
        </div>
        <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div   class="img-box">
              <img style=" object-fit: cover; " src="{{asset('index/images/ghayda.png')}}"  alt="">
            </div>
            <div class="detail-box">


              <h6 class="">

              </h6>
            </div>
          </div>
          <br>

           <h5 style="text-align: center ; color:white ;background-color : #2a4054">
Ghayda Alrabee              </h5>
        </div>

      <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div   class="img-box">
              <img style=" object-fit: cover; " src="{{asset('index/images/majd.jpg')}}"  alt="">
            </div>
            <div class="detail-box">


              <h6 class="">

              </h6>
            </div>
          </div>
          <br>

           <h5 style="text-align: center ; color:white ;background-color : #2a4054">
                Majd Atyyat
              </h5>
        </div>
        <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div   class="img-box">
              <img style=" object-fit: cover; " src="{{asset('index/images/bayan.jpg')}}"  alt="">
            </div>
            <div class="detail-box">


              <h6 class="">

              </h6>
            </div>
          </div>
          <br>

           <h5 style="text-align: center ; color:white ;background-color : #2a4054">
   Bayan AbuAlroos              </h5>
        </div>
        <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div   class="img-box">
              <img style=" object-fit: cover; " src="{{asset('index/images/osama.png')}}"  alt="">
            </div>
            <div class="detail-box">


              <h6 class="">

              </h6>
            </div>
          </div>
          <br>

           <h5 style="text-align: center ; color:white ;background-color : #2a4054">
 Osama     saaideh          </h5>
        </div>
        <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div   class="img-box">
              <img style=" object-fit: cover; " src="{{asset('index/images/ali.png')}}"  alt="">
            </div>
            <div class="detail-box">


              <h6 class="">

              </h6>
            </div>
          </div>
          <br>

           <h5 style="text-align: center ; color:white ;background-color : #2a4054">
Ali Kholani              </h5>
        </div>

    </div>
  </section>

  <!-- end doctor section -->



@endsection
  <!-- end client section -->

