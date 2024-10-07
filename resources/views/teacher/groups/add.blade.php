@extends('layouts.cp_admin.shared.layout')
@section('content')
<div class="card">
   <div class="card-body">
      <h4 class="card-title">@lang('data.Add Group')</h4>
      <form class="forms-sample">
                    <div class="form-group">
                      <label for="country">{{__('data.Country')}}</label>
                      <select class="form-control" id="country">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="groupName">{{__('data.Group name')}}</label>
                      <input type="text" class="form-control" id="groupName" placeholder="Group name">
                    </div>
                    <div class="form-group">
                      <label for="subjectName">{{__('data.Subject name')}}</label>
                      <input type="text" class="form-control" id="subjectName" placeholder="Subject name">
                    </div>
                    <div class="form-group">
                      <label for="grade">{{__('data.Grade')}}</label>
                      <select class="form-control" id="grade">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="term">{{__('data.Term')}}</label>
                      <select class="form-control" id="term">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="description">{{__('data.Description')}}</label>
                      <textarea class="form-control" id="description" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">{{__('data.Submit')}}</button>
                  </form>
   </div>
</div>
@endsection
