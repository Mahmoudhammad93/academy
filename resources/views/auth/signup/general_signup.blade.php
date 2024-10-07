@extends('layouts.app')

@section('content')
<div class="signup">
  <div class="general-signup">
  <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
                <div class="row flex-grow">
                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                        <div class="auth-form-transparent text-left p-3">
                            <div class="brand-logo">
                                <img src="{{ asset('storage/file/banan-logo.png') }}" alt="logo">
                            </div>
                            
                            <div class="col-12 grid-margin p-0">

    <div class="general">
    <div class="sign-up mt-4">
        <div class="card">
            <div class="card-body">
                <h2 class="banan-join mb-4">@lang('data.Join Banan Academy')</h2>
                <a class="btn btn-block btn-primary" href="{{route('teacher_signup')}}">@lang('data.Register as Teacher')</a>
                <a class="btn btn-block btn-success" href="{{route('student_signup')}}">@lang('data.Register as Student')</a>
                <a class="btn btn-block btn-secondary" href="{{route('parent_signup')}}">@lang('data.Register as Parent')</a>
            </div>
        </div>
    </div>
    </div>
    <div class="text-center mt-4 font-weight-light">
                                     @lang('data.Already have an account?')<a href="{{ route('login') }}" class="text-primary">@lang('data.Login')</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 register-half-bg d-flex flex-row">
                        <p class="text-white font-weight-medium text-center flex-grow align-self-end">@lang('data.Copyright') &copy; 2018
                        @lang('data.All rights reserved').</p>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
  </div>
</div>

@endsection