<template>
  <div class="table-responsive">
    <table class="table table-bordered data-table">
      <thead>
        <tr>
            <th>{{$trans('#')}}</th>
            <th>{{$trans('data.name_en')}}</th>
            <th>{{$trans('data.name_ar')}}</th>
            <th>{{$trans('data.Lessons')}}</th>
            <th>{{$trans('data.Action')}}</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div>
</template>

<script>
export default {
};
</script>
