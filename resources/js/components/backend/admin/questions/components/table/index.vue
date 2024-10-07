<template>
  <div class="table-responsive">
    <table class="table table-bordered data-table">
      <thead>
        <tr>
          <th>{{$trans('#')}}</th>
          <th>{{$trans('data.Title')}}</th>
          <th>{{$trans('data.Answer')}}</th>
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


