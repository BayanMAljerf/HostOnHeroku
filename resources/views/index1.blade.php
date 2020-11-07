<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$blog_name}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/slicknav.css')}}">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('css/responsive.css')}}"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="{{route('index')}}">
                                        <img src="{{asset('img/logo.png')}}" alt="" href="{{route('index')}}">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl- col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            
                                        @foreach ($categories as $category)
                        <li><a href="{{route('blog',['id'=>$category->id])}}">{{$category->name}}</a></li>

                        @endforeach
                        
                                            <li><a href="{{ route('contact') }}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-2 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                                    <div class="number">
                                        <p> <i class="fa fa-phone"></i> {{ $phone }}</p>
                                    </div>
                                    <div class="social_links d-none d-xl-block">
                                        <ul>
                                            <li><a href="https://instgram.com/bestvacations?igshid=xg1dyj9kzwgl/"> <i class="fa fa-instagram"></i> </a></li>
                                            <li><a href="https://www.facebook.com/travelandleisure/"> <i class="fa fa-facebook"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="seach_icon">
                                <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Indonesia</h3>
                                <p>Don't miss the chance to discover</p>
                                <a href="{{route('mymap')}}" class="boxed-btn3">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center" method="POST">
                                <h3>Australia</h3>
                                <p>Don't miss the chance to discover</p>
                                <a href="{{route('mymap')}}" class="boxed-btn3">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_3 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Switzerland</h3>
                                <p>Don't miss the chance to discover</p>
                                <a href="{{route('mymap')}}" class="boxed-btn3">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- slider_area_end -->

    <!-- where_togo_area_start  -->
    <div class="where_togo_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="form_area">
                        <h3>Where you want to go?</h3>
                    </div>
                </div><br><br>
                <div class="col-lg-12">
                    <div class="search_wrap">
                        <form class="search_form" >
                            <!-- <div class="input_field">
                                <input type="text" placeholder="Where to go?">
                            </div> -->
                            <!-- <div class="input_field">
                                <input id="datepicker" placeholder="Date">
                            </div> -->
                            <!-- <div class="input_field">
                                <select>
                                    <option data-display="Travel type">Travel type</option>
                                    <option value="1">Some option</option>
                                    <option value="2">Another option</option>
                                </select>
                            </div> -->
                            <!-- <div class="search_btn">
                                <button href="{{route('map')}}" class="boxed-btn3 " type="submit" >Show the world map in any mode</button>
                            </div> -->
                            <a href="{{route('mymap3')}}" class="boxed-btn3">Show World Map In Any Mode</a>
                            
                            <!-- <div class="search_btn">
                                <button class="boxed-btn3 " type="submit" >Explore Zoning District</button>
                            </div> -->
                            <a href="{{route('mymap1')}}" class="boxed-btn3">Query Districts </a>
                            <!-- <div class="search_btn">
                                <button class="boxed-btn3 " type="submit" >Query your Neighborhoods</button>
                            </div> -->
                            <a href="{{route('mymap2')}}" class="boxed-btn3">Query Transport Center locations</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- where_togo_area_end  -->
    
    <!-- popular_destination_area_start  -->
    <div class="popular_destination_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center mb_70">
                        <h3>Popular Destination</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="{{asset('img/destination/1.png')}}" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">Italy  </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="{{asset('img/destination/2.png')}}" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">Brazil  </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="{{asset('img/destination/3.png')}}" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">America  </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="{{asset('img/destination/4.png')}}" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">Nepal  </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="{{asset('img/destination/5.png')}}" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">Maldives  </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="{{asset('img/destination/6.png')}}" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">Indonesia  </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popular_destination_area_end  -->

  

    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Popular Places</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="{{asset('img/place/1.png')}}" alt="">
                            <a href="#" class="prise">$800</a>
                        </div>
                        <div class="place_info">
                            <a href="#"><h3>California</h3></a>
                            <p>United State of America</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i>
                                     <a href="#">(20 Review)</a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">3 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="{{asset('img/place/2.png')}}" alt="">
                            <a href="#" class="prise">$400</a>
                        </div>
                        <div class="place_info">
                            <a href="#"><h3>Korola Megna</h3></a>
                            <p>United State of America</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i>
                                     <a href="#">(98 Review)</a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">18 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="{{asset('img/place/3.png')}}" alt="">
                            <a href="#" class="prise">$1000</a>
                        </div>
                        <div class="place_info">
                            <a href="#"><h3>London</h3></a>
                            <p>United State of America</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i>
                                     <a href="#">(920 Review)</a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">12 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="{{asset('img/place/4.png')}}" alt="">
                            <a href="#" class="prise">$600</a>
                        </div>
                        <div class="place_info">
                            <a href="#"><h3>Miami Beach</h3></a>
                            <p>United State of America</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i>
                                     <a href="#">(20 Review)</a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">7 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="{{asset('img/place/5.png')}}" alt="">
                            <a href="#" class="prise">$700</a>
                        </div>
                        <div class="place_info">
                            <a href="#"><h3>California</h3></a>
                            <p>United State of America</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i>
                                     <a href="#">(80 Review)</a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">44 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="{{asset('img/place/6.png')}}" alt="">
                            <a href="#" class="prise">$300</a>
                        </div>
                        <div class="place_info">
                            <a href="#"><h3>Saintmartine Iceland</h3></a>
                            <p>United State of America</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i>
                                     <a href="#">(3300 Review)</a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">12 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>


    <div class="video_area video_bg overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video_wrap text-center">
                        <h3>Enjoy Video</h3>
                        <div class="video_icon">
                            <a class="popup-video video_play_button" href="https://www.youtube.com/watch?v=f59dDEk57i0">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="travel_variation_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="{{asset('img/svg_icon/1.svg')}}" alt="">
                        </div>
                        <h3>Comfortable Journey</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="{{asset('img/svg_icon/2.svg')}}" alt="">
                        </div>
                        <h3>Luxuries Hotel</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="{{asset('img/svg_icon/3.svg')}}" alt="">
                        </div>
                        <h3>Travel Guide</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- testimonial_area  -->
    <div class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="{{asset('img/mm.jpg')}}" alt="" width="100px" height="100px">
                                        </div>
                                        <p>” Traveling - it leaves you speechless, then turns you into a storyteller”</p>
                                        <div class="testmonial_author">
                                            <h3>- Ebn Batuta</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="{{asset('img/mmm.jpg')}}" alt="" width="100px" height="100px">
                                        </div>
                                        <p>”LIFE IS EITHER A DARING ADVENTURE OR NOTHING AT ALL”</p>
                                        <div class="testmonial_author">
                                            <h3>- Hellen Keller</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="{{asset('img/mmmm.jpg')}}" alt="" width="100px" height="100px">
                                        </div>
                                        <p>” THE REAL VOYAGE OF DISCOVERY CONSISTS NOT IN SEEKING NEW LANDSCAPES, BUT IN HAVING NEW EYES”</p>
                                        <div class="testmonial_author">
                                            <h3>- MARCEL PROUST</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->


    <div class="recent_trip_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Recent Tips</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="{{asset('img/post/post_32.jpg')}}" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>March 27, 2020</span>
                            </div>
                            <a href="#">
                                
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="{{asset('img/post/post_34.jpg')}}" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Feb 12, 2020</span>
                            </div>
                            <a href="#">
                               
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="{{asset('img/post/post_40.jpg')}}" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>April 14, 2020</span>
                            </div>
                            <a href="#">
                                
                            </a>
                        </div>
                    </div>
                </div><br><br>


                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="{{asset('img/post/post_41.jpg')}}" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>July 22, 2020</span>
                            </div>
                            <a href="#">
                               
                            </a>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="{{asset('img/post/post_44.jpg')}}" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>December 1, 2020</span>
                            </div>
                            <a href="#">
                               
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="{{asset('img/post/post_37.jpg')}}" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Sep 4, 2020</span>
                            </div>
                            <a href="#">
                               
                            </a>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>



    @include('include.footer')

  <!-- Modal -->
  <form method="GET" action="/bayan/results">
  <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="serch_form">
            <input type="text" placeholder="Search" name="search" >
            <button type="submit">search</button>
        </div>
      </div>
    </div>
  </div></form>
    <!-- link that opens popup -->
<!--     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script> -->
    <!-- JS here -->
    <script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/ajax-form.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('js/scrollIt.js')}}"></script>
    <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/gijgo.min.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
   

    
    <!--contact js-->
    <script src="{{asset('js/contact.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/jquery.form.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>


    <script src="{{asset('js/main.js')}}"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
    </script>
</body>

</html>