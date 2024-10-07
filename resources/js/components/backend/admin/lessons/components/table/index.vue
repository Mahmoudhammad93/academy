<template>
<div class="table-responsive mt-4">
  test
  <table class="table table-bordered data-table">
    <thead>
      <tr>
        <th>{{$trans('data.Name')}}</th>
        <th>{{$trans('data.Name')}}</th>
        <th>{{$trans('data.Description')}}</th>
        <th>{{$trans('data.Type')}}</th>
        <th>{{$trans('data.Path')}}</th>
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
