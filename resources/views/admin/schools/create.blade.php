@extends('admin.schools.index')

@section('content')

<div class="col-md-12 grid-margin stretch-card mt-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">@lang('data.Add School')</h4>
        <form class="forms-sample" action="{{ route('schools.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @include('admin.schools.form')

        </form>
      </div>
    </div>
  </div>

@endsection
