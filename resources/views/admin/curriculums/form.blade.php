
<div class="form-group">
    <label for="name_en">Name</label>
    <input type="text" class="form-control" name="name_en"  placeholder="Name" value="{{(!isset($curriculum)) ? old('name') : $curriculum->name_en}}">
    <span style="color: red">
        @error('name_en')
        {{$message}}
        @enderror
    </span>
  </div>

<div class="form-group">
    <label for="name_ar">Name in Arabic</label>
    <input type="text" class="form-control" name="name_ar"  placeholder="Name in Arabic" value="{{(!isset($curriculum)) ? old('name_ar') : $curriculum->name_ar}}">
    <span style="color: red">
        @error('name_ar')
        {{$message}}
        @enderror
    </span>
  </div>

<div class="form-group">
    <label for="price">Price</label>
    <input type="number" class="form-control" name="price"  placeholder="Price" value="{{(!isset($curriculum)) ? old('name_ar') : $curriculum->price}}">
    <span style="color: red">
        @error('price')
        {{$message}}
        @enderror
    </span>
  </div>

<div class="form-group">
    <label for="course_id">Course</label>

      <select name="course_id" class="form-control">
        <option disabled selected>{{__('data.Select Course')}}</option>
        @foreach ($courses as $course)
          <option value="{{$course->id}}">{{$course->name_en}}</option>
        @endforeach
      </select>
    <span style="color: red">
        @error('course_id')
        {{$message}}
        @enderror
    </span>
  </div>


  <button type="submit" class="btn btn-primary mr-2">Submit</button>
