@extends('layouts.cp_admin.shared.layout')
@section('content')

<form id="delete-form" method="GET" action="{{route('groups.create')}}" style="display:inline-block">
  {{ csrf_field() }}
 <button type="submit" class="edit btn btn-success btn-sm">
 <i class="mdi mdi mdi-account-check btn-icon-prepend"></i>
 {{__('data.Add New Group')}}
 </button>
</form>

@endsection

