@extends('layouts.cp_admin.shared.layout')
@section('content')
{{-- {{dd($courseId)}} --}}
<a href="{{route('createCourseTimetable')}}" class="btn btn-success btn-create">
    <i class="mdi mdi-plus"></i> {{__('data.Add Classroom')}}
</a>
<timetable module_name="{{$module_name}}" course_id="{{$id}}" locale_lang="{{app()->getLocale()}}"></timetable>
@endsection

@push('scripts')
    <script>
        $(document).ready(() => {
            var colorCode = "1234567890abcdef";
            var color = "";
            for (var i = 0; i < 6; i++) {
                color += colorCode.charAt(Math.floor(Math.random() * colorCode.length));
            }
            $("#hex").html("HEX: " + "#" + color); //Display hexacode
            $("span.lesson").css("background", "#" + color+'98'); //Display color
        });
    </script>
@endpush
