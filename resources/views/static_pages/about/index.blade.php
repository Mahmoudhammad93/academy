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
   <main class="about">
      <div class="about">
         <div class="front-odd-row front-row container">
            <h1>{{__('data.Static.About Us')}}</h1>
            <p style="text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
               Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
               Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
               Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
               Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
         </div>
         <div class="front-even-row front-row container">
            <div class="row">
               <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                  <div class="icon-container">
                     <i class="mdi mdi-eye" aria-hidden="true"></i>
                  </div>
                  <h3>{{__('data.Static.Our Vision')}}</h3>
                  <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
               </div>
               <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                  <div class="icon-container">
                     <i class="mdi mdi-book" aria-hidden="true"></i>
                  </div>
                  <h3>{{__('data.Static.Our Values')}}</h3>
                  <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
               </div>
               <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                  <div class="icon-container">
                     <i class="mdi mdi-bullseye" aria-hidden="true"></i>
                  </div>
                  <h3>{{__('data.Static.Our Mission')}}</h3>
                  <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
               </div>
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
