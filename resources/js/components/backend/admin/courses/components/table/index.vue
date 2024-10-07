<template>
<div class="table-responsive courses">
  <table class="table table-bordered data-table courses-table">
    <thead>
      <tr>
        <th>{{$trans('data.No')}}</th>
        <th>{{$trans('data.Name')}}</th>
        <th>{{$trans('data.Name in Arabic')}}</th>
        <th>{{$trans('data.Timetable')}}</th>
        <th>{{$trans('data.Activities')}}</th>
        <th>{{$trans('data.Curriculums')}}</th>
        <th>{{$trans('data.Banks')}}</th>
        <th>{{$trans('data.Action')}}</th>

      </tr>
    </thead>
    <tbody></tbody>
  </table>
</div>
</template>

<script>
export default {
    props:[
        'module_name',
        'locale_lang'
    ],
    mounted(){
        if (this.locale_lang) {
            this.$lang.setLocale(this.locale_lang);
        } else {
            this.$lang.setLocale('en');
        }
    }
}
</script>


