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
   <main class="education">
      <div class="video front-odd-row front-row container">
         <div class="row">
            <div class="col-md-12">
               <h1 class="video-head">{{__('data.Static.Banan Academy')}}</h1>
               <div class="video-box">
                  <div class="video-inner">
                     <div class="video">
                        <video width="100%" controls>
                           <source src="{{asset('storage/file/video-1.mp4')}}" type="video/mp4">
                           Your browser does not support HTML video.
                        </video>
                     </div>
                     <h4 class="video-text">
                        {{__('data.Static.Professional digital content specially designed by a group of specialists to help you better understand your subjects')}}
                     </h4>
                     <div class="video-buttons">
                        <button class="btn btn-outline-primary btn-fw">{{__('data.Join Banan Academy')}}</button>
                        <button class="btn btn-outline-primary btn-fw">{{__('data.Login')}}</button>
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
      <div class="front-even-row front-row container hover-boxes">
     
         <div class="row flip-front-pages">
            <div class="col-md-12 col-lg-4">
               <div class="flip-box">
                  <div class="flip-box-inner">
                     <div class="flip-box-front">
                        <div class="flip-box-front-img" style="background-image: url({{url('storage/file/student.jpg')}})" >
                        <img src="{{asset('storage/file/student.jpg')}}" alt="">
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
                        <img src="{{asset('storage/file/teacher.jpg')}}" alt="">
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
      <div class="line">
    <span class="icon">
        <i class="mdi mdi-book"></i>
    </span>
    <h2 class="section_title">{{__('data.Static.How to learn with Banan?')}}</h2>
</div>
      <div class="front-even-row front-row infographic">
         <div class="infograph">
        
            <div class="infoimg"><img src="{{asset('storage/file/infograph.png')}}" alt=""></div>
         </div>
      </div>
      <div class="line">
    <span class="icon">
        <i class="mdi mdi-briefcase"></i>
    </span>
    <h2 class="section_title">{{__('data.Static.What does Banan Academy offer?')}}</h2>
</div>
      <div class="front-odd-row front-row container slider">
         <h3></h3>
         <div class="edu-slider">
         
            <!--Carousel Wrapper-->
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
               <!--Controls-->
               <!-- <div class="controls-top">
                  <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                  <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
                     class="fa fa-chevron-right"></i></a>
                  </div> -->
               <!--/.Controls-->
               <!--Slides-->
               <div class="carousel-inner" role="listbox">
                  <!--First slide-->
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="card mb-2">
                              <img class="card-img-top" src="{{asset('storage/file/slider-one-min.jpg')}}" alt="Card image cap">
                              <div class="card-body">
                                 <p class="card-text">
                                    {{__('data.Static.High-quality educational content with the latest teaching strategies')}}
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="card mb-2">
                              <img class="card-img-top" src="{{asset('storage/file/slider-three-min.jpg')}}" alt="Card image cap">
                              <div class="card-body">
                                 <p class="card-text">
                                    {{__('data.Static.Personalized learning in light of your potential, desire and fulfillment')}}
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="card mb-2">
                              <img class="card-img-top" src="{{asset('storage/file/slider-two-min.jpg')}}" alt="Card image cap">
                              <div class="card-body">
                                 <p class="card-text">
                                    {{__('data.Static.Virtual classes with modern technologies')}}
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--/.First slide-->
                  <!--Second slide-->
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="card mb-2">
                              <img class="card-img-top" src="{{asset('storage/file/img-one-min.jpg')}}" alt="Card image cap">
                              <div class="card-body">
                                 <p class="card-text">
                                    {{__('data.Static.Specialized teachers with a high level of competence and performance')}}
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="card mb-2">
                              <img class="card-img-top" src="{{asset('storage/file/slider-four-min.jpg')}}" alt="Card image cap">
                              <div class="card-body">
                                 <p class="card-text">
                                    {{__('data.Static.Reports and statistics on the level of students, evaluation and attendance reports')}}
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="card mb-2">
                              <img class="card-img-top" src="{{asset('storage/file/img-three-min.jpg')}}" alt="Card image cap">
                              <div class="card-body">
                                 <p class="card-text">
                                    {{__('data.Static.Ongoing technical and educational support and immediate response to questions and inquiries')}}
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--/.Second slide-->
                  <!--Third slide-->
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="card mb-2">
                              <img class="card-img-top" src="{{asset('storage/file/slide-five.jpg')}}" alt="Card image cap">
                              <div class="card-body">
                                 <p class="card-text">
                                    {{__('data.Static.Exercises and tests that deepen your understanding and improve your achievement')}}
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="card mb-2">
                              <img class="card-img-top" src="{{asset('storage/file/slide-six.jpg')}}" alt="Card image cap">
                              <div class="card-body">
                                 <p class="card-text">
                                    {{__('data.Static.Individual aid to help under-performing students')}}
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--/.Third slide-->
               </div>
               <!--/.Slides-->
               <!--Indicators-->
               <ol class="carousel-indicators" style="position: unset">
                  <li data-target="#multi-item-example" data-slide-to="0" class="active" style="background-color: #464dee;"></li>
                  <li data-target="#multi-item-example" data-slide-to="1" style="background-color: #464dee;"></li>
                  <li data-target="#multi-item-example" data-slide-to="2" style="background-color: #464dee;"></li>
               </ol>
               <!--/.Indicators-->
            </div>
            <!--/.Carousel Wrapper-->
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

      <div class="front-odd-row front-row banan-classes container">
         <div class="classes-students">
            <div class="row">
               <div class="col-md-6">
                  <h3>{{__('data.Static.Banan brings you with your students from anywhere')}}</h3>
                  <p>{{__('data.Static.The Academy provides you with a Banan classes service that provides you with all the tools that enable you to provide an excellent educational experience for your students anytime and anywhere')}}</p>
               </div>
               <div class="col-md-6">
                  <h3>{{__('data.Static.Build your study group')}}</h3>
                  <p>{{__('data.Static.Banan classes help you create your study groups and invite your students to teach interactively in virtual classrooms with audio and video, follow up with your students on a daily basis, and share with them all the lessons belongings, including assignments and tests')}}</p>
               </div>
               <div class="col-md-12 stu-btn">
                  <button class="btn btn-outline-primary btn-fw">{{__('data.Login')}}</button>
                  <button class="btn btn-outline-primary btn-fw">{{__('data.Register.Sign Up')}}</button>
               </div>
            </div>
         </div>
      </div>
   </main>
</div>
@endsection
