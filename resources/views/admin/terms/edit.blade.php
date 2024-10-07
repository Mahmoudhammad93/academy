@extends('layouts.cp_admin.shared.layout')
   
@section('content')
    <div class="col-md-12 grid-margin stretch-card mt-4">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Term</h4>
            <form action="{{ route('terms.update',$term->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @include('admin.terms.form')
                
            </form>
          </div>
        </div>
    </div>
   
@endsection