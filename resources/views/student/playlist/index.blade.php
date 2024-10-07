@extends('layouts.ws_layout.shared.layout')
@section('content')
  <playlist module_name="{{$module_name}}" storage_path="{{asset('storage')}}" course_slug="{{$course_slug}}" curr_id="{{$curr_id}}" unit_slug="{{$unit_slug}}" lesson_slug="{{$lesson_slug}}" locale_lang="{{app()->getLocale()}}"></playlist>
@endsection
