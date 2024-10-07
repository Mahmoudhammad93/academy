@extends('admin.classrooms.index')

@section('content')

<div class="col-md-12 grid-margin stretch-card mt-4">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">@lang('data.Add To Timetable')</h4>
            <form class="forms-sample" action="{{ route('storeCourseTimetable') }}" method="POST"
                enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="name_en">Name in English</label>
                    <input type="text" class="form-control" name="name_en" placeholder="Name in English"
                        value="{{old('name_en')}}">
                    <span style="color: red">
                        @error('name_en')
                        {{$message}}
                        @enderror
                    </span>
                </div>

                <div class="form-group">
                    <label for="name_ar">Name in Arabic</label>
                    <input type="text" class="form-control" name="name_ar" placeholder="Name in Arabic"
                        value="{{old('name_ar')}}">
                    <span style="color: red">
                        @error('name_ar')
                        {{$message}}
                        @enderror
                    </span>
                </div>


                <div class="form-group row">
                    <div class="form-group col-3">
                        <label for="week_day">Day</label>
                        <select name="week_day" class="form-control">
                            <option disabled selected>Select Day</option>
                            @foreach ($days as $key => $day)
                            <option value={{$key}}>{{$day}}</option>
                            @endforeach
                        </select>
                        <span style="color: red">
                            @error('week_day')
                            {{$message}}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group col-3">
                        <label for="week">Week</label>
                        <select name="week" class="form-control">
                            <option disabled selected>Select Week</option>
                            @foreach ($weeks as $key => $week)
                            <option value={{$key}}>{{$week}}</option>
                            @endforeach
                        </select>
                        <span style="color: red">
                            @error('week')
                            {{$message}}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group col-3">
                        <label for="month">Month</label>
                        <select name="month" class="form-control">
                            <option disabled selected>Select Month</option>
                            @foreach ($months as $key => $month)
                            <option value={{$key}}>{{$month}}</option>
                            @endforeach
                        </select>
                        <span style="color: red">
                            @error('month')
                            {{$message}}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group col-3">
                        <label for="year">Year</label>
                        <select name="year" class="form-control">
                            <option disabled selected>Select Year</option>
                            @foreach ($years as $key => $year)
                            <option value={{$year}}>{{$year}}</option>
                            @endforeach
                        </select>                        
                        <span style="color: red">
                            @error('year')
                            {{$message}}
                            @enderror
                        </span>
                    </div>

                </div>

                <div class="form-group row">
                    <div class="form-group col-6">
                        <label for="from">From</label>
                        <select name="from" class="form-control">
                            <option disabled selected>{{__('data.select From')}}</option>
                            @foreach ($from as $from)
                                <option value="{{$from}}">{{$from}}</option>
                            @endforeach
                        </select>
                        <span style="color: red">
                            @error('from')
                            {{$message}}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group col-6">
                        <label for="to">To</label>
                        <input type="text" class="form-control" name="to" value="From +2" disabled>
                        
                    {{-- <span style="color: red">
                        @error('to')
                        {{$message}}
                        @enderror
                    </span> --}}
                    </div>                    
                </div>

                <div class="form-group">
                    <label for="course_id">Course</label>
                    <select name="course_id" class="form-control">
                        <option disabled selected>Select Course</option>
                        @foreach ($courses as $key => $course)
                        <option value={{$course->id}}>{{$course->name}}</option>
                        @endforeach
                    </select>                        
                    <span style="color: red">
                        @error('course_id')
                        {{$message}}
                        @enderror
                    </span>
                </div>

                <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection