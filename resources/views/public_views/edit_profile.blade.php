@extends('layouts.cp_admin.shared.layout')
@section('content')
{{-- <div class="card"> --}}
   {{-- <div class="card-body"> --}}
      {{-- <h4 class="card-title">{{__('data.Edit Profile')}}</h4> --}}
      <edit_user countries="{{json_encode($countries)}}" user_data="{{$user}}"></edit_user>
   {{-- </div> --}}
{{-- </div> --}}
@endsection
