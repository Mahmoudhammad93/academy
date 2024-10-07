@extends('layouts.cp_admin.shared.layout')
@section('content')
  <quiz_grade module_name="{{$module_name}}" locale_lang="{{app()->getLocale()}}" storage_path="{{asset('storage/file')}}"></quiz_grade>
@endsection
