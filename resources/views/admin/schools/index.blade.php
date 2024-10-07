@extends('layouts.cp_admin.shared.layout')
@section('content')
<schools module_name="{{$module_name}}" locale_lang="{{app()->getLocale()}}"></schools>
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function(){
      var table = $('.data-table').DataTable({
        "language": {"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/{{(app()->getLocale() == 'ar')?'Arabic':'English'}}.json"},
          processing: true,
          serverSide: true,
          ajax: "{{ route('schools.index') }}",
          columns: [
              {data: 'DT_RowIndex'},
              {data: 'name_en', name: 'name_en'},
              {data: 'name_ar', name: 'name_ar'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
    })
  </script>
@endpush()

