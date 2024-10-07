<div class="tab-content">
    <div class="tab-pane fade show active" id="home-1" role="tabpanel" aria-labelledby="home-tab">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name"
                value="{{ old('name') }}">
            <span style="color: red">
                @error('name')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            @if (!isset($user))
                <select name="gender" class="form-control">
                    <option disabled selected>@lang('data.Select Gender')</option>
                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>@lang('data.Male')</option>
                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>@lang('data.Female')</option>
                </select>
            @else
                <select name="gender" class="form-control">
                    <option disabled selected>@lang('data.Select Gender')</option>
                    <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>@lang('data.Male')</option>
                    <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>@lang('data.Female')</option>
                </select>
            @endif
            <span style="color: red">
                @error('gender')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" placeholder="Phone"
                value="{{ !isset($user) ? old('phone') : $user->phone }}">
            <span style="color: red">
                @error('phone')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="country">Country</label>
            <select name="country" class="form-control">
                <option disabled selected>-- select Country --</option>
                @foreach ($countries as $country)
                    @if (!isset($user))
                        <option value="{{ $country }}" {{ old('country') == $country ? 'selected' : '' }}>
                            {{ $country }}</option>
                    @else
                        <option value="{{ $country }}" {{ $user->country == $country ? 'selected' : '' }}>
                            {{ $country }}</option>
                    @endif
                @endforeach
            </select>
            <span style="color: red">
                @error('country')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" name="city" placeholder="City"
                value="{{ !isset($user) ? old('city') : $user->city }}">
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" name="address" placeholder="Address"
                value="{{ !isset($user) ? old('address') : $user->address }}">
        </div>

        <div class="form-group">
            <label for="about">About User</label>
            <textarea name="about" class="form-control" cols="30"
                rows="10">{{ !isset($user) ? old('about') : $user->about }}</textarea>
        </div>
    </div>
    <div class="tab-pane fade" id="profile-1" role="tabpanel" aria-labelledby="profile-tab">
      @if (!isset($user))
          <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                  value="{{ old('email') }}">
              <span style="color: red">
                  @error('email')
                      {{ $message }}
                  @enderror
              </span>
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                  placeholder="Password">
              <span style="color: red">
                  @error('password')
                      {{ $message }}
                  @enderror
              </span>
          </div>
      @endif
    </div>
    <div class="tab-pane fade" id="contact-1" role="tabpanel" aria-labelledby="contact-tab">
        <div class="form-group">
            <label for="school">School</label>
            <input type="text" class="form-control" name="school" placeholder="School"
                value="{{ !isset($user) ? old('school') : $user->school }}">
        </div>
    </div>
    <button type="submit" class="btn btn-primary mr-2">Submit</button>
</div>
