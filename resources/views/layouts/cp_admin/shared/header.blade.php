    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="/"><img src="{{asset('storage/file/banan-logo.png')}}" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="/"><img src="{{asset('storage/file/banan-logo.png')}}" alt="logo"/></a>

        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav mr-lg-2">
              <li class="nav-item dropdown">
                  <a href="#" class="nav-link count-indicator "><i class="mdi mdi mdi-message-reply-text"></i></a>
                </li>
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell mx-0"></i>
                  <span class="count bg-success">2</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <p class="mb-0 font-weight-normal float-left dropdown-header">@lang('data.Notifications')</p>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <div class="preview-icon bg-success">
                          <i class="mdi mdi-information mx-0"></i>
                        </div>
                    </div>
                    <div class="preview-item-content">
                        <h6 class="preview-subject font-weight-normal">Application Error</h6>
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
                        <h6 class="preview-subject font-weight-normal">@lang('data.Settings')</h6>
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
                        <h6 class="preview-subject font-weight-normal">New user registration</h6>
                        <p class="font-weight-light small-text mb-0 text-muted">
                          2 days ago
                        </p>
                    </div>
                  </a>
                </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-email mx-0"></i>
                <span class="count bg-primary">4</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                      <img src="{{asset('storage/file/default.png')}}" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                      <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                      </h6>
                      <p class="font-weight-light small-text text-muted mb-0">
                        The meeting is cancelled
                      </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                      <img src="{{asset('storage/file/default.png')}}" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                      <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                      </h6>
                      <p class="font-weight-light small-text text-muted mb-0">
                        New product launch
                      </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                      <img src="{{asset('storage/file/default.png')}}" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                      <h6 class="preview-subject ellipsis font-weight-normal"> {{auth()->user()->name}}
                      </h6>
                      <p class="font-weight-light small-text text-muted mb-0">
                        Upcoming board meeting
                      </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item nav-search d-none d-lg-block">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="search">
                    <i class="mdi mdi-magnify"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="@lang('data.Search')" aria-label="search" aria-describedby="search">
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-lg-flex d-none">
              <div class="dropdown">
                    <button class="btn btn-outline-info dropdown-toggle" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-earth"></i>
                        {{__('data.Language')}}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 30px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                    <a class="dropdown-item" href="{{ route('lang','en') }}" >{{__('data.Languages.EN')}}</a>
                    <a class="dropdown-item" href="{{ route('lang','ar') }}" >{{__('data.Languages.AR')}}</a>
                    </div>
                </div>
            </li>
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown-navbar">
                <span class="nav-profile-name">{{auth()->user()->name}}</span>
                <span class="online-status"></span>
                <img src="{{ asset('storage/file/'.auth()->user()->image) }}" alt="profile">
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown-navbar">
                <a class="dropdown-item" href="/dashboard">
                    <i class="mdi mdi-view-dashboard text-primary"></i>
                    @lang('data.Dashboard')
                  </a>
                  <a class="dropdown-item" href="/public_views/{{ auth()->user()->id }}/edit_profile">
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
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
