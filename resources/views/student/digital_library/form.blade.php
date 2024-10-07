@extends('layouts.ws_layout.shared.layout')
@section('content')
  <digital_library_form module_name="{{$module_name}}" storage_path="{{asset('storage/file')}}" locale_lang="{{app()->getLocale()}}"></digital_library_form>
@endsection
