<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('js/off-canvas.js')}}"></script>
<script src="{{asset('js/hoverable-collapse.js')}}"></script>
<script src="{{asset('js/template.js')}}"></script>
<script src="{{asset('js/settings.js')}}"></script>
<script src="{{asset('js/todolist.js')}}"></script>
<script src="{{asset('js/profile-settings.js')}}"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src="{{asset('vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('vendors/progressbar.js/progressbar.min.js')}}"></script>
<script src="{{asset('vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js')}}"></script>
<script src="{{asset('vendors/justgage/raphael-2.1.4.min.js')}}"></script>
<script src="{{asset('vendors/justgage/justgage.js')}}"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="{{asset('js/dashboard.js')}}"></script>
<!-- End custom js for this page-->
<script src="{{asset('vendors/jquery-toast-plugin/jquery.toast.min.js')}}"></script>
<script src="{{asset('js/toastDemo.js')}}"></script>
<script src="{{asset('js/desktop-notification.js')}}"></script>
<script>
    let locale= "<?php echo app()->getLocale(); ?>";
    localStorage["locale"]=locale;
</script>
<!-- Scripts -->
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('vendors/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@stack('scripts')
<script src="{{asset('js/wizard.js')}}"></script>
<script>

    // To set sidebar status
    $(document).on('click','.navbar-toggler',function(){
        if($('body').hasClass('sidebar-icon-only'))
            localStorage.setItem('status', 'close');
        else
            localStorage.setItem('status', 'open');
    })

    // To get sidebar status
    $(document).ready(function(){

        var sidebarStatus = localStorage.getItem('status');
        if(sidebarStatus == 'close')
            $('body').addClass('sidebar-icon-only');
        else
            $('body').removeClass('sidebar-icon-only');

        var modeStatus = localStorage.getItem('mode_status');
        if(modeStatus == 'dark')
            $('.toggle-switch-dark input[type=checkbox]').attr('checked','checked');
    })

    $('.toggle-switch-dark input[type=checkbox]').change(function(e){
        if(e.target.checked == true){
            localStorage.setItem('mode_status', 'dark')
            $('link[data="style"]').attr('href','http://127.0.0.1:8000/css/dark_mode_style.css');
        }else{
            localStorage.setItem('mode_status', 'light')
            $('link[data="style"]').attr('href','http://127.0.0.1:8000/css/style.css');

        }
    })
</script>
