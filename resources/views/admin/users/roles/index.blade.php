@extends('layouts.cp_admin.shared.layout')
@section('content')

<form action="{{route('setUserRoles',$user->id)}}" method="post">
    @csrf
    <div class="form-group row">
        <div class="form-group col-6">
            <label for="name">@lang('data.User Name')</label>
            <input type="text" class="form-control" name="name" readonly
                value="{{ !isset($user) ? old('name') : $user->name }}">
        </div>
        <div class="form-group col-6">
            <label for="account_type">@lang('data.Account Type')</label>
            <input type="text" class="form-control" name="account_type" readonly
                value="{{ !isset($user) ? old('account_type') : $user->account_type }}">
        </div>
    </div>

    <div class="form-group">
        <label for="roles">@lang('data.Roles')</label>
        <select name="roles[]" class="form-control" multiple>
            @forelse ($rolesLang as $id => $role)
                <option value="{{$id}}"
                  @if (in_array($role,$userRoles))
                      selected
                  @endif
                >{{$role}}</option>
            @empty
                <span>@lang('data.No Roles now') </span>
            @endforelse
        </select>
    </div>

    <button type="submit" class="btn btn-primary mr-2">@lang('data.Submit')</button>

    <div style="margin: 10px; paddding:10px;">
        <a href="{{route('assignUserPermission',$user->id)}}" class="btn btn-success">@lang('data.Add Permissions for this users')</a>
    </div>
<form>


@endsection
