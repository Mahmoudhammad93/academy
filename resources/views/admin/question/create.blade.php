@extends('layouts.cp_admin.shared.layout')

@section('content')

<div class="col-md-12 grid-margin stretch-card mt-4">
    <div class="card">
      <div class="card-body form-container">
        <h4 class="card-title">@lang('data.Create Questions')</h4>
        <question_form bank_id={{$bank->id}} course_id={{$course->id}}></question_form>
        <button class="btn btn-success btn-block"><a href="{{route('questions.index', [$course->id, $bank->id])}}">{{trans("data.finish")}}</a></button>
      </div>
    </div>
  </div>

@endsection
