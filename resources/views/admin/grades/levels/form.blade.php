
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

<div class="form-group">
    <label for="parent">@lang('data.Grade')</label>
    <select class="form-control" name="parent_id" id="parent">
        <option value="{{$grade->id}}">{{$grade->name_en}}</option>
    </select>
</div>



{{-- @isset($grades)

<div class="form-group">
    <label for="parent_id">@lang('data.Grade') / @lang('data.Level')</label>
    <select name="parent_id" class="form-control" >
        <option disabled selected>-- {{__('data.Select Grade / Level')}} --</option>
        @foreach ($grades as $item)
            @if (!isset($grade))
                <option value="{{$item->id}}" {{($item->id == old('parent_id')) ? 'selected' : '' }} >{{$item->name_en}}</option>
            @else
                <option value="{{$item->id}}" {{($item->id == $grade->parent_id) ? 'selected' : '' }} >{{$item->name_en}}</option>
            @endif
        @endforeach
    </select>
    <span style="color: red">
        @error('parent_id')
        {{$message}}
        @enderror
    </span>
  </div>
  @endisset --}}



  <button type="submit" class="btn btn-primary mr-2">@lang('data.Save')</button>
