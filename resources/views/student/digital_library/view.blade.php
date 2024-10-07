@extends('layouts.ws_layout.shared.layout')
@section('content')
  <view_digital_library module_name="{{$module_name}}" storage_path="{{asset('storage/file')}}" locale_lang="{{app()->getLocale()}}"></view_digital_library>
@endsection
