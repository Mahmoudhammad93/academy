@extends('layouts.ws_layout.shared.layout')
@section('content')
<student_courses module_name="{{$module_name}}" locale_lang="{{app()->getLocale()}}" storage_path="{{asset('storage/file')}}"></student_courses>
@endsection
