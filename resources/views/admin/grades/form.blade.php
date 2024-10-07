
<div class="form-group">
    <label for="name_en">@lang('data.Name')</label>
    <input type="text" class="form-control" name="name_en"  placeholder="Name" value="{{(!isset($grade)) ? old('name') : $grade->name_en}}">
    <span style="color: red">
        @error('name_en')
        {{$message}}
        @enderror
    </span>
  </div>

<div class="form-group">
    <label for="name_ar">@lang('data.Name in Arabic')</label>
    <input type="text" class="form-control" name="name_ar"  placeholder="Name in Arabic" value="{{(!isset($grade)) ? old('name_ar') : $grade->name_ar}}">
    <span style="color: red">
        @error('name_ar')
        {{$message}}
        @enderror
    </span>
</div>
<input type="hidden" name="education_type_id" value="{{$eduObject->id}}" />
<input type="hidden" name="parent_id" value="0">



  <button type="submit" class="btn btn-primary mr-2">@lang('data.Save')</button>
