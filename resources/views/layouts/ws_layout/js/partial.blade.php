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
<script src="{{asset('ws_layout/vendors/base/vendor.bundle.base.js')}}"></script>
<script src="{{asset('vendors/jquery-toast-plugin/jquery.toast.min.js')}}"></script>
<script src="{{asset('js/toastDemo.js')}}"></script>
<script src="{{asset('js/desktop-notification.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('vendors/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@stack('scripts')
<script src="{{asset('js/wizard.js')}}"></script>
<!-- Scripts -->
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{asset('ws_layout/js/template.js')}}"></script>
<script src="{{asset('ws_layout/js/scripts.js')}}"></script>
<script src="{{asset('ws_layout/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('ws_layout/vendors/progressbar.js/progressbar.min.js')}}"></script>
<script src="{{asset('ws_layout/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js')}}"></script>
<script src="{{asset('ws_layout/vendors/justgage/raphael-2.1.4.min.js')}}"></script>
<script src="{{asset('ws_layout/vendors/justgage/justgage.js')}}"></script>
<script src="{{asset('ws_layout/js/dashboard.js')}}"></script>
<script src="{{ asset('js/quizzes-script.js') }}"></script>

<script>
    let locale= "<?php echo app()->getLocale(); ?>";
    localStorage["locale"]=locale;
    $(document).ready(function () {
        $(".navbar-toggler").click(function() {
            $(".bottom-navbar").toggleClass("header-toggled show");
        });
    });
</script>
