
<div class="form-group">
    <label for="name">@lang('data.Name')</label>
    <input type="text" class="form-control" name="name"  placeholder="Name" value="{{(!isset($role)) ? old('name') : $role->name}}">
    <span style="color: red">
        @error('name')
        {{$message}}
        @enderror
    </span>
  </div>

<div class="form-group">
    <label for="name">@lang('data.Name in Arabic')</label>
    <input type="text" class="form-control" name="name_ar"  placeholder="Name in Arabic" value="{{(!isset($role)) ? old('name_ar') : $role->name_ar}}">
    <span style="color: red">
        @error('name_ar')
        {{$message}}
        @enderror
    </span>
  </div>

  <button type="submit" class="btn btn-primary mr-2">@lang('data.Submit')</button>
