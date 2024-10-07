@extends('layouts.cp_admin.shared.layout')
@section('content')
<users module_name="{{$module_name}}" locale_lang="{{app()->getLocale()}}"></users>
@endsection

@push('scripts')
<script src="{{asset('vendors/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('vendors/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="{{asset('js/form-validation.js')}}"></script>
<script src="{{asset('js/bt-maxLength.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
      var table = $('.data-table').DataTable({
        "language": {"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/{{(app()->getLocale() == 'ar')?'Arabic':'English'}}.json"},
          processing: true,
          serverSide: true,
          ajax: "{{ route('users.index') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'image', name: 'image'},
              {data: 'name', name: 'name'},
              {data: 'email', name: 'email'},
              {data: 'account_type', name: 'Type'},
              {data: 'role', name: 'role', orderable: false, searchable: false},
              {data: 'description', name: 'description', orderable: false, searchable: false},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
    })
  </script>
@endpush()

