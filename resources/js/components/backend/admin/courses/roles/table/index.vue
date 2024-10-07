<template>
    <table class="table table-bordered data-table">
        <thead>
            <th>{{$trans('data.No')}}</th>
            <th>{{$trans('data.Name')}}</th>
            <th>{{$trans('data.Role')}}</th>
            <th>{{$trans('data.Status')}}</th>
            <th>{{$trans('data.Action')}}</th>
        </thead>
        <tbody>

        </tbody>
    </table>
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
