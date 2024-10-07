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

    <form action="">
    <parent_signup module_name="{{$module_name}}" locale_lang="{{app()->getLocale()}}" storage_path="{{asset('storage/file')}}"></parent_signup>
    </form>
    <div class="text-center mt-4 font-weight-light">
                                    Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 register-half-bg d-flex flex-row">
                        <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018
                            All rights reserved.</p>
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