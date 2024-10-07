
<div class="form-group">
    <label for="name_en">@lang('data.Name')</label>
    <input type="text" class="form-control" name="name_en"  placeholder="Name" value="{{(!isset($country)) ? old('name') : $country->name_en}}">
    <span style="color: red">
        @error('name_en')
        {{$message}}
        @enderror
    </span>
  </div>

<div class="form-group">
    <label for="name_ar">@lang('data.Name in Arabic')</label>
    <input type="text" class="form-control" name="name_ar"  placeholder="Name in Arabic" value="{{(!isset($country)) ? old('name_ar') : $country->name_ar}}">
    <span style="color: red">
        @error('name_ar')
        {{$message}}
        @enderror
    </span>
  </div>

  <button type="submit" class="btn btn-primary mr-2">@lang('data.Submit')</button>
