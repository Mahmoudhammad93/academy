<!-- base:css -->
<link rel="stylesheet" href="{{asset('ws_layout/vendors/base/vendor.bundle.base.css')}}" />
<link rel="stylesheet" href="{{asset('ws_layout/vendors/mdi/css/materialdesignicons.min.css')}}" />
<link rel="stylesheet" href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}"/>
<link rel="stylesheet" href="{{asset('ws_layout/css/style.css')}}" />
@if (app()->getLocale() == 'ar')
    <link rel="stylesheet" href="{{asset('css/rtl_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/rtl_style.css')}}">
    <link rel="stylesheet" href="{{asset('ws_layout/css/rtl_style.css')}}" />
@endif

@stack('styles')


