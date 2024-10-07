<!-- partial:partials/_horizontal-navbar.html -->
<div class="horizontal-menu">
    <nav class="navbar top-navbar col-lg-12 col-12 p-0">
      <div class="container-fluid">
        <div
          class="navbar-menu-wrapper d-flex align-items-center justify-content-between"
        >
        @if(auth()->user())
        <ul class="navbar-nav navbar-nav-left">
            <li class="nav-item ml-0 d-lg-flex d-none">
              <a href="#" class="nav-link horizontal-nav-left-menu"
                ><i class="mdi mdi-format-list-bulleted"></i
              ></a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center"
                id="notificationDropdown"
                href="#"
                data-toggle="dropdown"
              >
                <i class="mdi mdi-bell mx-0"></i>
                <span class="count bg-success">2</span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                aria-labelledby="notificationDropdown"
              >
                <p
                  class="mb-0 font-weight-normal float-left dropdown-header"
                >
                  Notifications
                </p>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-information mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">
                      Application Error
                    </h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Just now
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">
                      Settings
                    </h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Private message
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-account-box mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">
                      New user registration
                    </h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      2 days ago
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                id="messageDropdown"
                href="#"
                data-toggle="dropdown"
              >
                <i class="mdi mdi-email mx-0"></i>
                <span class="count bg-primary">4</span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                aria-labelledby="messageDropdown"
              >
                <p
                  class="mb-0 font-weight-normal float-left dropdown-header"
                >
                  Messages
                </p>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img
                      src="images/faces/face4.jpg"
                      alt="image"
                      class="profile-pic"
                    />
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">
                      David Grey
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      The meeting is cancelled
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img
                      src="images/faces/face2.jpg"
                      alt="image"
                      class="profile-pic"
                    />
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">
                      Tim Cook
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      New product launch
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img
                      src="images/faces/face3.jpg"
                      alt="image"
                      class="profile-pic"
                    />
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">
                        @if(auth()->user()) @if(auth()->user()) {{auth()->user()->name}} @endif @endif
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      Upcoming board meeting
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link count-indicator"
                ><i class="mdi mdi-message-reply-text"></i
              ></a>
            </li>
          </ul>
        @else
        <ul class="social">
            <li>
                <p>
                    <i class="mdi mdi-email"></i>
                    mahmoudhammad423@gmail.com
                </p>
            </li>
            <li>
                <p>
                    <i class="mdi mdi-cellphone-android"></i>
                    +02 (010) 044 604 33
                </p>
            </li>
        </ul>
        @endif

          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-lg-flex">
                <div class="dropdown">
                      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="mdi mdi-earth"></i>
                          {{__('data.Language')}}
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 30px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                      <a class="dropdown-item" href="{{ route('lang','en') }}" >{{__('data.Languages.EN')}}</a>
                      <a class="dropdown-item" href="{{ route('lang','ar') }}" >{{__('data.Languages.AR')}}</a>
                      </div>
                  </div>
              </li>
              @if(auth()->user())
            <li class="nav-item nav-profile dropdown fixed">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-toggle="dropdown"
                id="profileDropdown"
              >
                <span class="nav-profile-name">{{auth()->user()->name}}</span>
                <span class="online-status"></span>
                <img src="{{asset('storage/file/user.png')}}" alt="profile" />
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="profileDropdown"
              >
              @if(auth()->user()->account_type !== "student")
              <a class="dropdown-item" href="/dashboard">
                <i class="mdi mdi-view-dashboard text-primary"></i>
                @lang('data.Dashboard')
              </a>
              @endif
              <a class="dropdown-item" href="/public_views/{{auth()->user()->id}}/edit_profile">
                <i class="mdi mdi-account-outline text-primary"></i>
                @lang('data.Profile')
              </a>
              <a href="{{route('settings')}}" class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                @lang('data.Settings')
              </a>
              <a class="dropdown-item"href="{{ route('logout') }}"
              onclick="event.preventDefault();
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
                <ul class="register fixed">
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
          <button
            class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
            type="button"
            data-toggle="horizontal-menu-toggle"
          >
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </div>
    </nav>
    @include('layouts.ws_layout.shared.navbar')
    
    @yield('slider')
</div>
@yield('sub-header')
<!-- partial -->
