
<div class="form-group">
    <label for="name">{{__('data.Name in English')}}</label>
    <input type="text" class="form-control" name="name_en"  placeholder="{{__('data.Name in English')}}" value="{{(!isset($page)) ? old('name_en') : $page->name_en}}">
    <span style="color: red">
      @error('name_en')
      {{$message}}
      @enderror
    </span>
  </div>
  <div class="form-group">
    <label for="name">{{__('data.Name in Arabic')}}</label>
    <input type="text" class="form-control" name="name_ar"  placeholder="{{__('data.Name in Arabic')}}" value="{{(!isset($page)) ? old('name_ar') : $page->name_ar}}">
    <span style="color: red">
      @error('name_ar')
      {{$message}}
      @enderror
    </span>
  </div>
  <div class="form-group">
    <label for="name">{{__('data.Description in English')}}</label>
    <textarea class="form-control" name="description_en"  placeholder="{{__('data.Description in English')}}" >{{(!isset($page)) ? old('description_en') : $page->description_en}}</textarea>
    <span style="color: red">
      @error('description_en')
      {{$message}}
      @enderror
    </span>
  </div>
  <div class="form-group">
    <label for="name">{{__('data.Description in Arabic')}}</label>
    <textarea class="form-control" name="description_ar"  placeholder="{{__('data.Description in Arabic')}}" >{{(!isset($page)) ? old('description_ar') : $page->description_ar}}</textarea>
    <span style="color: red">
      @error('description_ar')
      {{$message}}
      @enderror
    </span>
  </div>


  <button type="submit" class="btn btn-primary mr-2">{{__('data.Submit')}}</button>