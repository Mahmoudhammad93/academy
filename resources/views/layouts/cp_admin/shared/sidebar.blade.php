<!-- partial:partials/_settings-panel.html -->
<div class="theme-setting-wrapper">
    <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
    <div id="theme-settings" class="settings-panel">
      <i class="settings-close mdi mdi-close"></i>
      <p class="settings-heading">SIDEBAR SKINS</p>
      <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
      <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
      <p class="settings-heading mt-2">HEADER SKINS</p>
      <div class="color-tiles mx-0 px-4">
        <div class="tiles success"></div>
        <div class="tiles warning"></div>
        <div class="tiles danger"></div>
        <div class="tiles primary"></div>
        <div class="tiles info"></div>
        <div class="tiles dark"></div>
        <div class="tiles default"></div>
      </div>
      <div class="side-set-footer">
        <div class="col flex-row-reverse justify-content-between d-flex">
          <p class="m-0 mr-2">Dark Mode</p>
          <label class="toggle-switch toggle-switch-dark">
            <input type="checkbox">
            <span class="toggle-slider round"></span>
          </label>
        </div>
      </div>
    </div>
  </div>
  <!-- partial -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="nav-item nav-profile dropdown">
        <a class="dropdown-toggle" href="#">
          <div class="d-flex">
              <img src="{{ asset('storage/file/'.auth()->user()->image) }}" alt="profile">
              <div>
                <span class="sidebar-profile-name font-weight-bold">{{auth()->user()->name}}</span>
                <p class="sidebar-profile-designation text-muted text-small">{{auth()->user()->account_type}}</p>
              </div>
          </div>
        </a>
      </div>
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{route('dashboard')}}">
        <i class="mdi mdi-view-dashboard menu-icon"></i>
        <span class="menu-title">{{__('data.Dashboard')}}</span>
      </a>
    </li>

    @if (auth()->user()->account_type =='super_admin')

    <li class="nav-item">
      <a class="nav-link" href="{{route('users.index')}}">
        <i class="mdi mdi-account-multiple-outline menu-icon"></i>
        <span class="menu-title">{{__('data.Users')}}</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('education_types.index')}}">
        <i class="mdi mdi-book menu-icon"></i>
        <span class="menu-title">{{__('data.Education Types')}}</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('roles.index')}}">
        <i class="mdi mdi-account-settings menu-icon"></i>
        <span class="menu-title">{{__('data.Roles')}}</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('subjects.index')}}">
        <i class="mdi mdi-book-multiple menu-icon"></i>
        <span class="menu-title">@lang('data.Subjects')</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('courses.index')}}">
        <i class="mdi mdi-book-multiple menu-icon"></i>
        <span class="menu-title">@lang('data.Courses')</span>
      </a>
    </li>
    {{-- <li class="nav-item">
      <a class="nav-link" href="{{route('grades.index')}}">
        <i class="mdi mdi-school menu-icon"></i>
        <span class="menu-title">@lang('data.Grades')</span>
      </a>
    </li> --}}
    <li class="nav-item">
      <a class="nav-link" href="{{route('schools.index')}}">
        <i class="mdi mdi-hospital-building menu-icon"></i>
        <span class="menu-title">@lang('data.Schools')</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('countries.index')}}">
        <i class="mdi mdi-flag-checkered menu-icon"></i>
        <span class="menu-title">@lang('data.Countries')</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('payments.index')}}">
        <i class="mdi mdi-credit-card-multiple menu-icon"></i>
        <span class="menu-title">@lang('data.Payments')</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('inactive')}}">
        <i class="mdi mdi-account-off menu-icon"></i>
        <span class="menu-title">@lang('data.inactive_users')</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('pages.index')}}">
        <i class="mdi mdi-account-off menu-icon"></i>
        <span class="menu-title">@lang('data.Pages')</span>
      </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('timetable')}}">
          <i class="mdi mdi-timetable menu-icon"></i>
          <span class="menu-title">@lang('data.Timetable')</span>
        </a>
      </li>
    @endif

    @if (auth()->user()->account_type =='teacher')
    <!-- <li class="nav-item">
      <a class="nav-link" href="{{route('myGroups')}}">
        <i class="mdi mdi-city menu-icon"></i>
        <span class="menu-title">@lang('data.My Groups')</span>
      </a>
    </li> -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('assignment_grade')}}">
        <i class="mdi mdi-file-check menu-icon"></i>
        <span class="menu-title">@lang('data.Assignment Grade')</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('quiz_grade')}}">
        <i class="mdi mdi-checkbox-multiple-marked-outline menu-icon"></i>
        <span class="menu-title">@lang('data.Quiz Grade')</span>
      </a>
    </li>
    @endif

    @if (auth()->user()->account_type =='student')
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

    <!-- <li class="nav-item">
      <a class="nav-link" href="{{route('myGroups')}}">
        <i class="mdi mdi-city menu-icon"></i>
        <span class="menu-title">@lang('data.My Groups')</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('viewGroup')}}">
        <i class="mdi mdi-city menu-icon"></i>
        <span class="menu-title">@lang('data.View Group')</span>
      </a>
    </li> -->
  </ul>
</nav>
