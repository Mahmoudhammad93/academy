
<div class="form-group">
    <label for="name_en">Name</label>
    <input type="text" class="form-control" name="name_en"  placeholder="Name" value="{{(!isset($term)) ? old('name') : $term->name_en}}">
    <span style="color: red">
        @error('name_en')
        {{$message}}
        @enderror
    </span>
  </div>

<div class="form-group">
    <label for="name_ar">Name in Arabic</label>
    <input type="text" class="form-control" name="name_ar"  placeholder="Name in Arabic" value="{{(!isset($term)) ? old('name_ar') : $term->name_ar}}">
    <span style="color: red">
        @error('name_ar')
        {{$message}}
        @enderror
    </span>
  </div>

  <button type="submit" class="btn btn-primary mr-2">Submit</button>