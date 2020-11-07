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
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_4">
      <div class="container">
          <div class="row">
              <div class="col-xl-12">
                  <div class="bradcam_text text-center">
                      <h3>{{$post->title}}</h3>
                      <p>{{$post->created_at->diffForHumans()}}</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--/ bradcam_area  -->

   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="{{$post->featured}}" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>{{$post->title}}
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                     @foreach($post->tags as $tag)
                        <li><a href="#"><i class="fa fa-user"></i>{{$tag->tag}}</a></li>
                        @endforeach
                     </ul>
                     <p class="excert">
                       {{$post->content}}
                     </p>

                  </div>
               </div>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Bayan Aljerf</p>
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                     </div>
                     <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                     </ul>
                  </div>
                  <div class="navigation-area">
                     <div class="row">
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="img/post/preview.png" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Prev </p>
                              @if ($prev)
                              <a href="{{route('singlepost',['slug'=>$prev->slug])}}">
                                 <h4>{{$prev->title}}</h4>
                              </a>
                              @endif
                           </div>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Next </p>
                              @if ($next)
                              <a href="{{route('singlepost',['slug'=>$next->slug])}}">
                                 <h4>{{$next->title}}</h4>
                              </a>
                              @endif
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="img/post/next.png" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
              
         
               <div class="comment-form">
                  <h4>Leave a Reply</h4>
                
                        @include('include.disqus')
                
               </div>
            </div>
            <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form method="GET" action="/bayan/results">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'" name="search">
                                        <div class="input-group-append">
                                            <button class="btn" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Search</button>
                            </form>
                        </aside>

                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">Categories</h4>
                     <ul class="list cat-list">
                     @foreach($categories1 as $category1)
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>{{$category1->name}}</p>
                                        <p>{{$category1->posts->count()}}</p>
                                    </a>
                                </li>
                                @endforeach
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Recent Post</h3>
                     @foreach($posts as $post)
						    <!-- post -->
                            <div class="media post_item">
                                <img src="{{$post->featured}}" alt="post" width="100px" height="100px">
                                <div class="media-body">
                                    <a href="#">
                                        <h3>{{$post->title}}</h3>
                                    </a>
                                    <p>{{$post->created_at->diffForHumans()}}</p>
                                </div>
                            </div>
                          @endforeach
                  </aside>
                  <aside class="single_sidebar_widget tag_cloud_widget">
                     <h4 class="widget_title">Tag Clouds</h4>
                     <ul class="list">
                     @foreach($tags as $tag)
                                <li>
                                    <a href="#">{{$tag->tag}}</a>
                                </li>
                                @endforeach
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget instagram_feeds">
                     <h4 class="widget_title">Instagram Feeds</h4>
                     <ul class="instagram_row flex-wrap">
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="img/post/post_5.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="img/post/post_6.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="img/post/post_7.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="img/post/post_8.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="img/post/post_9.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="img/post/post_10.png" alt="">
                           </a>
                        </li>
                     </ul>
                  </aside>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->


    <!-- footer start -->
    @include('include.footer')

  <!--/ footer end  -->

      <!-- Modal -->
      <form method="GET" action="/bayan/results">
      <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="serch_form">
               <input type="text" placeholder="Search" name ="search">
               <button type="submit">search</button>
            </div>
         </div>
      </div>
      </div></form>

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

  <!--contact js-->
  <script src="{{asset('js/contact.js')}}"></script>
  <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('js/jquery.form.js')}}"></script>
  <script src="{{asset('js/jquery.validate.min.js')}}"></script>
  <script src="{{asset('js/mail-script.js')}}"></script>

   <script src="{{asset('js/main.js')}}"></script>

</body>

</html>