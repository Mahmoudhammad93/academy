@extends('layouts.cp_admin.shared.layout')

@section('content')
    <div class="col-md-12 grid-margin stretch-card mt-4">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">@lang('data.Edit Grade')</h4>
            <form action="{{ route('levels.update',[$eduObject->id,$grade->id, $level->id]) }}" method="POST" >
                @csrf
                @method('PUT')

                @include('admin.grades.levels.form', [$eduObject])

            </form>
          </div>
        </div>
    </div>

@endsection
