@extends('admin.grades.index')

@section('content')

<div class="col-md-12 grid-margin stretch-card mt-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">@lang('data.Add Grade')</h4>
        <form class="forms-sample" action="{{ route('grades.store', $eduObject->id) }}" method="POST">
            @csrf

            @include('admin.grades.form', [$eduObject])

        </form>
      </div>
    </div>
  </div>

@endsection
