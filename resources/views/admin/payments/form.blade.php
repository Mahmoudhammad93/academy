<span style="color: red">
  @error('payment_name')
  {{$message}}
  @enderror
</span>
<div class="form-group">

    <label for="name">@lang('data.Name')</label>
    <input type="text" class="form-control" name="payment_name"  placeholder="Name" value="{{(!isset($payment)) ? old('payment_name') : $payment->payment_name}}">

  </div>

<div class="form-group">

    <input type="hidden" class="form-control" name="metadata"  placeholder="Name in Arabic" value="{{(!isset($payment)) ? old('metadata') : $payment->name_ar}}">
    <span style="color: red">
        @error('metadata')
        {{$message}}
        @enderror
    </span>
  </div>

  <button type="submit" class="btn btn-primary mr-2">@lang('data.Submit')</button>
