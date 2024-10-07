@extends('layouts.app')

@section('content')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
                <div class="row flex-grow">
                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                        <div class="auth-form-transparent text-left p-3">
                            <div class="brand-logo">
                                <img src="{{ asset('storage/file/banan-logo.png') }}" alt="logo">
                            </div>
                            <h4>New here?</h4>
                            <h6 class="font-weight-light">Join us today! It takes only few steps</h6>
                            <div class="col-12 grid-margin p-0">

                                <form id="example-form" class="pt-3" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div>
                                        <h3>Account</h3>
                                        <section>
                                            <div class="form-group">
                                                <label>{{ __('Name') }}</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend bg-transparent">
                                                        <span class="input-group-text bg-transparent border-right-0">
                                                            <i class="mdi mdi-account-outline text-primary"></i>
                                                        </span>
                                                    </div>
                                                    <input id="name" type="text"
                                                        class="form-control form-control-lg border-left-0 @error('name') is-invalid @enderror"
                                                        name="name" value="{{ old('name') }}" required autocomplete="name"
                                                        placeholder="Name" autofocus>
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>{{ __('Password') }}</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend bg-transparent">
                                                        <span class="input-group-text bg-transparent border-right-0">
                                                            <i class="mdi mdi-lock-outline text-primary"></i>
                                                        </span>
                                                    </div>
                                                    <input id="password" type="password"
                                                        class="form-control form-control-lg border-left-0 @error('password') is-invalid @enderror"
                                                        name="password" required autocomplete="new-password"
                                                        placeholder="Password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>{{ __('Confirm Password') }}</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend bg-transparent">
                                                        <span class="input-group-text bg-transparent border-right-0">
                                                            <i class="mdi mdi-lock-outline text-primary"></i>
                                                        </span>
                                                    </div>
                                                    <input id="password-confirm" type="password"
                                                        class="form-control form-control-lg border-left-0"
                                                        name="password_confirmation" required autocomplete="new-password"
                                                        placeholder="Confirm Password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Gender</label>
                                                <select class="form-control form-control-lg" id="exampleFormControlSelect1"
                                                    name="gender">
                                                    <option disabled selected>-- Select Gender --</option>
                                                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>
                                                        Male</option>
                                                    <option value="female"
                                                        {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                                </select>
                                            </div>
                                            {{-- <div class="mb-4">
                                                <div class="form-check">
                                                <label class="form-check-label text-muted">
                                                    <input type="checkbox" class="form-check-input">
                                                    I agree to all Terms & Conditions
                                                </label>
                                                </div>
                                            </div> --}}

                                        </section>
                                        <h3>Finish</h3>
                                        <section>
                                            <ul class="nav nav-tabs list-unstyled" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="student-tab" data-toggle="tab"
                                                        href="#student" role="tab" aria-controls="student"
                                                        aria-selected="true">Student</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="teacher-tab" data-toggle="tab" href="#teacher"
                                                        role="tab" aria-controls="teacher" aria-selected="false">Teacher</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="parent-tab" data-toggle="tab" href="#parent"
                                                        role="tab" aria-controls="parent" aria-selected="false">Parent</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="student" role="tabpanel"
                                                    aria-labelledby="student-tab">
                                                    <input type="hidden" name="account_type" value="student">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="education_type">Education Type</label>
                                                                <select class="form-control form-control-lg education_type"
                                                                    id="education_type" name="grades">
                                                                    <option value="0" selected disabled>Select Education
                                                                        Type</option>
                                                                </select>
                                                                @error('grades')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="level">Level</label>
                                                                <select class="form-control form-control-lg levels"
                                                                    id="levels" name="levels[]">
                                                                    <option value="0" selected disabled>
                                                                        Select Level
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlSelect1">Country</label>
                                                                <select class="form-control form-control-lg countries"
                                                                    id="countries" name="country">
                                                                    <option disabled selected>-- Select Country --</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="school_name">School Name</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend bg-transparent">
                                                                        <span
                                                                            class="input-group-text bg-transparent border-right-0">
                                                                            <i
                                                                                class="mdi mdi-hospital-building text-primary"></i>
                                                                        </span>
                                                                    </div>
                                                                    <input id="school_name" type="text"
                                                                        class="form-control form-control-lg border-left-0 school_name @error('school_name') is-invalid @enderror"
                                                                        name="school_name"
                                                                        value="{{ old('school_name') }}" required
                                                                        autocomplete="school_name"
                                                                        placeholder="School Name">
                                                                    @error('school_name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="result">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="phone">Phone</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend bg-transparent">
                                                                        <span
                                                                            class="input-group-text bg-transparent border-right-0">
                                                                            <i
                                                                                class="mdi mdi-cellphone-android text-primary"></i>
                                                                        </span>
                                                                    </div>
                                                                    <input id="phone" type="text"
                                                                        class="form-control form-control-lg border-left-0 @error('phone') is-invalid @enderror"
                                                                        data-inputmask-alias="(+99) 9999-9999"
                                                                        im-insert="true" name="phone"
                                                                        value="{{ old('phone') }}" required
                                                                        autocomplete="phone" placeholder="Phone">
                                                                    @error('phone')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="city">City</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend bg-transparent">
                                                                        <span
                                                                            class="input-group-text bg-transparent border-right-0">
                                                                            <i class="mdi mdi-city text-primary"></i>
                                                                        </span>
                                                                    </div>
                                                                    <input id="city" type="text"
                                                                        class="form-control form-control-lg border-left-0 @error('city') is-invalid @enderror"
                                                                        name="city" value="{{ old('city') }}" required
                                                                        autocomplete="city" placeholder="City">
                                                                    @error('city')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>{{ __('E-Mail Address') }}</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend bg-transparent">
                                                                        <span
                                                                            class="input-group-text bg-transparent border-right-0">
                                                                            <i
                                                                                class="mdi mdi-email-outline text-primary"></i>
                                                                        </span>
                                                                    </div>
                                                                    <input id="email" type="email"
                                                                        class="form-control form-control-lg border-left-0 @error('email') is-invalid @enderror"
                                                                        name="email" value="{{ old('email') }}" required
                                                                        autocomplete="email" placeholder="Email">
                                                                    @error('email')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="teacher" role="tabpanel"
                                                    aria-labelledby="teacher-tab">

                                                </div>
                                                <div class="tab-pane fade" id="parent" role="tabpanel"
                                                    aria-labelledby="parent-tab">

                                                </div>
                                            </div>
                                        </section>
                                    </div>
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

@endsection

@push('scripts')

    <script src="{{ asset('vendors/jquery-steps/jquery.register.steps.js') }}"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                type: 'GET',
                url: '/get_reg_data',
                success: function(data) {
                    console.log(data)
                    // To get education types or grades
                    var html_G = '';
                    data.grades.forEach((item) => {
                        html_G += `<option value="${item.id}">${item.name_en}</option>`;
                    })
                    $('.education_type').append(html_G);

                    // To get levels
                    var html_L = '';
                    data.levels.forEach((res) => {
                        html_L += `<option value="${res.id}">${res.name_en}</option>`;
                    })
                    $('.levels').append(html_L)

                    // To get and set countries
                    var html_C = '';
                    data.countries.forEach((val) => {
                        html_C += `<option value="${val.name_en}">${val.name_en}</option>`;
                    })
                    $('.countries').append(html_C);
                }
            });

            // To search for schools
            $('.school_name').keyup(function() {
                var value = $(this).val();
                console.log(value)
                if (value != '')
                    $.ajax({
                        type: 'GET',
                        url: '/get_student_schools',
                        data: {
                            'value': value
                        },
                        success: function(data) {
                            var html_S = '';
                            data.forEach((res) => {
                                html_S += `
                                <ul class="list-unstyled">
                                    <li>
                                        <p>
                                            ${res.name_en} - ${res.name_ar}
                                        </p>
                                    </li>
                                </ul>
                                `;
                            })
                            $('.result').html('').append(html_S).css('display', 'block');
                        }
                    });
                else
                    $('.result').css('display', 'none');
            })

            $(document).on('click', '.result p', function() {
                value = $(this).text();
                console.log(value)
                $('.school_name').val(value.trim())
                $('.result').html('').css('display', 'none');
            })
            $('#teacher, #parent').html('')
        })

        // To get and set form register
        $(document).on('click', '.nav-tabs li a', function() {
            // btn for tab
            var tabId = $(this).attr('id');
            // tab div
            var tab = $('.tab-pane');
            // empty html in all tabs
            tab.html('');

            var html_form
            // get form for active tab
            if (tabId == 'student-tab') {
                html_form = `
                <div class="row">
                    <input type="hidden" name="account_type" value="student">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="education_type">Education Type</label>
                            <select id="education_type" name="grades" class="form-control form-control-lg education_type">
                                <option value="0" selected="selected" disabled="disabled">Select Education Type</option>
                            </select>
                            @error('grades')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="level">Level</label>
                            <select id="levels" class="form-control form-control-lg levels">
                                <option value="0" selected="selected" disabled="disabled">Select Level</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Country</label>
                            <select id="countries" name="country" class="form-control form-control-lg countries">
                                <option disabled="disabled" selected="selected">-- Select Country --</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="school_name">School Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend bg-transparent">
                                    <span class="input-group-text bg-transparent border-right-0">
                                        <i class="mdi mdi-hospital-building text-primary"></i>
                                    </span>
                                </div>
                                <input id="school_name" type="text" name="school_name" value="" required="required" autocomplete="school_name" placeholder="School Name" class="form-control form-control-lg border-left-0 school_name">
                            </div>
                            <div id="result">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <div class="input-group">
                                <div class="input-group-prepend bg-transparent">
                                    <span class="input-group-text bg-transparent border-right-0">
                                        <i class="mdi mdi-cellphone-android text-primary"></i>
                                    </span>
                                </div>
                                <input id="phone" type="text" data-inputmask-alias="(+99) 9999-9999" im-insert="true" name="phone" value="" required="required" autocomplete="phone" placeholder="Phone" class="form-control form-control-lg border-left-0 ">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="city">City</label>
                            <div class="input-group">
                                <div class="input-group-prepend bg-transparent">
                                    <span class="input-group-text bg-transparent border-right-0">
                                        <i class="mdi mdi-city text-primary"></i>
                                    </span>
                                </div>
                                <input id="city" type="text" name="city" value="" required="required" autocomplete="city" placeholder="City" class="form-control form-control-lg border-left-0 ">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>E-Mail Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend bg-transparent">
                                    <span class="input-group-text bg-transparent border-right-0">
                                        <i class="mdi mdi-email-outline text-primary"></i>
                                    </span>
                                </div>
                                <input id="email" type="email" name="email" value="" required="required" autocomplete="email" placeholder="Email" class="form-control form-control-lg border-left-0 ">
                            </div>
                        </div>
                    </div>
                </div>
              `;
                $('#student').append(html_form)
            } else if (tabId == 'teacher-tab') {
                html_form = `
              <div class="row">
                <input type="hidden" name="account_type" value="teacher">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">School Type</label>
                                                <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                                                  <option value="Public" disabled selected> Select Eduction Type </option>
                                                  <option value="Public">Public</option>
                                                  <option value="Private">Private</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="education_type">Education Type</label>
                                                <select class="form-control form-control-lg education_type" id="education_type" name="grades[]" multiple>
                                                  <option selected disabled> Select Education Type </option>
                                                  @if (isset($grades))
                                                      @foreach ($grades as $grade)
                                                          <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                                      @endforeach
                                                  @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="levels">Level</label>
                                                <select class="form-control form-control-lg levels" id="levels" name="levels[]" multiple>
                                                  <option selected disabled> Select Level</option>
                                                  @if (isset($levels))
                                                      @foreach ($levels as $level)
                                                          <option value="{{ $level->id }}">{{ $level->name }}</option>
                                                      @endforeach
                                                  @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="school_name">School Name</label>
                                              <div class="input-group">
                                                <div class="input-group-prepend bg-transparent">
                                                  <span class="input-group-text bg-transparent border-right-0">
                                                    <i class="mdi mdi-hospital-building text-primary"></i>
                                                  </span>
                                                </div>
                                                <input id="school_name" type="text" class="form-control form-control-lg border-left-0 school_name @error('school_name') is-invalid @enderror" name="school_name" value="{{ old('school_name') }}" required autocomplete="school_name" placeholder="School Name">
                                                @error('school_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                              </div>
                                              <div class="result">

                                              </div>
                                          </div>
                                      </div>

                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <div class="input-group">
                                              <div class="input-group-prepend bg-transparent">
                                                <span class="input-group-text bg-transparent border-right-0">
                                                  <i class="mdi mdi-cellphone-android text-primary"></i>
                                                </span>
                                              </div>
                                              <input id="phone" type="text" class="form-control form-control-lg border-left-0 @error('phone') is-invalid @enderror" data-inputmask-alias="(+99) 9999-9999" im-insert="true" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Phone">
                                              @error('phone')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                            </div>
                                        </div>
                                    </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="city">City</label>
                                              <div class="input-group">
                                                <div class="input-group-prepend bg-transparent">
                                                  <span class="input-group-text bg-transparent border-right-0">
                                                    <i class="mdi mdi-city text-primary"></i>
                                                  </span>
                                                </div>
                                                <input id="city" type="text" class="form-control form-control-lg border-left-0 @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" placeholder="City">
                                                @error('city')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label>{{ __('E-Mail Address') }}</label>
                                              <div class="input-group">
                                                <div class="input-group-prepend bg-transparent">
                                                  <span class="input-group-text bg-transparent border-right-0">
                                                    <i class="mdi mdi-email-outline text-primary"></i>
                                                  </span>
                                                </div>
                                                <input id="email" type="email" class="form-control form-control-lg border-left-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label>About Me</label>
                                              <div class="input-group">
                                                <textarea class="form-control" name="about"  rows="10">
                                                  {{ old('about') }}
                                                </textarea>
                                                @error('about')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                              </div>
                                          </div>
                                      </div>

                                    </div>
              `;
                $('#teacher').append(html_form)
            } else {
                html_form = `
                <div class="row">
                    <input type="hidden" name="account_type" value="parent">
                    <div class="col-md-12"><div class="form-group">
                        <label for="exampleFormControlSelect1">School Type</label>
                        <select id="exampleFormControlSelect1" class="form-control form-control-lg">
                            <option value="Public" disabled="disabled" selected="selected"> Select Eduction Type </option>
                            <option value="Public">Public</option>
                            <option value="Private">Private</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="school_name">School Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <span class="input-group-text bg-transparent border-right-0">
                                    <i class="mdi mdi-hospital-building text-primary"></i>
                                </span>
                            </div>
                            <input type="text" name="school_name" value="" required="required" autocomplete="school_name" placeholder="School Name" class="form-control form-control-lg border-left-0 school_name">
                        </div>
                        <div class="result">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <span class="input-group-text bg-transparent border-right-0">
                                    <i class="mdi mdi-cellphone-android text-primary"></i>
                                </span>
                            </div>
                            <input type="text" data-inputmask-alias="(+99) 9999-9999" im-insert="true" name="phone" value="" required="required" autocomplete="phone" placeholder="Phone" class="form-control form-control-lg border-left-0 phone">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="city">City</label>
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <span class="input-group-text bg-transparent border-right-0">
                                    <i class="mdi mdi-city text-primary"></i>
                                </span>
                            </div>
                            <input type="text" name="city" value="" required="required" autocomplete="city" placeholder="City" class="form-control form-control-lg border-left-0 city">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>E-Mail Address</label>
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <span class="input-group-text bg-transparent border-right-0">
                                    <i class="mdi mdi-email-outline text-primary"></i>
                                </span>
                            </div>
                            <input type="email" name="email" value="" required="required" autocomplete="email" placeholder="Email" class="form-control form-control-lg border-left-0 email">
                        </div>
                    </div>
                </div>
            </div>
              `;
                $('#parent').append(html_form)
            }
            $.ajax({
                type: 'GET',
                url: '/get_reg_data',
                success: function(data) {
                    console.log(data)
                    // To get education types or grades
                    var html_G = '';
                    data.grades.forEach((item) => {
                        html_G += `<option value="${item.id}">${item.name_en}</option>`;
                    })
                    $('.education_type').html('');
                    $('.education_type').append(html_G);

                    // To get levels
                    var html_L = '';
                    data.levels.forEach((res) => {
                        html_L += `<option value="${res.id}">${res.name_en}</option>`;
                    })
                    $('.levels').html('')
                    $('.levels').append(html_L)

                    // To get and set countries
                    var html_C = '';
                    data.countries.forEach((val) => {
                        html_C += `<option value="${val.name_en}">${val.name_en}</option>`;
                    })
                    // $('.countries').html('');
                    $('.countries').append(html_C);
                }
            });
        })

    </script>
@endpush
