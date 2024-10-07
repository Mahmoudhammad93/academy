<div class="form-group">
  <label for="name_en">@lang('data.Name')</label>
  <input type="text" class="form-control" name="name_en" placeholder="Name"
    value="{{(!isset($course)) ? old('name_en') : $course->name_en}}">
  <span style="color: red">
    @error('name_en')
    {{$message}}
    @enderror
  </span>
</div>

<div class="form-group">
  <label for="name">@lang('data.Name in Arabic')</label>
  <input type="text" class="form-control" name="name_ar" placeholder="Name in Arabic"
    value="{{(!isset($course)) ? old('name_ar') : $course->name_ar}}">
  <span style="color: red">
    @error('name_ar')
    {{$message}}
    @enderror
  </span>
</div>

<div class="form-group">
  <label for="name">@lang('data.Code')</label>
  <input type="text" class="form-control" name="code" placeholder="Code"
    value="{{(!isset($course)) ? old('code') : $course->code}}">
  <span style="color: red">
    @error('code')
    {{$message}}
    @enderror
  </span>
</div>

<div class="form-group">
  <label for="image">@lang('data.Image')</label> &nbsp; &nbsp;
  @if (isset($subject))
  <img src=" {{ asset('storage/file/'.$course->image) }}" width="50" height="50">
  @endif
  <input type="file" class="form-control" name="image" value="{{(!isset($course)) ? old('image') : $course->image}}">
  <span style="color: red">
    @error('image')
    {{$message}}
    @enderror
  </span>
</div>

<div class="form-group">
  <label for="price">@lang('data.Price')</label>
  <input type="number" class="form-control" name="price" placeholder="Price"
    value="{{(!isset($course)) ? old('price') : $course->price}}">
  <span style="color: red">
    @error('price')
    {{$message}}
    @enderror
  </span>
</div>

<div class="form-group">
  <label for="grade">@lang('data.Grade')</label>
  @if (!isset($course))
  <select name="grade_id" class="form-control">
    <option disabled selected>{{__('data.Select Grade')}}</option>
    @foreach ($grades as $grade)
    <option value="{{$grade->id}}" {{ old('grade_id') == $grade->id ? 'selected' : '' }}>{{(app()->getLocale() == 'ar')?$grade->name_ar:$grade->name_en}}</option>
    @endforeach
  </select>
  @else
  <select name="grade_id" class="form-control">
    <option disabled selected>{{__('data.Select Grade')}}</option>
    @foreach ($grades as $grade)
    <option value="{{$grade->id}}" {{ $course->grade_id == $grade->id ? 'selected' : '' }}>{{(app()->getLocale() == 'ar')?$grade->name_ar:$grade->name_en}}</option>
    @endforeach
  </select>
  @endif

  <span style="color: red">
    @error('grade_id')
    {{$message}}
    @enderror
  </span>
</div>

<div class="form-group">
  <label for="level">@lang('data.Level')</label>
  @if (!isset($course))
  <select name="level_id" class="form-control">
    <option disabled selected>{{__('data.Select Level')}}</option>
    @foreach ($levels as $level)
    <option value="{{$level->id}}" {{ old('level_id') == $level->id ? 'selected' : '' }}>{{(app()->getLocale() == 'ar')?$level->name_ar:$level->name_en}}</option>
    @endforeach
  </select>
  @else
  <select name="level_id" class="form-control">
    <option disabled selected>{{__('data.Select Level')}}</option>
    @foreach ($levels as $level)
    <option value="{{$level->id}}" {{ $course->level_id == $level->id ? 'selected' : '' }}>{{(app()->getLocale() == 'ar')?$level->name_ar:$level->name_en}}</option>
    @endforeach
  </select>
  @endif

  <span style="color: red">
    @error('level_id')
    {{$message}}
    @enderror
  </span>
</div>


<div class="form-group">
  <label for="term">@lang('data.Term')</label>
  @if (!isset($course))
  <select name="term_id" class="form-control">
    <option disabled selected>{{__('data.Select Term')}}</option>
    @foreach ($terms as $term)
    <option value="{{$term->id}}" {{ old('term_id') == $term->id ? 'selected' : '' }}>{{(app()->getLocale() == 'ar')?$term->name_ar:$term->name_en}}</option>
    @endforeach
  </select>
  @else
  <select name="term_id" class="form-control">
    <option disabled selected>{{__('data.Select Term')}}</option>
    @foreach ($terms as $term)
    <option value="{{$term->id}}" {{ $course->term_id == $term->id ? 'selected' : '' }}>{{(app()->getLocale() == 'ar')?$term->name_ar:$term->name_en}}</option>
    @endforeach
  </select>
  @endif

  <span style="color: red">
    @error('term_id')
    {{$message}}
    @enderror
  </span>
</div>


<div class="form-group">
  <label for="subject_id">@lang('data.Subject')</label>
  @if (!isset($course))
  <select name="subject_id" class="form-control">
    <option disabled selected>{{__('data.Select Subject')}}</option>
    @foreach ($subjects as $subject)
    <option value="{{$subject->id}}" {{ old('subject_id') == $subject->id ? 'selected' : '' }}>{{(app()->getLocale() == 'ar')?$subject->name_ar:$subject->name_en}}
    </option>
    @endforeach
  </select>
  @else
  <select name="subject_id" class="form-control">
    <option disabled selected>{{__('data.Select Subject')}}</option>
    @foreach ($subjects as $subject)
    <option value="{{$subject->id}}" {{ $course->subject_id == $subject->id ? 'selected' : '' }}>{{(app()->getLocale() == 'ar')?$subject->name_ar:$subject->name_en}}
    </option>
    @endforeach
  </select>
  @endif

  <span style="color: red">
    @error('subject_id')
    {{$message}}
    @enderror
  </span>
</div>

<div class="form-group">
  <label for="description">@lang('data.Description')</label>
  <textarea name="description_en" class="form-control" cols="30" rows="10">
      {{(!isset($course)) ? old('description') : $course->description_en}}
    </textarea>
</div>

<div class="form-group">
  <label for="description_ar">@lang('data.Description in Arabic')</label>
  <textarea name="description_ar" class="form-control" cols="30" rows="10">
      {{(!isset($course)) ? old('description_ar') : $course->description_ar}}
    </textarea>
</div>

<ilo id="{{(isset($id))?$id:''}}"></ilo>

<button type="submit" class="btn btn-primary mr-2">@lang('data.Submit')</button>

@push('scripts')
  <script>
    $(document).on('click', '.delete_ilo', function(e){
      e.preventDefault()
      var id = $(this).attr('data');
      $(`.ilo_${id}`).remove()
    })
  </script>
@endpush
