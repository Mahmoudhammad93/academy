@extends('layouts.cp_admin.shared.layout')

@section('content')
<edit_user countries="{{json_encode($countries)}}" user_data="{{$user}}" locale_lang="{{app()->getLocale()}}"></edit_user>
@endsection
