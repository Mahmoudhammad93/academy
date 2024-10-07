@extends('admin.groups.index')
  
@section('content')

<div class="col-md-12 grid-margin stretch-card mt-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">{{__('data.Add Group')}}</h4>
        <form class="forms-sample" action="{{ route('groups.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @include('admin.groups.form')

        </form>


        
        {{-- @foreach($data['countries'] as $data1)
        <div>{{$data1->name}}</div>
        @endforeach --}}
      </div>
    </div>
  </div>
   
@endsection