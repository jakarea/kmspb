<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Page</title>

   <!-- favicon Start -->
    <link rel="icon" href="{{ asset('public/assets/images/favicon.png') }}">
   <!-- favicon end -->

   <!-- Default Css file Start -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/slick.css') }}">
   <!-- Default Css file end -->

   <!-- Plugin Css file Start -->
   <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
   <!-- Plugin Css file end -->

   <link rel="stylesheet" href="{{ asset('public/assets/css/app.css') }}">

   <!-- Custom Css file Start -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">
   <!-- Custom Css file Start -->


</head>
<body>

  <!-- navbar section start -->
   <nav class="navbar navbar-expand-lg navbar-light nav_section">
      <div class="container">
         <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('public/assets/images/logo.png') }}" alt="a" class="img-fluid">
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <a class="{{ Request::is('/') ? 'nav-link active' : 'nav-link' }}" href="{{ url('/') }}">হোম</a>
            </li>
            <li class="nav-item">
               <a class="{{ Request::is('registation') ? 'nav-link active' : 'nav-link' }}" href="{{ route('registration.index') }}">রেজিস্ট্রেশন</a>
            </li>
            
            <li class="nav-item">
               <a class="{{ Request::is('members') ? 'nav-link active' : 'nav-link' }}" href="{{ url('members')}}">রেজিস্টার্ড সদস্য </a>
            </li>
         </ul>
       </div>
      </div>
 </nav>
  <!-- navbar section end -->

  <!-- hero section start -->
  <div class="home_slider_wrap">
      <div class="home_sliders">
         <div class="home_hero_1"></div>
         <div class="home_hero_2"></div>
         <div class="home_hero_3"></div>
      </div>
      <div class="hero_ol">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-12">
                  <div class="hero_txt">
                     <h1>কাহালু মডেল সরকারী প্রাথমিক বিদ্যালয় </h1>
                     <h6>আনন্দ র‍্যালি </h6>
                  </div>
               </div>
      
               <div class="col-lg-10">
                <div class="count_down_wrap" id="countdown">
                   <div class="counter_txt">
                      <h3><span id="days"></span> দিন</h3>
                   </div>
                   <div class="counter_txt">
                      <h3><span id="hours"></span> ঘণ্টা</h3>
                   </div>
                   <div class="counter_txt">
                      <h3><span id="minutes"></span> মিনিট</h3>
                   </div>
                   <div class="counter_txt">
                      <h3><span id="seconds"></span> সেকেন্ড</h3>
                   </div>
                </div>
               </div>
            </div>
         </div>
       </div>
  </div>
  
  <!-- hero section end -->
  @yield('content')
   <!-- footer bottom section start -->
   <section class="ftr_btm_sec bg-dark">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="ftr_copy text-center">
                  <p>Powered  by <a target="_blank" href="https://www.giopio.com/">Giopio </a> with <i class="fa fa-heart text-danger"></i> </p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- footer bottom section end -->

   <!-- default js file Start -->
    <script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
   <!-- default js file end -->

   <!-- plugin js file start -->
   @yield('script')
   
  
   <!-- Custom js file Start -->
    <script src="{{ asset('public/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/custom.js') }}"></script>
   <!-- Custom js file end -->
</body>
</html>

