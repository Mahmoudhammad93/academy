@extends('layouts.app')

@section('content')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{asset('storage/file/banan-logo.png')}}" alt="logo">
              </div>
              <h4>{{ __('Reset Password') }}</h4>
                <form class="pt-3" method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <div class="input-group">
                          <div class="input-group-prepend bg-transparent">
                            <span class="input-group-text bg-transparent border-right-0">
                              <i class="mdi mdi-account-outline text-primary"></i>
                            </span>
                          </div>
                          <input id="email" type="email" class="form-control form-control-lg border-left-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}">
                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                      </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">{{ __('Send Password Reset Link') }}</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
@endsection
