@extends('layouts.cp_admin.shared.layout')
@section('content')
<div class="course-activities">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{__('data.Add '.$module_name)}}</h4>
            <div class="mt-4">
            <div class="accordion accordion-bordered" id="accordion-2" role="tablist">
                <div class="card">
                <div class="card-header" role="tab" id="heading-4">
                    <h6 class="mb-0">
                        <a data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4" class="collapsed">
                            <a href="" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-plus"></i>
                            </a>
                            Teachers
                        </a>
                    </h6>
                </div>
                <div id="collapse-4" class="collapse" role="tabpanel" aria-labelledby="heading-4" data-parent="#accordion-2" style="">
                    <div class="card-body">
                    <ol class="lessons_list teacher_tab">
                        <li>
                            @if ($teacher)
                            <p>
                                {{$teacher->name}}
                            </p>
                            <form method="POST" action="{{route('deleteActitviesTeacher',$teacher->user_id)}}">
                                @csrf
                                <button class="ajax_delete btn btn-danger" data="{{$teacher->user_id}}">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                            @else
                            <p>
                                @lang('data.No Data Found')
                            </p>
                            @endif
                        </li>
                    </ol>
                    </div>
                </div>
                </div>
                <div class="card">
                <div class="card-header" role="tab" id="heading-5">
                    <h6 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                            <a href="" data-toggle="modal" data-target="#asseaatantModal">
                                <i class="fa fa-plus"></i>
                            </a>
                            Assistants
                        </a>
                    </h6>
                </div>
                <div id="collapse-5" class="collapse" role="tabpanel" aria-labelledby="heading-5" data-parent="#accordion-2">
                    <div class="card-body">
                    <table class="table table-bordered data-table courses-table">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>{{trans('data.Name')}}</th>
                            <th>{{trans('data.Action')}}</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                        </table>
                    </div>
                </div>
                </div>
                <div class="card">
                <div class="card-header" role="tab" id="heading-6">
                    <h6 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                        Exercises
                    </a>
                    </h6>
                </div>
                <div id="collapse-6" class="collapse" role="tabpanel" aria-labelledby="heading-6" data-parent="#accordion-2" style="">
                    <div class="card-body">
                    <p class="mb-0">Put table here. </p>
                    </div>
                </div>
                </div>
                <div class="card">
                <div class="card-header" role="tab" id="heading9">
                    <h6 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapse9" aria-expanded="false" aria-controls="collapse9">
                        Exams
                    </a>
                    </h6>
                </div>
                <div id="collapse9" class="collapse" role="tabpanel" aria-labelledby="heading9" data-parent="#accordion-2" style="">
                    <div class="card-body">
                    <p class="mb-0">Put table here. </p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    {{-- Modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">{{__('data.Add Role')}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
                <course_roles_form :course_id="{{$course_id}}"></course_roles_form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="asseaatantModal" tabindex="-1" role="dialog" aria-labelledby="asseaatantModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">{{__('data.Add Role')}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
                test
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
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
          ajax: "{{ route('courseActivities',$course_id) }}",
          columns: [
              {data: 'DT_RowIndex'},
              {data: 'name', name: 'name'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

      $(".data-table").on('click','.ajax_delete', function(e){
        let bank_id= $(this).attr('data')
        var result = confirm("Want to delete?");
        if (result) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
                });
                let url = "{{route('deleteAssesstant', [$course_id,1])}}";
                url = url.split("/");
                url.pop()
                url.pop()
                url = url.join("/")
                url = url + "/"+bank_id+"/delete"
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
