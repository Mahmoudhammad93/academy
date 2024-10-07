@extends('layouts.cp_admin.shared.layout')
@section('content')
<units module_name="{{$module_name}}" locale_lang="{{app()->getLocale()}}"></units>
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function(){
      var table = $('.data-table').DataTable({
        "language": {"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/{{(app()->getLocale() == 'ar')?'Arabic':'English'}}.json"},
          processing: true,
          serverSide: true,
          ajax: "{{route('units.index', $id)}}",
          columns: [
              {data: 'DT_RowIndex'},
              {data: 'name_en', name: 'name_en'},
              {data: 'name_ar', name: 'name_ar'},
              {data: 'lessons', name: 'lessons', orderable: false, searchable: false},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
      $(".data-table").on('click','.ajax_delete', function(e){
        let unit_id= $(this).attr('data')
        var result = confirm("Want to delete?");
        if (result) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
                });
                let url = "{{route('units.delete', [$id, 1])}}";
                url = url.split("/");
                url.pop()
                url.pop()
                url = url.join("/")
                url = url + "/"+unit_id+"/delete"
                $.ajax({
                    url: url,
                    type: 'POST',
                }).success(function (data) {
                    Swal.fire('Done  (:','','success');
                    table.ajax.reload();
            }).fail(function(data){
                Swal.fire('Not Found ):','','error');
            });
        }
      });
    })
  </script>
@endpush()
