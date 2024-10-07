<nav class="bottom-navbar card-inverse-dark">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo" href="/"><img src="{{asset('storage/file/banan-logo.png')}}" alt="logo" /></a>

  </div>
  <ul class="nav page-navigation">

        <li class="nav-item {{(request()->segment(1) == '')?'active':''}}">
          <a class="nav-link" href="{{url('/')}}">
            <i class="mdi mdi-home menu-icon"></i>
            <span class="menu-title">{{__('data.Home')}}</span>
          </a>
        </li>
        @if (auth()->user() && auth()->user()->account_type == 'student')
          <li class="nav-item">
            <a class="nav-link" href="{{route('digital_library')}}">
                <i class="mdi mdi-city menu-icon"></i>
                <span class="menu-title">@lang('data.Digital Library')</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('quizzes')}}">
                <i class="mdi mdi-comment-question-outline menu-icon"></i>
                <span class="menu-title">@lang('data.Quizzes')</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('courses')}}">
                <i class="mdi mdi-book menu-icon"></i>
                <span class="menu-title">@lang('data.Courses')</span>
            </a>
          </li>
        @endif
            <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">
                <i class="mdi mdi-information menu-icon"></i>
                <span class="menu-title">@lang('data.About')</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{url('education')}}">
                <i class="mdi mdi-book menu-icon"></i>
                <span class="menu-title">@lang('data.Education')</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{url('training')}}">
                <i class="mdi mdi mdi-certificate menu-icon"></i>
                <span class="menu-title">@lang('data.Training')</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('static_classes')}}">
                <i class="mdi mdi-laptop-mac menu-icon"></i>
                <span class="menu-title">@lang('data.Banan Classes')</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">
                <i class="mdi mdi-email menu-icon"></i>
                <span class="menu-title">@lang('data.Contact')</span>
            </a>
            </li>
            <li class="nav-item search">
                <i class="fa fa-search"></i>
            </li>

    @if(auth()->user())
    <li class="nav-item nav-profile dropdown toggle">
      <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
        <img src="{{asset('storage/file/user.png')}}" alt="profile" />
        <span class="nav-profile-name">{{auth()->user()->name}}</span>
        <span class="online-status"></span>
      </a>
      <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
        <a class="dropdown-item" href="/public_views/{{auth()->user()->id}}/edit_profile">
          <i class="mdi mdi-account-outline text-primary"></i>
          @lang('data.Profile')
        </a>
        <a href="{{route('settings')}}" class="dropdown-item">
          <i class="mdi mdi-settings text-primary"></i>
          @lang('data.Settings')
        </a>
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
          <i class="mdi mdi-logout text-primary"></i>
          @lang('data.Logout')
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </a>
      </div>
    </li>
    @else
    <ul class="navbar-nav navbar-nav-right register toggle">
      <li>
        <a href="{{route('login')}}">
          <i class="mdi mdi-login"></i>
          {{__('data.Register.Login')}}
        </a>
      </li>
      <li>
        <a href="{{route('register')}}">
          <i class="mdi mdi-account-outline"></i>
          {{__('data.Register.Sign Up')}}
        </a>
      </li>
    </ul>
    @endif
  </ul>

</nav>
