@extends('admin.groups.index')

@section('content')
<edit_lessons module_name="{{$module_name}}" id="{{$id}}"></edit_lessons>
@endsection
