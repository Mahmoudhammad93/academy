@extends('layouts.cp_admin.shared.layout')
@section('content')
<payments module_name="{{$module_name}}"></payments>

@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function(){
      var table = $('.data-table').DataTable({
        "language": {"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/{{(app()->getLocale() == 'ar')?'Arabic':'English'}}.json"},
          processing: true,
          serverSide: true,
          ajax: "{{ route('library.show',$file_type) }}",
          columns: [
              {data: 'DT_RowIndex'},
              {data: 'title', name: 'title'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
    })
  </script>
@endpush()

