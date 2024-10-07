@extends('admin.countries.index')
  
@section('content')

<div class="col-md-12 grid-margin stretch-card mt-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">@lang('data.Add Country')</h4>
        <form class="forms-sample" action="{{ route('countries.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @include('admin.countries.form')

        </form>
      </div>
    </div>
  </div>
   
@endsection