
<div class="form-group">
    <label for="name_en">{{_('data.Name en')}}</label>
    <input type="text" class="form-control" name="name_en"  placeholder="Name" value="{{(!isset($education_type)) ? old('name') : $education_type->name_en}}">
    <span style="color: red">
        @error('name_en')
        {{$message}}
        @enderror
    </span>
  </div>

<div class="form-group">
    <label for="name_ar">{{_('data.Name ar')}}</label>
    <input type="text" class="form-control" name="name_ar"  placeholder="Name in Arabic" value="{{(!isset($education_type)) ? old('name_ar') : $education_type->name_ar}}">
    <span style="color: red">
        @error('name_ar')
        {{$message}}
        @enderror
    </span>
  </div>

<div class="form-group">
    <label for="country">{{_('data.Country')}}</label>
    <select class="form-control" name="country_id" id="country">
        @foreach ($countries as $option)
            <option {{isset($education_type)&&$education_type->country_id==$option->id?"selected":old('country_id')}} value="{{$option->id}}">{{$option->getName()}}</option>
        @endforeach
    </select>
  </div>






  <button type="submit" class="btn btn-primary mr-2">Submit</button>
