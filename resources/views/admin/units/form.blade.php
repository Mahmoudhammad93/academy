
<div class="form-group">
    <label for="title">@lang('data.Name_en')</label>
    <input type="text" class="form-control" name="name_en"  placeholder="@lang('data.Name_en')" value="{{(!isset($unit)) ? old('name_en') : $unit->name_en}}">
    <span style="color: red">
        @error('name_en')
        {{$message}}
        @enderror
    </span>
  </div>
<div class="form-group">
    <label for="title">@lang('data.Name_ar')</label>
    <input type="text" class="form-control" name="name_ar"  placeholder="@lang('data.Name_ar')" value="{{(!isset($unit)) ? old('name_ar') : $unit->name_ar}}">
    <span style="color: red">
        @error('name_ar')
        {{$message}}
        @enderror
    </span>
  </div>


  {{-- <input type="hidden" name="" value="{{$course->id}}"> --}}

  <button type="submit" class="btn btn-success mr-2">@lang('data.Submit')</button>
