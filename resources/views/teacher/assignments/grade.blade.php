@extends('layouts.cp_admin.shared.layout')
@section('content')
  <assignment_grade module_name="{{$module_name}}" locale_lang="{{app()->getLocale()}}" storage_path="{{asset('storage/file')}}"></assignment_grade>
@endsection