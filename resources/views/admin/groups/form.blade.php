<span style="color: red">
  @error('payment_name')
  {{$message}}
  @enderror
</span>
<div class="form-group">

    <label for="name">{{__('data.Country')}}</label>
    <select class="form-control" name="country">
      @foreach($data['countries'] as $country)
      <option value="{{$country->id}}">{{$country->name}}</option>
      @endforeach
    </select>

    <label for="name">{{__('data.group_name')}}</label>
    <input type="text" class="form-control" name="group_name"  placeholder="group_name" value="">

    <label for="name">{{__('data.Grade')}}</label>
    <select class="form-control" name="grade">
      @foreach($data['grades'] as $grade)
      <option value="{{$grade->id}}">{{$grade->name}}</option>
      @endforeach
    </select>

    <label for="name">{{__('data.Subject')}}</label>
    <select class="form-control" name="subject">
      @foreach($data['subjects'] as $subject)
      <option value="{{$subject->id}}">{{$subject->name}}</option>
      @endforeach
    </select>

    <label for="name">{{__('data.Terms')}}</label>
    <select class="form-control" name="term">
      @foreach($data['terms'] as $term)
      <option value="{{$term->id}}">{{$term->name_en}}</option>
      @endforeach
    </select>

    <label for="name">{{__('data.students_number')}}</label>
    <input type="number" class="form-control" name="students_number"  placeholder="students_number" value="">

    <label for="name">{{__('data.group_description')}}</label>
    <textarea name="group_description" class="form-control" placeholder="group_description"></textarea>

    <label for="name">{{__('data.group_image')}}</label>
    <input type="file" class="form-control" name="group_image"  placeholder="group_image" value="">

    <label for="name">{{__('data.approve_join_group_requests')}}</label>
    <input type="radio" class="form-control" name="approve_join_group_requests" value="true">

    <label for="name">{{__('data.publish_the_group')}} <div>{{__('data.It_will_appear_to_the_target_directly')}}</div></label>
    <input type="radio" class="form-control" name="publish_group" value="true">

    <input type="hidden" class="form-control" name="created_by"  placeholder="Name" value={{$data['user']->id}}>
 


  </div>


  <button type="submit" class="btn btn-primary mr-2">Submit</button>