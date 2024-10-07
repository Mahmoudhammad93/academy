<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @if(auth()->user())dir="{{(auth()->user()->language == 'ar') ? 'rtl' : '' }}" @else dir="{{(app()->getLocale() == 'ar') ? 'rtl' : '' }}" @endif>
@include('layouts.cp_admin.shared.head')
<body>
    <div id="app">
        <main class="">
            @yield('content')
        </main>
    </div>
</body>
@include('layouts.cp_admin.js.index')
</html>