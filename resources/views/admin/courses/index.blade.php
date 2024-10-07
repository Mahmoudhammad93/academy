@extends('layouts.cp_admin.shared.layout')
@section('content')
<courses module_name="{{$module_name}}" locale_lang="{{app()->getLocale()}}"></courses>
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function(){
      var table = $('.data-table').DataTable({
        "language": {"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/{{(app()->getLocale() == 'ar')?'Arabic':'English'}}.json"},
          processing: true,
          serverSide: true,
          ajax: "{{ route('courses.index') }}",
          columns: [
              {data: 'DT_RowIndex'},
              {data: 'name_en', name: 'name_en'},
              {data: 'name_ar', name: 'name_ar'},
              {data: 'timetable', name: 'timetable', orderable: false, searchable: false},
              {data: 'courseRole', name: 'courseRole', orderable: false, searchable: false},
              {data: 'curriculum', name: 'curriculum', orderable: false, searchable: false},
              {data: 'banks', name: 'banks', orderable: false, searchable: false},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
    })
  </script>
@endpush()

