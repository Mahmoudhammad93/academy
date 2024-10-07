<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{(auth()->user()->language == 'ar') ? "rtl" : "" }}">
    @include('layouts.cp_admin.shared.head')
<body>
    <div id="app">
        @include('layouts.cp_admin.shared.header')
        <div class="container-fluid page-body-wrapper">
            @include('layouts.cp_admin.shared.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="content-header mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="title">
                                    {{__('data.'.$module_name)}}
                                </h2>
                            </div>
                            <div class="col-md-6">
                                {{-- <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-custom">
                                        @foreach(Request::segments() as $segment)
                                          <li class="breadcrumb-item {{(substr(request()->url(), strrpos(request()->url(), '/') + 1) == $segment) ? 'active' : ''}}" {{(substr(request()->url(), strrpos(request()->url(), '/') + 1) == $segment)? 'aria-current=page':''}}>
                                            @if(substr(request()->url(), strrpos(request()->url(), '/') + 1) !== $segment)
                                            <a href="/{{$segment}}">@lang('data.'.ucfirst($segment))</a>
                                            @else
                                            <span>@lang('data.'.ucfirst($segment))</span>
                                            @endif
                                          </li>
                                        @endforeach
                                    </ol>
                                  </nav> --}}
                            </div>
                        </div>
                    </div>
                    @yield('content')
                </div>
                @include('layouts.cp_admin.shared.footer')
            </div>
        </div>
    </div>
</body>
@include('layouts.cp_admin.js.index')
</html>
