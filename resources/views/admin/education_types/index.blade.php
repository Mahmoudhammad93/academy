@extends('layouts.cp_admin.shared.layout')
@section('content')
<div id="users">
    <div class="row">
        <div class="col-md-12 mb-2">
            <a href="{{route('education_types.create')}}" class="btn btn-success btn-create">
                <i class="mdi mdi-account-plus test"></i> {{_('data.Add')}}
            </a>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered data-table">
                          <thead>
                            <tr>
                              <th>{{_('#')}}</th>
                              <th>{{_('data.Name_en')}}</th>
                              <th>{{_('data.Name_ar')}}</th>
                              <th>{{_('data.Country')}}</th>
                              <th>{{_('data.Grades')}}</th>
                              <th>{{_('data.Action')}}</th>
                            </tr>
                          </thead>
                          <tbody></tbody>
                        </table>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function(){
      var table = $('.data-table').DataTable({
        "language": {"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/{{(app()->getLocale() == 'ar')?'Arabic':'English'}}.json"},
          processing: true,
          serverSide: true,
          ajax: "{{ route('education_types.index') }}",
          columns: [
              {data: 'DT_RowIndex'},
              {data: 'name_en', name: 'name_en'},
              {data: 'name_ar', name: 'name_ar'},
              {data: 'country', name: 'country'},
              {data: 'grades', name: 'grades'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

      $(".data-table").on('click','.ajax_delete', function(e){
        let edu_id= $(this).attr('data')
        var result = confirm("Want to delete?");
        if (result) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
                });
                let url = "{{route('education_types.delete',1)}}";
                url = url.split("/");
                url.pop()
                url.pop()
                url = url.join("/")
                url = url + "/"+edu_id+"/delete"
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

