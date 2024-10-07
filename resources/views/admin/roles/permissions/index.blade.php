@extends('layouts.cp_admin.shared.layout')
@section('content')

<form action="{{route('setPermissions',$id)}}" method="post">
    @csrf

    <div class="form-group">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="card-title">@lang('data.Permissions')</h4>
                        <div class="row">
                            @forelse ($permissions as $id => $permission)
                                <div class="col-md-3">
                                    <div class="form-check form-check-primary">
                                        <label class="form-check-label">
                                          <input type="checkbox" class="form-check-input" name="permissions[]" value="{{$permission->name}}" {{(in_array($permission->name,$rolePermissionsArr)) ? 'checked' : ''}}>
                                          {{$permission->name}}
                                        <i class="input-helper"></i></label>
                                      </div>
                                </div>
                            @empty
                                <span> No Roles now</span>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <button type="submit" class="btn btn-primary mr-2">Submit</button>

</form>

@endsection
