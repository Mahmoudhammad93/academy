@extends('admin.terms.index')
  
@section('content')

<div class="col-md-12 grid-margin stretch-card mt-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">@lang('data.Add Term')</h4>
        <form class="forms-sample" action="{{ route('terms.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @include('admin.terms.form')

        </form>
      </div>
    </div>
  </div>
   
@endsection