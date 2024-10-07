
<div class="form-group">
    <label for="name_en">@lang('data.Name')</label>
    <input type="text" class="form-control" name="name_en"  placeholder="Name" value="{{(!isset($subject)) ? old('name') : $subject->name_en}}">
    <span style="color: red">
        @error('name_en')
        {{$message}}
        @enderror
    </span>
  </div>

<div class="form-group">
    <label for="name_ar">@lang('data.Name in Arabic')</label>
    <input type="text" class="form-control" name="name_ar"  placeholder="Name in Arabic" value="{{(!isset($subject)) ? old('name_ar') : $subject->name_ar}}">
    <span style="color: red">
        @error('name_ar')
        {{$message}}
        @enderror
    </span>
  </div>

<div class="form-group">
    <label for="code">@lang('data.Subject Code')</label>
    <input type="text" class="form-control" name="code" placeholder="Subject Code" value="{{(!isset($subject)) ? old('code') : $subject->code}}">
    <span style="color: red">
        @error('name')
        {{$message}}
        @enderror
    </span>
  </div>

  <div class="form-group">
      <label for="image">@lang('data.Image')</label> &nbsp; &nbsp;
      @if (isset($subject))
          <img src=" {{ asset('storage/file/'.$subject->image) }}" width="50" height="50">
      @endif
    <input type="file" class="form-control" name="image"  value="{{(!isset($subject)) ? old('image') : $subject->image}}">
    <span style="color: red">
        @error('image')
        {{$message}}
        @enderror
    </span>
  </div>

  <div class="form-group">
    <label for="description">@lang('data.Description')</label>
    <textarea name="description" class="form-control" cols="30" rows="10">{{(!isset($subject)) ? old('description') : $subject->description }}</textarea>
  </div>

  <div class="form-group">
    <label for="description_ar">@lang('data.Description in Arabic')</label>
    <textarea name="description_ar" class="form-control" cols="30" rows="10">{{(!isset($subject)) ? old('description_ar') : $subject->description_ar }}</textarea>
  </div>


  <button type="submit" class="btn btn-primary mr-2">@lang('data.Submit')</button>
