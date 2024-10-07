@extends('layouts.ws_layout.shared.layout')
@section('sub-header')
<header class="sub-header">
   <div class="overlay">
      <h1>Banan Academy</h1>
      <h3>Reasons for Choosing US</h3>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero nostrum quis, odio veniam itaque ullam debitis qui magnam consequatur ab. Vero nostrum quis, odio veniam itaque ullam debitis qui magnam consequatur ab.</p>
      <br>
      <button>READ MORE</button>
   </div>
</header>
@endsection
@section('content')
<div id="app">
   <main class="training">
      <div class="online-training front-row">
         <div class="join-us">
            <h2 class="training-text">@lang('data.Static.Banan Training Academy offers remote training courses in many sciences and skills in an integrated and simplified manner through a distinguished elite of trainers and experts').</h2>
         </div>
         <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
               <div class="teaching"><img src="{{asset('storage/file/training.jpg')}}"></div>
            </div>
            <div class="col-md-3"></div>
         </div>
         <div class="but"><button class="btn btn-success btn-lg">Join now</button></div>
      </div>
      <div class="line">
               <span class="icon">
               <i class="mdi mdi-checkbox-marked-circle-outline"></i>
               </span>
               <h2 class="section_title">{{__('data.Static.New Courses')}}</h2>
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
                           <h5><span class="course-number">358 </span>Course</h5>
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
                           <h5><span class="course-number">227 </span>Course</h5>
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
                           <h5><span class="course-number">500 </span>Course</h5>
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
                           <h5><span class="course-number">100 </span>Course</h5>
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
                           <h5><span class="course-number">312 </span>Course</h5>
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
                           <h5><span class="course-number">225 </span>Course</h5>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="c-counter front-row" style="background-image: linear-gradient(0deg, rgba(14,62,127,0.65), rgba(14,62,127,0.65)), url('storage/file/class-ground.jpg');">
         <div class="row">
            <h2 class="text-white"> @lang('data.Static.We simulate the process in different stages in terms of explanation and interaction and evaluation'). @lang('data.Static.We also provide you with professional digital content that helps you understand your study materials')</h2>
            <div class="col-md-3 count">
               <div class="counting">
                  <div class="counter-icon">
                     <img src="{{asset('storage/file/counter-teacher.png')}}" alt="">
                  </div>
                  <div class="counter-collector">
                     <div class="counter-text">
                        <h3>{{__('data.Teachers')}}</h3>
                     </div>
                     <div class="counter-number">
                        <span>200</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3 count">
               <div class="counting">
                  <div class="counter-icon">
                     <img src="{{asset('storage/file/counter-student.png')}}" alt="">
                  </div>
                  <div class="counter-collector">
                     <div class="counter-text">
                        <h3>{{__('data.Students')}}</h3>
                     </div>
                     <div class="counter-number">
                        <span>25000</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3 count">
               <div class="counting">
                  <div class="counter-icon">
                     <img src="{{asset('storage/file/counter-course.png')}}" alt="">
                  </div>
                  <div class="counter-collector">
                     <div class="counter-text">
                        <h3>{{__('data.Courses')}}</h3>
                     </div>
                     <div class="counter-number">
                        <span>500</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3 count">
               <div class="counting">
                  <div class="counter-icon">
                     <img src="{{asset('storage/file/counter-exam.png')}}" alt="">
                  </div>
                  <div class="counter-collector">
                     <div class="counter-text">
                        <h3>{{__('data.Exams')}}</h3>
                     </div>
                     <div class="counter-number">
                        <span>325</span>
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
               <h2 class="section_title">Lorem Ipsum</h2>
            </div>
      <div class="motgen front-row">
      <section class="features s-block">
     
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 align-self-center">
                    <div class="s-head aos-init aos-animate" data-aos="fade-up">
                        <div class="text mb-4">
                            <h2 class="title">Why should you choose Banan Academy?</h2>
                            <h6 class="subtitle">This is an experimental text to test the shape and size of texts, the way they are displayed in this place, the size and color of the font, as this text is controlled and the possibility of changing it at any time by the site administration</h6>
                        </div>
                        <a class="btn btn-dark btn-rounded">More About us</a>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="row">
                        <div class="col-12 col-sm-6 p-2">
                            <div class="feature text-center">
                                <div class="icon mb-2">
                                    <i class="mdi mdi-book-open-page-variant"></i>
                                </div>
                                <div class="feat-text">
                                    <h6> Why should you choose Banan Academy?</h6>
                                    <p> This is an experimental text to test the shape and size of texts, the way they are displayed in this place, the size and color of the font, as this text is controlled and the possibility of changing it at any time by the site administration</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 p-2">
                            <div class="feature text-center">
                                <div class="icon mb-2">
                                <i class="mdi mdi-human-greeting"></i>
                                </div>
                                <div class="feat-text">
                                    <h6> Why should you choose Banan Academy?</h6>
                                    <p> This is an experimental text to test the shape and size of texts, the way they are displayed in this place, the size and color of the font, as this text is controlled and the possibility of changing it at any time by the site administration</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 p-2">
                            <div class="feature text-center">
                                <div class="icon mb-2">
                                <i class="mdi mdi-certificate"></i>
                                </div>
                                <div class="feat-text">
                                    <h6> Why should you choose Banan Academy?</h6>
                                    <p> This is an experimental text to test the shape and size of texts, the way they are displayed in this place, the size and color of the font, as this text is controlled and the possibility of changing it at any time by the site administration</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 p-2">
                            <div class="feature text-center">
                                <div class="icon mb-2">
                                <i class="mdi mdi-file-multiple"></i>
                                </div>
                                <div class="feat-text">
                                    <h6> Why should you choose Banan Academy?</h6>
                                    <p> This is an experimental text to test the shape and size of texts, the way they are displayed in this place, the size and color of the font, as this text is controlled and the possibility of changing it at any time by the site administration</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      </div>
      <div class="line">
               <span class="icon">
               <i class="mdi mdi-checkbox-marked-circle-outline"></i>
               </span>
               <h2 class="section_title">Lorem Ipsum</h2>
            </div>
      <div class="alqelada front-row">
     
      <section class="container whyqelada my-5">
     
        <div class="row">
            <div class="col-md-4 col-12 whyqelada__1">
                <h2>Why should you choose Banan academy</h2>
                <img src="{{asset('storage/file/laptop-course.png')}}" alt="image">
                <button class="btn-dark btn btn-rounded" type="button" data-toggle="modal" data-target="#whyqeladaModal">
                   More advantages
                </button>
            </div>

            <div class="col-md-4 col-12">
                <div class="whyqelada__card p-3 mb-3">
                    <div class="whyqelada__card--img">
                        <img src="{{asset('storage/file/board.svg')}}" alt="board">
                    </div>
                    <p class="mt-2">Training for entrepreneurs</p>
                    <span>Qualifies you to understand the business world and reach leadership positions in companies</span>
                </div>

                <div class="whyqelada__card p-3">
                    <div class="whyqelada__card--img">
                        <img src="{{asset('storage/file/badge.svg')}}" alt="badge">
                    </div>
                    <p class="mt-2">Certified and notarized certificates</p>
                    <span>From the&amp;nbsp;ِAlqelada Academy the agent of Kingston Academy for Modern Management Sciences, London</span>
                </div>
            </div>

            <div class="col-md-4 col-12">
                <div class="whyqelada__card p-3 mb-3">
                    <div class="whyqelada__card--img">
                        <img src="{{asset('storage/file/people.svg')}}" alt="pepole">
                    </div>
                    <p class="mt-2">Teachers of the highest level</p>
                    <span>Of the academic doctors specializing in Egyptian public universities</span>
                </div>

                <div class="whyqelada__card p-3">
                    <div class="whyqelada__card--img">
                        <img src="{{asset('storage/file/notebook.svg')}}" alt="notebook">
                    </div>
                    <p class="mt-2">Measurement tests for each session</p>
                    <span>Determines the level of complete understanding of the course axes with the automatic correction feature</span>
                </div>
            </div>
        </div>
    </section>
      </div>
      <div class="line">
               <span class="icon">
               <i class="mdi mdi-checkbox-marked-circle-outline"></i>
               </span>
               <h2 class="section_title">Lorem Ipsum</h2>
            </div>
      <div class="banan-system goals front-row">
    
      <div class="row">
            <div class="col-md-6">
              <div class="goal">
                <div class="img">
                  <img src="{{asset('storage/file/system-graduate.png')}}" class="img-fluid" alt="goals">
                </div>
                <div class="goal-text">
                  <h3>Students</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero nostrum quis, odio veniam itaque ullam debitis qui magnam consequatur ab.
                    </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="goal">
                <div class="img">
                  <img src="{{asset('storage/file/system-student.png')}}" class="img-fluid" alt="goals">
                </div>
                <div class="goal-text">
                  <h3>Employees</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero nostrum quis, odio veniam itaque ullam debitis qui magnam consequatur ab.
                    </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="goal">
                <div class="img">
                  <img src="{{asset('storage/file/system-search.png')}}" class="img-fluid" alt="goals">
                </div>
                <div class="goal-text">
                  <h3>Job seeker</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero nostrum quis, odio veniam itaque ullam debitis qui magnam consequatur ab.
                    </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="goal">
                <div class="img">
                  <img src="{{asset('storage/file/system-research.png')}}" class="img-fluid" alt="goals">
                </div>
                <div class="goal-text">
                  <h3>Seeker of knowledge</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero nostrum quis, odio veniam itaque ullam debitis qui magnam consequatur ab.
                    </p>
                </div>
              </div>
            </div>
          </div>
      </div>
   </main>
</div>
@endsection