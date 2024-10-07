
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
{{-- <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet"> --}}
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}">
<link rel="stylesheet" href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}"/>
<link rel="stylesheet" href="{{asset('vendors/simple-line-icons/css/simple-line-icons.css')}}">
<link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
<!-- endinject -->
<!-- plugin css for this page -->
<!-- End plugin css for this page -->
@yield('style')
<!-- inject:css -->

<!-- endinject -->
<link rel="shortcut icon" href="{{asset('storage/file/favicon.png')}}" />
<!-- base:js -->


<script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<script>
    var modeStatus = localStorage.getItem('mode_status');
    if(modeStatus == 'dark'){
        document.write(`<link rel="stylesheet" data="style" href="{{asset('css/dark_mode_style.css')}}">`);
    }else{
        document.write(`<link rel="stylesheet" data="style" href="{{asset('css/style.css')}}">`);
    }
</script>

@if (auth()->user() && auth()->user()->language == 'ar')
    <link rel="stylesheet" href="{{asset('css/rtl_style.css')}}">
@endif

