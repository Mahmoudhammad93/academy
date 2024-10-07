@extends('layouts.cp_admin.shared.layout')
@section('style')
<!-- plugin css for this page -->
<link rel="stylesheet" href="{{asset('vendors/select2/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
<style>
    .select2-container{
        width: 100% !important;
    }
</style>
@endsection
@section('content')
    <course_role module_name="{{$module_name}}" id="{{$id}}" locale_lang="{{app()->getLocale()}}"></course_role>
@endsection

@push('scripts')
<script src="{{asset('vendors/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('vendors/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="{{asset('js/form-validation.js')}}"></script>
<script src="{{asset('js/bt-maxLength.js')}}"></script>
<script src="{{asset('vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
<script src="{{asset('vendors/select2/select2.min.js')}}"></script>
<script src="{{asset('js/typeahead.js')}}"></script>
<script src="{{asset('js/select2.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
      var table = $('.data-table').DataTable({
        "language": {"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/{{(app()->getLocale() == 'ar')?'Arabic':'English'}}.json"},
          processing: false,
          serverSide: true,
          ajax: "{{ route('courseRole',$id) }}",
          columns: [
              {data: 'DT_RowIndex'},
              {data: 'user_name', name: 'name'},
              {data: 'role', name: 'role'},
              {data: 'status', name: 'status'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
    })
  </script>
@endpush()

