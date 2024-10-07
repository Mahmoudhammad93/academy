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
   <main class="classes">
      <div class="classes">
         <div class="front-odd-row front-row container"> 
            <div class="row front_row classes">
               <div class="col-lg-4 service_item classes text-center d-flex flex-column align-items-center justify-content-center">
                  <div style="text-align: center;">
                     <img style="width: 50%;" src="{{asset('storage/file/lecture.png')}}" alt="">
                  </div>
                  <h3>{{__('data.Static.Attend a live lecture')}}</h3>
                  <p>{{__('data.Static.Choose the appropriate class, subject, day and time for you to book the lecture')}}</p>
               </div>
               <div class="col-lg-4 service_item classes text-center d-flex flex-column align-items-center justify-content-center">
                  <div style="text-align: center;">
                     <img class="rem-res" style="width: 50%;" src="{{asset('storage/file/money.png')}}" alt="">
                  </div>
                  <h3></h3>
                  <p></p>
               </div>
               <div class="col-lg-4 service_item classes text-center d-flex flex-column align-items-center justify-content-center">
                  <div style="text-align: center;">
                     <img style="width: 50%;" src="{{asset('storage/file/teacher.png')}}" alt="">
                  </div>
                  <h3>{{__('data.Static.Contact the teacher directly')}}</h3>
                  <p>{{__('data.Static.Contact the teacher directly in your home at the time you have chosen')}}</p>
               </div>
            </div>
         </div>
         <div class="front-even-row front-row container">
            <div class="row front_row classes">
               <div class="col-lg-3 service_item classes text-center d-flex flex-column align-items-center justify-content-center">
                  <div style="text-align: center;">
                     <img style="width: 50%;" src="{{asset('storage/file/register.png')}}">
                  </div>
                  <h3>{{__('data.Static.Subscribe to the platform')}}</h3>
               </div>
               <div class="col-lg-3 service_item classes text-center d-flex flex-column align-items-center justify-content-center">
                  <div style="text-align: center;">
                     <img style="width: 50%;" src="{{asset('storage/file/cv.png')}}">
                  </div>
                  <h3>{{__('data.Static.Build your personal page')}}</h3>
               </div>
               <div class="col-lg-3 service_item classes text-center d-flex flex-column align-items-center justify-content-center">
                  <div style="text-align: center;">
                     <img style="width: 50%;" src="{{asset('storage/file/lec.png')}}">
                  </div>
                  <h3>{{__('data.Static.Create your study group')}}</h3>
               </div>
               <div class="col-lg-3 service_item classes text-center d-flex flex-column align-items-center justify-content-center">
                  <div style="text-align: center;">
                     <img style="width: 50%;" src="{{asset('storage/file/spread.png')}}">
                  </div>
                  <h3>{{__('data.Static.Expansion and spread')}}</h3>
               </div>
            </div>
         </div>
         <div class="front-row">
            <div class="row classes-odd-row front_row front_o classes classes-row">
               <div class="col-lg-8 service_item classes text-left d-flex flex-column align-items-start justify-content-start">
                  <div class="">
                  </div>
                  <p>{{__('data.Static.We offer you promotional videos that show your skills and creativity in teaching and your ability to help your students achieve the highest grades')}}</p>
                  <button class="btn btn-primary">{{__('data.Static.Register & start now')}}</button>
               </div>
               <div class="col-lg-4 service_item classes text-left d-flex flex-column align-items-start justify-content-start">
                  <div class="">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="video-holder">
                              <img style="width: 100px;" src="{{asset('storage/file/video.png')}}">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="video-holder">
                              <img style="width: 100px;" src="{{asset('storage/file/video.png')}}">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="video-holder">
                              <img style="width: 100px;" src="{{asset('storage/file/video.png')}}">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row classes-even-row front_row classes front_x  classes-row">
               <div class="col-lg-8 service_item classes text-left d-flex flex-column align-items-start justify-content-start">
                  <div class="row">
                     <div class="col-md-3">
                        <img class=rem-res style width="100%" src="{{asset('storage/file/student.png')}}">
                     </div>
                     <div class="col-md-9">
                        <ul class="classes list-unstyled">
                           <li><span class="check"><i class="mdi mdi-check"></i></span>{{__('data.Static.Direct communication via the Internet with teachers who specialize in various subjects for all school levels')}}</li>
                           <li><span class="check"><i class="mdi mdi-check"></i></span>{{__('data.Static.Evaluate and follow up on students performance and provide a detailed report of their grades and activities on the platform')}}</li>
                           <li><span class="check"><i class="mdi mdi-check"></i></span>{{__('data.Static.The possibility of recording and saving the lecture for reference later')}}</li>
                           <li><span class="check"><i class="mdi mdi-check"></i></span>{{__('data.Static.Self-correcting tests')}}</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 service_item classes text-left d-flex flex-column align-items-center justify-content-center">
                  <div class="">
                  </div>
                  <button class="btn btn-primary">{{__('data.Static.Register now as a student')}}</button>
               </div>
            </div>
            <div class="row front_row classes-odd-row classes front_o  classes-row">
               <div class="col-lg-4 service_item classes text-left d-flex flex-column align-items-center justify-content-center">
                  <div class="">
                  </div>
                  <button class="btn btn-primary">{{__('data.Static.Register now as a teacher')}}</button>
               </div>
               <div class="col-lg-8 service_item classes text-left d-flex flex-column align-items-center justify-content-center">
                  <div class="row">
                     <div class="col-md-9">
                        <ul class="classes">
                           <li><span class="check"><i class="mdi mdi-check"></i></span>{{__('data.Static.Virtual electronic classrooms with all the tools that enable you to provide an excellent educational experience for your students anytime and anywhere')}}</li>
                           <li><span class="check"><i class="mdi mdi-check"></i></span>{{__('data.Static.Create a study group and invite your students to study interactively')}}</li>
                           <li><span class="check"><i class="mdi mdi-check"></i></span>{{__('data.Static.An administrative system that enables you to safely organize your lessons and financial dealings')}}</li>
                           <li><span class="check"><i class="mdi mdi-check"></i></span>{{__('data.Static.Close follow-up of all your students and provide a detailed report of their grades and activity on the platform')}}</li>
                        </ul>
                     </div>
                     <div class="col-md-3">
                        <img class=rem-res style width="100%" src="{{asset('storage/file/man.png')}}">
                     </div>
                  </div>
               </div>
            </div>
            <div class="row front_row classes-even-row classes front_x  classes-row">
               <div class="col-lg-8 service_item classes text-left d-flex flex-column align-items-center justify-content-center">
                  <div class="row">
                     <div class="col-md-3">
                        <img class=rem-res style width="100%" src="{{asset('storage/file/parent.png')}}">
                     </div>
                     <div class="col-md-9">
                        <ul class="classes">
                           <li><span class="check"><i class="mdi mdi-check"></i></span>{{__('data.Static.Receive a monthly report on the student’s academic level and recommendations for strengthening weak points')}}</li>
                           <li><span class="check"><i class="mdi mdi-check"></i></span>{{__('data.Static.Ensure accuracy and honesty in financial dealings and various payment methods')}}</li>
                           <li><span class="check"><i class="mdi mdi-check"></i></span>{{__('data.Static.A distinguished group of teachers who are scientifically qualified and trained to deal properly with students')}}</li>
                           <li><span class="check"><i class="mdi mdi-check"></i></span>{{__('data.Static.Self-correcting tests')}}</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 service_item classes text-left d-flex flex-column align-items-center justify-content-center">
                  <div class="">
                  </div>
                  <button class="btn btn-primary">{{__('data.Static.Register now as a student')}}</button>
               </div>
            </div>
         </div>
      </div>
</div>
</div>
</div>
</main>
</div>
@endsection
