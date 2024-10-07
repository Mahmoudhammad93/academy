@extends('admin.payments.index')
  
@section('content')

<div class="col-md-12 grid-margin stretch-card mt-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">{{__('data.Add New Page')}}</h4>
        <form class="forms-sample" action="{{ route('pages.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @include('admin.pages.form')

        </form>
      </div>
    </div>
  </div>
   
@endsection