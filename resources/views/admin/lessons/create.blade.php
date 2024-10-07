@extends('admin.groups.index')

@section('style')
<link rel="stylesheet" href="{{asset('vendors/dropify/dropify.min.css')}}">
@endsection

@section('content')
<create_lesson module_name="{{$module_name}}" curriculum_id="{{$curriculum_id}}" unit_id="{{$unit_id}}" ></create_lesson>
@endsection

@push('scripts')
<script src="{{asset('vendors/dropify/dropify.min.js')}}"></script>
<script src="{{asset('js/dropify.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
      var table = $('.data-table').DataTable({
        "language": {"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/{{(app()->getLocale() == 'ar')?'Arabic':'English'}}.json"},
          processing: true,
          serverSide: true,
          ajax: "{{ route('createLesson',[$unit_id,$curriculum_id]) }}",
          columns: [
              {data: 'DT_RowIndex'},
              {data: 'name', name: 'name'},
              {data: 'description', name: 'description'},
              {data: 'type', name: 'type'},
              {data: 'path', name: 'path'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
    })
  </script>
@endpush
