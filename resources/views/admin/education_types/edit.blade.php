@extends('layouts.cp_admin.shared.layout')

@section('content')

<div class="col-md-12 grid-margin stretch-card mt-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">@lang('data.Add EducationType')</h4>
        <form class="forms-sample" action="{{ route('education_types.update',[$education_type->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('admin.education_types.form', [$countries, $education_type])
        </form>
      </div>
    </div>
  </div>

@endsection
