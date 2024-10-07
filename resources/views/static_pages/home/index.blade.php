@extends('layouts.ws_layout.shared.layout')
@push('styles')
<style>
   .sub-header {
      display: none;
   }

   .fixed .slider-container {
      height: calc(100vh - 50px);
   }

   .right-slide {
      width: 77%;
   }

   .fixed .horizontal-menu .bottom-navbar {
      height: 0;
   }

   .fixed .bottom-navbar .navbar-brand-wrapper {
      position: relative;
      top: 60px;
      z-index: 9;
   }

   .fixed a.navbar-brand.brand-logo {
      height: 120px;
      width: 120px;
   }

   .fixed .horizontal-menu .bottom-navbar .page-navigation {
      top: 38px;
      background-color: transparent;
   }

   .fixed .horizontal-menu .bottom-navbar .page-navigation>.nav-item>.nav-link,
   .fixed .horizontal-menu .bottom-navbar .page-navigation>.nav-item>.nav-link .menu-icon {
      color: #fff
   }

   .fixed li.nav-item.search {
      background-color: transparent;
      color: #fff;
   }

   .horizontal-menu .bottom-navbar .page-navigation>.nav-item.active>.nav-link .menu-title {
      color: #fff;
   }

   .horizontal-menu.fixed-on-scroll .bottom-navbar .page-navigation>.nav-item.active>.nav-link .menu-title {
      color: #00112a;
   }

   nav.bottom-navbar.card-inverse-info {
      border: 0 !important;
   }

   li.nav-item.active {
      border: 0;
   }

   @media (max-width: 991.98px) {
      .main-panel {
         padding-top: 50px;
      }

      .fixed .horizontal-menu .bottom-navbar {
         height: auto;
      }

      .fixed .bottom-navbar .navbar-brand-wrapper {
         position: relative;
         top: 0px;
         z-index: 9;
      }

      .bottom-navbar .navbar-brand-wrapper {
         position: relative;
         top: 0px;
         z-index: 9;
      }

      .fixed a.navbar-brand.brand-logo {
         height: 120px;
         width: 120px;
      }

      .fixed .horizontal-menu .bottom-navbar .page-navigation {
         top: 0px;
         background: rgba(0, 23, 55, 0.2);
      }

      .fixed .horizontal-menu .bottom-navbar .page-navigation>.nav-item>.nav-link,
      .fixed .horizontal-menu .bottom-navbar .page-navigation>.nav-item>.nav-link .menu-icon {
         color: #00112a
      }

      .horizontal-menu .bottom-navbar .page-navigation>.nav-item>.nav-link,
      .horizontal-menu .bottom-navbar .page-navigation>.nav-item>.nav-link .menu-icon {
         color: #00112a
      }

      .fixed li.nav-item.search {
         background-color: transparent;
         color:  #00112a
      }

      .horizontal-menu .bottom-navbar .page-navigation {
         top: 0px;
         background-color: transparent;
         background: rgba(0, 23, 55, 0.2);
      }

      .horizontal-menu .bottom-navbar .page-navigation>.nav-item.active>.nav-link .menu-title {
    color:  #00112a
}


   }
</style>
@endpush
@section('slider')
<div class="home-slider">
   <div class="hero_slider_container">
      <div class="overlay"></div>
      <div class="slider-container">
         <div class="left-slide">
            <div class="bg-light" style="background-image: url({{url('storage/file/main-slider.jpg')}})">
               <h1 class="text-custom">Lorem Ipsum</h1>
               <p class="text-custom">Lorem Ipsum</p>
            </div>
            <div class="bg-light" style="background-image: url({{url('storage/file/main-slider.jpg')}})">
               <h1 class="text-custom">Lorem Ipsum</h1>
               <p class="text-custom">Lorem Ipsum</p>
            </div>
            <div class="bg-light" style="background-image: url({{url('storage/file/main-slider.jpg')}})">
               <h1 class="text-custom">Lorem Ipsum</h1>
               <p class="text-custom">Lorem Ipsum</p>
            </div>
            <div class="bg-light" style="background-image: url({{url('storage/file/main-slider.jpg')}})">
               <h1 class="text-custom">Lorem Ipsum</h1>
               <p class="text-custom">Lorem Ipsum</p>
            </div>
         </div>
         <div class="right-slide">
            <div style="background-image: url({{url('storage/file/slider-four-min.jpg')}})">
               <video poster="#fff" autoplay="autoplay" loop="loop" muted="muted" playsinline="" width="600" oncontextmenu="return false;" src="https://statics.abstaging.xyz/statics/images/home/mainvedio.mp4" height="338" preload="none" class="w-auto inline-flex" __idm_id__="578548737"></video>
            </div>
            <div style="background-image: url({{url('storage/file/slider-two-min.jpg')}})"></div>
            <div style="background-image: url({{url('storage/file/slider-three-min.jpg')}})"></div>
            <div style="background-image: url({{url('storage/file/slider-one-min.jpg')}})"></div>
         </div>
         <div class="action-buttons">
            <button class="down-button">
               <!-- <i class="fas fa-arrow-down"></i> -->
               <span>❮</span>
            </button>
            <button class="up-button">
               <!-- <i class="fas fa-arrow-up"></i> -->
               <span>❯</span>
            </button>
         </div>
      </div>
   </div>
