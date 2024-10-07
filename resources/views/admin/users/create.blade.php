@extends('admin.users.index')

@section('content')
<create_user countries="{{json_encode($countries)}}" locale_lang="{{app()->getLocale()}}"></create_user>
@endsection
