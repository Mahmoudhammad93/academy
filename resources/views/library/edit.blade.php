@extends('layouts.cp_admin.shared.layout')
   
@section('content')
    <div class="col-md-12 grid-margin stretch-card mt-4">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">{{__('data.Edit file')}}</h4>
            <form action="{{ route('library.update',$library->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @include('library.form')
                
            </form>
          </div>
        </div>
    </div>
   
@endsection