</div>
@endsection
@section('search')
<div id="responsive-home-slider" class="carousel slide responsive-home-slider" data-ride="carousel">
   <ul class="carousel-indicators">
      <li data-target="#responsive-home-slider" data-slide-to="0" class="active"></li>
      <li data-target="#responsive-home-slider" data-slide-to="1"></li>
      <li data-target="#responsive-home-slider" data-slide-to="2"></li>
      <li data-target="#responsive-home-slider" data-slide-to="3"></li>
   </ul>
   <div class="carousel-inner">
      <div class="carousel-item active">
         <img src="{{asset('storage/file/slider-one-min.jpg')}}" alt="">
         <div class="carousel-caption">
            <h3>Los Angeles</h3>
            <p>We had such a great time in LA!</p>
         </div>
      </div>
      <div class="carousel-item">
         <img src="{{asset('storage/file/slider-two-min.jpg')}}" alt="">
         <div class="carousel-caption">
            <h3>Chicago</h3>
            <p>Thank you, Chicago!</p>
         </div>
      </div>
      <div class="carousel-item">
         <img src="{{asset('storage/file/slider-three-min.jpg')}}" alt="">
         <div class="carousel-caption">
            <h3>New York</h3>
            <p>We love the Big Apple!</p>
         </div>
      </div>
      <div class="carousel-item">
         <img src="{{asset('storage/file/slider-four-min.jpg')}}" alt="">
         <div class="carousel-caption">
            <h3>New York</h3>
            <p>We love the Big Apple!</p>
         </div>
      </div>
   </div>
   <a class="carousel-control-prev" href="#responsive-home-slider" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
   </a>
   <a class="carousel-control-next" href="#responsive-home-slider" data-slide="next">
      <span class="carousel-control-next-icon"></span>
   </a>
