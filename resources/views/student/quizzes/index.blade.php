@extends('layouts.ws_layout.shared.layout')
@section('content')
  <quizzes module_name="{{$module_name}}" locale_lang="{{app()->getLocale()}}"></quizzes>
@endsection
