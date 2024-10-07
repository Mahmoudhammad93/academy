
<div class="form-group">
    <label for="title">@lang('data.Title')</label>
    <input type="text" class="form-control" name="title"  placeholder="@lang('data.Title')" value="{{(!isset($bank)) ? old('title') : $bank->title}}">
    <span style="color: red">
        @error('title')
        {{$message}}
        @enderror
    </span>
  </div>

<div class="form-group">
    <label for="description">@lang('data.Description')</label>
    <input type="text" class="form-control" name="description"  placeholder="@lang('data.Description')" value="{{(!isset($bank)) ? old('description') : $bank->description}}">
    <span style="color: red">
        @error('name_ar')
        {{$message}}
        @enderror
    </span>
  </div>
  <input type="hidden" name="course_id" value="{{$course->id}}">

  <button type="submit" class="btn btn-success mr-2">@lang('data.Submit')</button>
