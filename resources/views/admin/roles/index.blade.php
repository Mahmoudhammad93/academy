@extends('layouts.cp_admin.shared.layout')
@section('content')
<roles module_name="{{$module_name}}" locale_lang="{{app()->getLocale()}}"></roles>
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function(){
      var table = $('.data-table').DataTable({
        "language": {"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/{{(app()->getLocale() == 'ar')?'Arabic':'English'}}.json"},
          processing: true,
          serverSide: true,
          ajax: "{{ route('roles.index') }}",
          columns: [
              {data: 'DT_RowIndex'},
              {data: 'name', name: 'name'},
              {data: 'name_ar', name: 'name_ar'},
              {data: 'permissions', name: 'permissions', orderable: false, searchable: false},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
    })
  </script>
@endpush()

