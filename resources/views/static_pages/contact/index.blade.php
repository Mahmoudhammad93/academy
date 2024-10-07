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
   <main class="">
      <div class="contact">
            <h1>{{__('data.Static.Contact Us')}}</h1>
         <div class="contact-main-container">
         <div class="container-contact100">
            <div class="wrap-contact100">
               <form class="contact100-form validate-form">
                  <span class="contact100-form-title">
                  {{__('data.Static.Send Us A Message')}}
                  </span>
                  <label class="label-input100" for="first-name">{{__('data.Static.Tell us your name')}} *</label>
                  <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
                     <input id="first-name" class="input100" type="text" name="first-name" placeholder="{{__('data.Static.First name')}}">
                     <span class="focus-input100"></span>
                  </div>
                  <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
                     <input class="input100" type="text" name="last-name" placeholder="{{__('data.Static.Last name')}}">
                     <span class="focus-input100"></span>
                  </div>
                  <label class="label-input100" for="email">{{__('data.Static.Enter your email')}} *</label>
                  <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                     <input id="email" class="input100" type="text" name="email" placeholder="example@email.com">
                     <span class="focus-input100"></span>
                  </div>
                  <label class="label-input100" for="phone">{{__('data.Static.Enter phone number')}}</label>
                  <div class="wrap-input100">
                     <input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +1 800 000000">
                     <span class="focus-input100"></span>
                  </div>
                  <label class="label-input100" for="message">{{__('data.Static.Message')}} *</label>
                  <div class="wrap-input100 validate-input" data-validate="Message is required">
                     <textarea id="message" class="input100" name="message" placeholder="{{__('data.Static.Write us a message')}}"></textarea>
                     <span class="focus-input100"></span>
                  </div>
                  <div class="container-contact100-form-btn">
                     <button class="btn btn-success">
                     {{__('data.Static.Send Message')}}
                     </button>
                  </div>
               </form>
               <div class="contact100-more flex-col-c-m" style="background-image: url({{url('storage/file/contact.jpg')}})">
               <div class="contact-info">
               <span class="contact100-form-title">
                  {{__('data.Static.Contact Info')}}
                  </span>
                  <div class="flex-w size1 p-b-47">
                     <div class="txt1 p-r-25">
                        <span class="lnr lnr-map-marker"></span>
                     </div>
                     <div class="flex-col size2">
                        <span class="txt1 p-b-20">
                        {{__('data.Static.Address')}}:
                        </span>
                        <span class="txt2">
                        Mada Center 8th floor, 379 Hudson St, New York, NY 10018 US
                        </span>
                     </div>
                  </div>
                  <div class="dis-flex size1 p-b-47">
                     <div class="txt1 p-r-25">
                        <span class="lnr lnr-phone-handset"></span>
                     </div>
                     <div class="flex-col size2">
                        <span class="txt1 p-b-20">
                        {{__('data.Static.Lets Talk')}}:
                        </span>
                        <span class="txt3">
                        +1 800 1236879
                        </span>
                     </div>
                  </div>
                  <div class="dis-flex size1 p-b-47">
                     <div class="txt1 p-r-25">
                        <span class="lnr lnr-envelope"></span>
                     </div>
                     <div class="flex-col size2">
                        <span class="txt1 p-b-20">
                        {{__('data.Static.General Support')}}:
                        </span>
                        <span class="txt3">
                        contact@example.com
                        </span>
                     </div>
                  </div>
               </div>
            </div>
            </div>
         </div>
         </div>
         <div id="dropDownSelect1"></div>
      </div>
   </main>
</div>
@endsection
