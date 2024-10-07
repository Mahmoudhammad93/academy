@extends('layouts.cp_admin.shared.layout')

@section('content')

<div class="col-md-12 grid-margin stretch-card mt-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">@lang('data.Edit Bank')</h4>
        <form class="forms-sample" action="{{ route('banks.update', [$course->id, $bank->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('admin.banks.form', $bank)

        </form>
      </div>
    </div>
  </div>

@endsection
