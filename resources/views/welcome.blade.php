@extends('layouts.ws_layout.shared.layout')
@section('search')
<!-- <div class="header-search card card-inverse-info">
   <div class="searching">
      <form action="" id="sea">
         <h2 class="front-describe">{{__('data.Static.Arabian Academy for Professional Training and Education')}}</h2>
         <input class="front-search" type="text" class="form-control" placeholder="What to learn?">
      </form>
   </div>
</div> -->
@endsection
@section('content')
<div class="classes homepage">
   <div class="container">
      <div class="row fornt-row front-odd-row container">
         <div class="col-lg-8 service_item classes text-left d-flex flex-column align-items-center justify-content-center">
            <div class="row">
               <div class="col-md-3">
                  <img src="{{asset('storage/file/banan-logo.png')}}">
               </div>
               <div class="col-md-9">
                  <h3 class="home-title">
                  @lang('data.Static.We simulate the process in different stages in terms of explanation and interaction and evaluation'). @lang('We also provide you with professional digital content that helps you understand your study materials')
                  <h3>
                  <ul class="classes">
                     <li>@lang('data.Static.High-quality educational content with the highest teaching strategies')</li>
                     <li>@lang('data.Static.Virtual classes with modern technologies')</li>
                     <li>@lang('data.Static.Exercises and tests that deepen your understanding and improve your achievement level')</li>
                     <li>@lang('data.Static.Online reservation for the student with the teacher')</li>
                     <li>@lang('data.Static.Add a question bank')</li>
                     <li>@lang('data.Static.Ongoing technical support')</li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-lg-4 service_item classes text-left d-flex flex-column align-items-center justify-content-center">
            <div class="">
            </div>
            <button class="btn btn-primary">@lang('data.Static.Join Banan Academy Now')</button>
         </div>
      </div>
   </div>
</div>
@endsection
