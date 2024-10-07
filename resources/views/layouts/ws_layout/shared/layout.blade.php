<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{(app()->getLocale() == 'ar') ? "rtl" : "ltr" }}">
    @include('layouts.ws_layout.shared.head')
<body>
    <div id="app">
        <div class="container-scroller fixed">
            <div class="home_search">
                <span class="close_search">
                    <i class="fa fa-close"></i>
                </span>
                <div class="search-form">
                    <form action="">
                        <div class="form-group">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                            <input type="text" name="search" id="" class="form-control" placeholder="@lang('data.Search') ...">
                        </div>
                    </form>
                </div>
            </div>
            @include('layouts.ws_layout.shared.header')
            <div class="container-fluid page-body-wrapper">
                <div class="main-panel">
                    @yield('search')
                    <div class="content-wrapper">
                        @yield('content')
                    </div>
                    @include('layouts.ws_layout.shared.footer')
                </div>
            </div>
        </div>
    </div>
    @include('layouts.ws_layout.js.partial')
</body>
</html>
