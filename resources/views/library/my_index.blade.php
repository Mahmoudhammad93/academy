@extends('layouts.cp_admin.shared.layout')
@section('content')

<a href="{{ route('library.show','audio') }}">{{__('data.audio')}}</a>
<a href="{{ route('library.show','video') }}">{{__('data.video')}}</a>
<a href="{{ route('library.show','presentations') }}">{{__('data.presentations')}}</a>
<a href="{{ route('library.show','Image') }}">{{__('data.Image')}}</a>
<a href="{{ route('library.show','Programs') }}">{{__('data.Programs')}}</a>
<a href="{{ route('library.show','Games') }}">{{__('data.Games')}}</a>
<a href="{{ route('library.show','E-learning') }}">{{__('data.E-learning')}}</a>


@endsection

