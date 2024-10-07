@extends('admin.users.index')

@section('content')
<div class="col-md-12 grid-margin stretch-card mt-4">
    <div class="card">
        <div class="card-primary card-outline">
            <div class="card-body">
                <h4 class="card-title">{{trans('data.Add Description')}}</h4>
                <form class="cmxform" id="commentForm" method="get" action="{{route('storeDescription',$id)}}" novalidate="novalidate">
                    <fieldset>
                      <div class="form-group">
                        <label for="description">{{__('data.Description')}}</label>
                        <textarea id="description" class="form-control" name="description" required="" placeholder="{{__('data.Description')}}">@if($row){{$row->description}}@endif</textarea>
                      </div>
                      <input class="btn btn-primary" type="submit" value="Submit">
                    </fieldset>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection
