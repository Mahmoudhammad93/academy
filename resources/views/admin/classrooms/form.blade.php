<div class="form-group">
  <label for="room_id">Room Id</label>
  <input type="text" class="form-control" name="room_id" placeholder="Room Id"
    value="{{(!isset($classroom)) ? old('room_id') : $classroom->room_id}}">
  <span style="color: red">
    @error('room_id')
    {{$message}}
    @enderror
  </span>
</div>

<div class="form-group">
  <label for="name_en">Name in English</label>
  <input type="text" class="form-control" name="name_en" placeholder="Name in English"
    value="{{(!isset($classroom)) ? old('name_en') : $classroom->name_en}}">
  <span style="color: red">
    @error('name_en')
    {{$message}}
    @enderror
  </span>
</div>

<div class="form-group">
  <label for="name_ar">Name in Arabic</label>
  <input type="text" class="form-control" name="name_ar" placeholder="Name in Arabic"
    value="{{(!isset($classroom)) ? old('name_ar') : $classroom->name_ar}}">
  <span style="color: red">
    @error('name_ar')
    {{$message}}
    @enderror
  </span>
</div>

<div class="form-group">
  <label for="description_en">Description in English</label>
  <textarea name="description_en" class="form-control" cols="30" rows="10">
      {{(!isset($classroom)) ? old('description_en') : $classroom->description_en}}
    </textarea>
</div>

<div class="form-group">
  <label for="description_ar">Description in Arabic</label>
  <textarea name="description_ar" class="form-control" cols="30" rows="10">
      {{(!isset($classroom)) ? old('description_ar') : $classroom->description_ar}}
    </textarea>
</div>

<div class="form-group">
  <label for="launched">Launched</label>
  <select name="launched" class="form-control">
    <option disabled selected>Is Launched</option>
    <option value=1>Active</option>
    <option value=0>In Active</option>
  </select>
</div>

<div class="form-group">
  <label for="recored_id">Recored Id</label>
  <input type="text" class="form-control" name="recored_id" placeholder="Recored Id"
    value="{{(!isset($classroom)) ? old('recored_id') : $classroom->recored_id}}">
</div>

<div class="form-group">
  <label for="link">Link</label>
  <input type="text" class="form-control" name="link" placeholder="Link"
    value="{{(!isset($classroom)) ? old('link') : $classroom->link}}">
</div>

<div class="form-group">
  <label for="attendence_code">Attendence Code</label>
  <input type="text" class="form-control" name="attendence_code" placeholder="Attendence Code"
    value="{{(!isset($classroom)) ? old('attendence_code') : $classroom->attendence_code}}">
</div>

<div class="form-group row">
      <div class="form-group col-6">
        <label for="from">From</label>
        <input type="date" class="form-control" name="from" 
          value="{{(!isset($classroom)) ? old('from') : $classroom->from}}">
      </div>

      <div class="form-group col-6">
        <label for="to">To</label>
        <input type="date" class="form-control" name="to" 
          value="{{(!isset($classroom)) ? old('to') : $classroom->to}}">
      </div>      
</div>

<div class="form-group">
  <label for="course_id">Course Id</label>
  <select name="course_id" class="form-control">
    <option disabled selected>Select Course</option>
    @foreach ($courses as $course)        
      <option value={{$course->id}}>{{$course->name}}</option>
    @endforeach
  </select>
  <span style="color: red">
    @error('course_id')
    {{$message}}
    @enderror
  </span>
</div>

<div class="form-group">
  <label for="unit_id">Unit Id</label>
  <select name="unit_id" class="form-control">
    <option disabled selected>Select Unit</option>
        @foreach ($units as $unit)        
          <option value={{$unit->id}}>{{$unit->name}}</option>
        @endforeach
  </select>
  <span style="color: red">
    @error('unit_id')
    {{$message}}
    @enderror
  </span>
</div>



<button type="submit" class="btn btn-primary mr-2">Submit</button>