</div>
@endsection
@section('content')
<div class=" homepage">
   <div class="line">
      <span class="icon">
         <i class="mdi mdi-information-variant"></i>
      </span>
      <h2 class="section_title">@lang('data.Static.Our Features')</h2>
   </div>
   <div class="container">
      <div class="front-row">
         <div class="row">
            <div class="col-lg-6 service_item classes text-left d-flex flex-column justify-content-center">
               <div class="video">
                  <video width="100%" controls>
                     <source src="{{asset('storage/file/video-1.mp4')}}" type="video/mp4">
                     Your browser does not support HTML video.
                  </video>
               </div>
            </div>
            <div class="col-lg-6 service_item classes text-left d-flex flex-column align-items-center justify-content-center">
               <div class="row">

                  <div class="col-md-12">
                     <h2 class="home-title">
                        @lang('data.Static.Banan Academy')
                     </h2>
                     <p class="about_desc">
                        @lang('data.Static.We simulate the process in different stages in terms of explanation and interaction and evaluation'). @lang('data.Static.We also provide you with professional digital content that helps you understand your study materials')
                     </p>
                     <ul class="classes">
                        <li>
                           <span class="check">
                              <i class="mdi mdi-check"></i>
                           </span>@lang('data.Static.High-quality educational content with the highest teaching strategies')
                        </li>
                        <li>
                           <span class="check">
                              <i class="mdi mdi-check"></i>
                           </span>@lang('data.Static.Virtual classes with modern technologies')
                        </li>
                        <li>
                           <span class="check">
                              <i class="mdi mdi-check"></i>
                           </span>@lang('data.Static.Exercises and tests that deepen your understanding and improve your achievement level')
                        </li>
                        <li>
                           <span class="check">
                              <i class="mdi mdi-check"></i>
                           </span>@lang('data.Static.Online reservation for the student with the teacher')
                        </li>
                        <li>
                           <span class="check">
                              <i class="mdi mdi-check"></i>
                           </span>@lang('data.Static.Add a question bank')
                        </li>
                        <li>
                           <span class="check">
                              <i class="mdi mdi-check"></i>
                           </span>@lang('data.Static.Ongoing technical support')
                        </li>
                     </ul>
                     <div class="button-home">
                        <button class="btn btn-outline-dark btn-fw">@lang('data.Static.Join Banan Academy Now')</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="line">
      <span class="icon">
         <i class="mdi mdi-checkbox-marked-circle-outline"></i>
      </span>
      <h2 class="section_title">{{__('data.Join Banan Academy')}}</h2>
   </div>
   <div class="container home-hover">
      <div class="front-even-row front-row">
         <div class="">
            <div class="hover-boxes">
               <div class="row flip-front-pages">
                  <div class="col-md-12 col-lg-4">
                     <div class="flip-box">
                        <div class="flip-box-inner">
                           <div class="flip-box-front">
                              <div class="flip-box-front-img" style="background-image: url({{url('storage/file/student.jpg')}})">
                                 
                              </div>
                              
                              <div class="flip-box-front-title">
                                 <h2>{{__('data.Student')}}</h2>
                              </div>
                           </div>
                           <div class="flip-box-back">
                              <h3>{{__('data.Static.Banan Academy provides you with professional digital content that helps you better understand your study subjects, and also provides you with many exercises that deepen your understanding of academic topics and assess your level')}}</h3>
                              <div class="button-row">
                                 <button class="button btn-dark">{{__('data.Join Banan Academy')}}</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 col-lg-4">
                     <div class="flip-box">
                        <div class="flip-box-inner">
                           <div class="flip-box-front">
                              <div class="flip-box-front-img" style="background-image: url({{url('storage/file/teacher.jpg')}})">
                                 
                              </div>
                              
                              <div class="flip-box-front-title">
                                 <h2>{{__('data.Teacher')}}</h2>
                              </div>
                           </div>
                           <div class="flip-box-back">
                              <h3>{{__('data.Static.Banan Academy brings you together with your students in virtual classes to explain your educational materials and communicate with them, and provide them with your knowledge and educational experiences using the latest technologies and educational aids')}}</h3>
                              <div class="button-row">
                                 <button class="button btn-dark">{{__('data.Join Banan Academy')}}</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 col-lg-4">
                     <div class="flip-box">
                        <div class="flip-box-inner">
                           <div class="flip-box-front">
                              <div class="flip-box-front-img" style="background-image: url({{url('storage/file/parent.jpg')}})">
                                
                              </div>
                              
                              <div class="flip-box-front-title">
                                 <h2>{{__('data.Parent')}}</h2>
                              </div>
                           </div>
                           <div class="flip-box-back">
                              <h3>{{__('data.Static.Banan Academy helps you follow your children, track their progress, and provide the appropriate environment to help and encourage them to learn and truly understand through the learning methods offered by the Academy')}}</h3>
                              <div class="button-row">
                                 <button class="button btn-dark">{{__('data.Join Banan Academy')}}</button>
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
   <div class="line">
               <span class="icon">
               <i class="mdi mdi-checkbox-marked-circle-outline"></i>
               </span>
               <h2 class="section_title">{{__('data.Static.Training Tracks')}}</h2>
            </div>
   <div class="training-courses front-row">
         <div class="new-courses">
            
            <div class="row">
               <div class="col-md-4">
                  <div class="new-course">
                     <div class="bk-img" style="background-image: url({{url('storage/file/img-one-min.jpg')}}); height: 250px; background-repeat:no-repeat; background-size: cover;">
                        <div class="category-transparent">Education</div>
                        <div class="course-transparent">Active digital education</div>
                     </div>
                     <div class="courses-data">
                        <div class="instructor-img">
                           <img src="{{asset('storage/file/default.png')}}" alt="">
                        </div>
                        <div class="instructor-text">
                           <div class="instructor-name">
                              <h3>Mahmoud Hammad</h3>
                           </div>
                           <div class="instructor-title">
                              <p>Professional Teacher</p>
                           </div>
                        </div>
                     </div>
                     <div class="training-course-footer">
                        <div class="footer-inner">
                           <div class="row">
                              <div class="col-md-6 course-join">
                                 <buttton class="btn btn-success">Join Course</buttton>
                                 <div class="stars">
                                    <i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i>
                                 </div>
                              </div>
                              <div class="col-md-6 price-course">
                                 <span>200 SAR</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="new-course">
                     <div class="bk-img" style="background-image: url({{url('storage/file/img-one-min.jpg')}}); height: 250px; background-repeat:no-repeat; background-size: cover;">
                        <div class="category-transparent">Education</div>
                        <div class="course-transparent">Active digital education</div>
                     </div>
                     <div class="courses-data">
                        <div class="instructor-img">
                           <img src="{{asset('storage/file/default.png')}}" alt="">
                        </div>
                        <div class="instructor-text">
                           <div class="instructor-name">
                              <h3>Mahmoud Hammad</h3>
                           </div>
                           <div class="instructor-title">
                              <p>Professional Teacher</p>
                           </div>
                        </div>
                     </div>
                     <div class="training-course-footer">
                        <div class="footer-inner">
                           <div class="row">
                              <div class="col-md-6 course-join">
                                 <buttton class="btn btn-success">Join Course</buttton>
                                 <div class="stars">
                                    <i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i>
                                 </div>
                              </div>
                              <div class="col-md-6 price-course">
                                 <span>200 SAR</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="new-course">
                     <div class="bk-img" style="background-image: url({{url('storage/file/img-one-min.jpg')}}); height: 250px; background-repeat:no-repeat; background-size: cover;">
                        <div class="category-transparent">Education</div>
                        <div class="course-transparent">Active digital education</div>
                     </div>
                     <div class="courses-data">
                        <div class="instructor-img">
                           <img src="{{asset('storage/file/default.png')}}" alt="">
                        </div>
                        <div class="instructor-text">
                           <div class="instructor-name">
                              <h3>Mahmoud Hammad</h3>
                           </div>
                           <div class="instructor-title">
                              <p>Professional Teacher</p>
                           </div>
                        </div>
                     </div>
                     <div class="training-course-footer">
                        <div class="footer-inner">
                           <div class="row">
                              <div class="col-md-6 course-join">
                                 <buttton class="btn btn-success">Join Course</buttton>
                                 <div class="stars">
                                    <i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i>
                                 </div>
                              </div>
                              <div class="col-md-6 price-course">
                                 <span>200 SAR</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="line">
               <span class="icon">
               <i class="mdi mdi-checkbox-marked-circle-outline"></i>
               </span>
               <h2 class="section_title">{{__('data.Static.Training Tracks')}}</h2>
            </div>
      <div class="training-tracks front-row">
         <div class="tracks">
          
            <div class="row">
               <div class="col-md-4">
                  <div class="track" style="background-image: url({{url('storage/file/engineering.jpg')}});">
                     <a class="track-data" href="#">
                        <div class="track-title">
                           <h3>Engineering</h3>
                        </div>
                        <div class="courses-number">
                           <h5><span class="course-number">358</span>Course</h5>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="track" style="background-image: url({{url('storage/file/graphics.jpg')}});">
                     <a class="track-data" href="#">
                        <div class="track-title">
                           <h3>Graphics</h3>
                        </div>
                        <div class="courses-number">
                           <h5><span class="course-number">227</span>Course</h5>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="track" style="background-image: url({{url('storage/file/programming.jpg')}});">
                     <a class="track-data" href="#">
                        <div class="track-title">
                           <h3>Programming</h3>
                        </div>
                        <div class="courses-number">
                           <h5><span class="course-number">500</span>Course</h5>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="track" style="background-image: url({{url('storage/file/english.jpg')}});">
                     <a class="track-data" href="#">
                        <div class="track-title">
                           <h3>English</h3>
                        </div>
                        <div class="courses-number">
                           <h5><span class="course-number">100</span>Course</h5>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="track" style="background-image: url({{url('storage/file/languages.jpg')}});">
                     <a class="track-data" href="#">
                        <div class="track-title">
                           <h3>Languages</h3>
                        </div>
                        <div class="courses-number">
                           <h5><span class="course-number">312</span>Course</h5>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="track" style="background-image: url({{url('storage/file/os.jpg')}});">
                     <a class="track-data" href="#">
                        <div class="track-title">
                           <h3>Operating Systems</h3>
                        </div>
                        <div class="courses-number">
                           <h5><span class="course-number">225</span>Course</h5>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   <div class="home-comments front-row">
      <section class="section-medium section-arrow--bottom-center section-arrow-primary-color bg-primary">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-white text-center">
                  <h2 class="section-title ">{{__('data.Static.What do People Think of Our Academy')}}</h2>
                  <p class="section-sub-title">
                     {{__('data.Static.We are a passionate courses Academy that specializes in powerful and well-developed')}}
                     <br> {{__('data.Static.Academic courses')}} &amp; {{__('data.Static.online Educational services')}}.
                  </p>
               </div>
            </div>
         </div>
      </section>
      <section class="section-primary t-bordered">
         <div class="container">
            <div class="row testimonial-three testimonial-three--col-three">
               <div class="col-lg-4 col-md-12 testimonial-three-col">
                  <div class="testimonial-inner">
                     <div class="testimonial-image" itemprop="image">
                        <img width="180" height="180" src="{{asset('storage/file/user.png')}}">
                     </div>
                     <div class="testimonial-content">
                        <p>
                           Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                        </p>
                     </div>
                     <div class="testimonial-meta">
                        <strong class="testimonial-name" itemprop="name">Anna Vandana</strong>
                        <span class="testimonial-job-title" itemprop="jobTitle">CEO</span> – <a class="testimonial-link" href="#">Media Wiki</a>
                     </div>
                  </div>
               </div>

               <div class="col-lg-4 col-md-12 testimonial-three-col">
                  <div class="testimonial-inner">
                     <div class="testimonial-image" itemprop="image">
                        <img width="180" height="180" src="{{asset('storage/file/user.png')}}">
                     </div>

                     <div class="testimonial-content">
                        <p>
                           In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                        </p>
                     </div>

                     <div class="testimonial-meta">
                        <strong class="testimonial-name" itemprop="name">Anna Vandana</strong>
                        <span class="testimonial-job-title" itemprop="jobTitle">CEO</span> – <a class="testimonial-link" href="#">Media Wiki</a>
                     </div>
                  </div>
               </div>

               <div class="col-lg-4 col-md-12 testimonial-three-col">
                  <div class="testimonial-inner">
                     <div class="testimonial-image" itemprop="image">
                        <img width="180" height="180" src="{{asset('storage/file/user.png')}}">
                     </div>
                     <div class="testimonial-content">
                        <p>
                           Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                        </p>
                     </div>
                     <div class="testimonial-meta">
                        <strong class="testimonial-name" itemprop="name">Anna Vandana</strong>
                        <span class="testimonial-job-title" itemprop="jobTitle">CEO</span> – <a class="testimonial-link" href="#">Media Wiki</a>
                     </div>
                  </div>
               </div>

               <div class="col-lg-4 col-md-12 testimonial-three-col">
                  <div class="testimonial-inner">
                     <div class="testimonial-image" itemprop="image">
                        <img width="180" height="180" src="{{asset('storage/file/user.png')}}">
                     </div>

                     <div class="testimonial-content">
                        <p>
                           In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                        </p>
                     </div>

                     <div class="testimonial-meta">
                        <strong class="testimonial-name" itemprop="name">Anna Vandana</strong>
                        <span class="testimonial-job-title" itemprop="jobTitle">CEO</span> – <a class="testimonial-link" href="#">Media Wiki</a>
                     </div>
                  </div>
               </div>

               <div class="col-lg-4 col-md-12 testimonial-three-col">
                  <div class="testimonial-inner">
                     <div class="testimonial-image" itemprop="image">
                        <img width="180" height="180" src="{{asset('storage/file/user.png')}}">
                     </div>
                     <div class="testimonial-content">
                        <p>
                           Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                        </p>
                     </div>
                     <div class="testimonial-meta">
                        <strong class="testimonial-name" itemprop="name">Anna Vandana</strong>
                        <span class="testimonial-job-title" itemprop="jobTitle">CEO</span> – <a class="testimonial-link" href="#">Media Wiki</a>
                     </div>
                  </div>
               </div>

               <div class="col-lg-4 col-md-12 testimonial-three-col">
                  <div class="testimonial-inner">
                     <div class="testimonial-image" itemprop="image">
                        <img width="180" height="180" src="{{asset('storage/file/user.png')}}">
                     </div>

                     <div class="testimonial-content">
                        <p>
                           In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                        </p>
                     </div>

                     <div class="testimonial-meta">
                        <strong class="testimonial-name" itemprop="name">Anna Vandana</strong>
                        <span class="testimonial-job-title" itemprop="jobTitle">CEO</span> – <a class="testimonial-link" href="#">Media Wiki</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
</div>
@endsection

@push('scripts')
<script>
   // Navbar With Scroll
   $(window).scroll(function() {
      var scroll = $(this).scrollTop();
      if (scroll > 80) {
         $('.container-scroller').removeClass('fixed');
      } else {
         $('.container-scroller').addClass('fixed');
      }
   });
</script>
@endpush