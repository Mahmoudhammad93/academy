@extends('layouts.cp_admin.shared.layout')
   
@section('content')
    <div class="col-md-12 grid-margin stretch-card mt-4">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">{{__('data.Edit Group')}}</h4>
            <form action="{{ route('payments.update',$group->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @include('admin.groups.form')
                
            </form>
          </div>
        </div>
    </div>
   
@endsection