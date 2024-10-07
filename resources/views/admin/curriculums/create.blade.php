@extends('layouts.cp_admin.shared.layout')

@section('content')

<div class="col-md-12 grid-margin stretch-card mt-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">@lang('data.Add Curriculum')</h4>
        <form class="forms-sample" action="{{ route('curriculums.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @include('admin.curriculums.form')

        </form>
      </div>
    </div>
  </div>

@endsection
