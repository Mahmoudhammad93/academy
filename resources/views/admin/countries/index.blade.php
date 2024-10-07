@extends('layouts.cp_admin.shared.layout')
@section('content')
<div id="users">
    <div class="row">
        <div class="col-md-12 mb-2">
            <a href="{{route('countries.create')}}" class="btn btn-success btn-create">
                <i class="mdi mdi-plus"></i> {{trans('data.Add')}}
            </a>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered data-table">
                          <thead>
                            <tr>
                                <th>#</th>
                                <th>{{trans('data.Title')}}</th>
                                <th>{{trans('data.Description')}}</th>
                                <th>{{trans('data.Action')}}</th>
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
          ajax: "{{ route('countries.index') }}",
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

