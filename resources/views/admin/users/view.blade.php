@extends('layouts.cp_admin.shared.layout')

@section('content')

<form id="delete-form" method="POST" action="/requests/{{$user->id}}">
     {{ csrf_field() }}
     <div class="row">
     <div class="col-md-12 mb-2">    <button type="submit" class="edit btn btn-primary btn-sm btn-create">
    <i class="mdi mdi mdi-account-check btn-icon-prepend"></i>
    {{__('data.Activate')}}
    </button></div>
    </div>
</form>
<div class="card">
<div class="card-body">
<div class="custom-list"><div style="margin-bottom: 10px;"><h3>{{__('data.User data')}}:</h3></div>
<div class="custom-list-holder"><div class="custom-list-title">{{__('data.Profile picture')}}:</div> <div class="custom-list-item"><img src="{{URL::asset('storage/file/'.$user->image)}}" alt="profile Pic" height="48" width="48"></div> </div>
<div class="custom-list-holder"><div class="custom-list-title">{{__('data.Name')}}:</div> <div class="custom-list-item"> {{ $user->name }}</div></div>
<div class="custom-list-holder"><div class="custom-list-title">{{__('data.Email')}}:</div> <div class="custom-list-item">{{ $user->email }}</div> </div>
<div class="custom-list-holder"><div class="custom-list-title">{{__('data.Account type')}}:</div> <div class="custom-list-item">{{ $user->account_type }}</div> </div>
<div class="custom-list-holder"><div class="custom-list-title">{{__('data.Country')}}:</div> <div class="custom-list-item"> {{ $user->country }}</div></div>
<div class="custom-list-holder"><div class="custom-list-title">{{__('data.City')}}:</div> <div class="custom-list-item"> {{ $user->city }}</div></div>
<div class="custom-list-holder"><div class="custom-list-title">{{__('data.Gender')}}:</div> <div class="custom-list-item"> {{ $user->gender }}</div></div>
<div class="custom-list-holder"><div class="custom-list-title">{{__('data.School')}}:</div> <div class="custom-list-item"> {{ $user->school }}</div></div>
<div class="custom-list-holder"><div class="custom-list-title">{{__('data.Phone')}}:</div> <div class="custom-list-item"> {{ $user->phone }}</div></div>
<div class="custom-list-holder"><div class="custom-list-title">{{__('data.Address')}}:</div> <div class="custom-list-item"> {{ $user->address }}</div></div>
</div>
</div>

</div>


@endsection
