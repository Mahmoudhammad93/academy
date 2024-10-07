@extends('layouts.cp_admin.shared.layout')
@section('content')

<div class="col-md-12 mb-2">
  <a href="{{route('curriculums.create')}}" class="btn btn-success btn-create">
      <i class="mdi mdi-account-plus"></i> @lang('data.Add Curriculum')
  </a>
</div>
<div class="table-responsive">
  <table class="table table-bordered data-table">
    <thead>
      <tr>
        <th>@lang('data.No')</th>
        <th>@lang('data.Name')</th>
        <th>@lang('data.Name in Arabic')</th>
        <th>@lang('data.Course')</th>
        <th>@lang('data.Action')</th>
      </tr>
    </thead>
    <tbody></tbody>
  </table>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function(){
      var table = $('.data-table').DataTable({
        "language": {"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/{{(app()->getLocale() == 'ar')?'Arabic':'English'}}.json"},
          processing: true,
          serverSide: true,
          ajax: "{{ route('courseCurriculums',$id) }}",
          columns: [
              {data: 'DT_RowIndex'},
              {data: 'name_en', name: 'name_en'},
              {data: 'name_ar', name: 'name_ar'},
              {data: 'course_id', name: 'course_id'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
    })
  </script>
@endpush()

