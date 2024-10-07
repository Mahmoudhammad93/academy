@extends('layouts.ws_layout.shared.layout')
@section('content')
<div class="view-course-content course-page">
{{-- {{dd($id)}} --}}
<view_course module_name="{{$module_name}}" locale_lang="{{app()->getLocale()}}" storage_path="{{asset('storage/file')}}" slug="{{$slug}}" id="{{$id}}" user_id="{{auth()->user()->id}}" user_name="{{auth()->user()->name}}"></view_course>
</div>
@endsection
