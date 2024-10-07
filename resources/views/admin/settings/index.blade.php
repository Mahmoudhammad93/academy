@extends('layouts.cp_admin.shared.layout')

@section('style')
<link rel="stylesheet" href="{{asset('vendors/dropify/dropify.min.css')}}">
@endsection

@section('content')
<settings></settings>
@endsection

@push('scripts')
<script src="{{asset('vendors/dropify/dropify.min.js')}}"></script>
<script src="{{asset('js/dropify.js')}}"></script>
@endpush