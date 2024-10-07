@extends('layouts.cp_admin.shared.layout')
@section('content')

<form action="{{route('addPermissionToUser',$user->id)}}" method="post">
    @csrf
    <div class="form-group row">        
        <div class="form-group col-6">
            <label for="name">User Name</label>
            <input type="text" class="form-control" name="name" readonly
                value="{{ !isset($user) ? old('name') : $user->name }}">
        </div>
        <div class="form-group col-6">
            <label for="account_type">Account Type</label>
            <input type="text" class="form-control" name="account_type" readonly
                value="{{ !isset($user) ? old('account_type') : $user->account_type }}">
        </div>
    </div>    
    
    <div class="form-group">
        <label for="permissions">Permissions</label>        
        <table>
            @forelse ($permissions as $permission)
            <tr>
                <td>
                    <input type="checkbox" name="permissions[]" value="{{$permission->name}}"
                    @if (in_array($permission->name,$selectedPermissions))
                        checked
                    @endif
                    > 
                </td>
                <td>
                    {{$permission->name}}
                </td>
            </tr>
            @empty
                <span> No Roles now</span>
            @endforelse
        </table>
    </div>

    <button type="submit" class="btn btn-primary mr-2">Submit</button>

<form>


@endsection