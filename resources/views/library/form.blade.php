
<div class="form-group">

    <label for="name">{{__('data.Title')}}</label>
    <input type="text" class="form-control" name="title"  placeholder="Title" value="{{(!isset($library)) ? old('title') : $library->title}}">
    <span style="color: red">
      @error('title')
      {{$message}}
      @enderror
    </span>
  </div>

  <div class="form-group">

    <label for="name">{{__('data.file_type')}}</label>
    <select class="form-control" name="file_type">
      <option value="audio">{{__('data.audio')}}</option> 
      <option value="video">{{__('data.video')}}</option> 
      <option value="presentations">{{__('data.presentations')}}</option> 
      <option value="Image">{{__('data.Image')}}</option> 
      <option value="Programs">{{__('data.Programs')}}</option> 
      <option value="Games">{{__('data.Games')}}</option> 
      <option value="E-learning">{{__('data.E-learning')}}</option>
    </select>
    {{-- <input type="text" class="form-control" name="file_type"  placeholder="File Type" value="{{(!isset($library)) ? old('file_type') : $library->file_type}}"> --}}
    <span style="color: red">
      @error('file_type')
      {{$message}}
      @enderror
    </span>
  </div>
  <div class="form-group">

    <label for="name">{{__('data.URL')}}</label>
    <input type="text" class="form-control" name="url"  placeholder="URL" value="{{(!isset($library)) ? old('url') : $library->url}}">
    <span style="color: red">
      @error('url')
      {{$message}}
      @enderror
    </span>
  </div>

  <div class="form-group">

    <label for="name">{{__('data.Upload_File')}}</label>
    <input type="file" class="form-control" name="path"  placeholder="Upload File" value="{{(!isset($library)) ? old('path') : $library->path}}">
    <span style="color: red">
      @error('path')
      {{$message}}
      @enderror
    </span>
  </div>

  <div class="form-group">

    <label for="name">{{__('data.course')}}</label>
    <select class="form-control" name="course_id">
      @foreach ($all_courses as $course_item)
      <option value="{{$course_item->id}}">{{$course_item->name_en}}</option> 
      @endforeach
      
    </select>
    <span style="color: red">
      @error('path')
      {{$message}}
      @enderror
    </span>
  </div>

<div class="form-group">
  <label for="name">{{__('data.Description')}}</label>
  <textarea class="form-control" name="description"  placeholder="{{__('data.Description')}}" >{{(!isset($library)) ? old('description') : $library->description}}</textarea>

    <span style="color: red">
        @error('description')
        {{$message}}
        @enderror
    </span>
  </div>



  <button type="submit" class="btn btn-primary mr-2">Submit</button>