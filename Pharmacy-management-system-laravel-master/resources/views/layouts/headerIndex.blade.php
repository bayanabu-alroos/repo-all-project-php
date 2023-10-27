<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="  {{asset('index/images/favicon.png')}}" type="">



  <title> Orthoc </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('index/css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- font awesome style -->
  <link href="{{asset('index/css/font-awesome.min.css')}}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{asset('index/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('index/css/responsive.css')}}" rel="stylesheet" />

  <Style> 

#navbarSupportedContent > img {margin-left:19vw ;width: 15vw ; height:30vh ; border:1px dashed white }
#navbarSupportedContent > ul{
  margin-left:15vw
}


@media  screen and (max-width: 900px ) and (min-width:501px){
  #navbarSupportedContent > img {
    width: 20vw ;
    height:10vh ;
  margin-left:23vh}

  #navbarSupportedContent > ul{
  color:white ;
  font-size:1.5rem
}

}

@media  screen and (max-width: 500px) {
.navbar-nav > li{
  margin-right:30vw
}
#navbarSupportedContent > img {
    width: 30vw ;
    height:10vh ;}

.nav-link {
color :white ;
font-size:1.5rem
}
}
</style>
</head>

<body>

  <div class="hero_area">


    <div class="hero_bg_box">
      <img style="" src="{{asset('index/images/hero-bg.png')}}" alt="">
    </div>

    <!-- header section strats -->

    <header  class="header_section">
        <div style="margin-top: 40px ; margin-right:50px " class="container">
        <nav  class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">


          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div   class="ml-5" id="navbarSupportedContent">
        <img  src="{{asset('index/images/logo.png')}}" alt="">
<br>
                <br>
            <ul  class="navbar-nav" >


              <li  class="nav-item active">
                <a  class="nav-link" href="landing">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about"> About</a>
              </li>


              <li class="nav-item">
                <a class="nav-link" href="contact">Contact Us</a>
              </li>

            </ul>
          </div>
                  </div>

        </nav>




    </header>
    <!-- end header section -->