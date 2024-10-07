<template>
    <div id="users">
        <div class="row">
            <div class="col-md-12 mb-2">
                <a :href="`${module_name.toLowerCase()}/create`" class="btn btn-success btn-create">
                    <i class="mdi mdi-account-plus"></i> {{$trans('data.Add')}}
                </a>
            </div>

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <terms_table></terms_table>
                    </div>
                </div>
            </div>
        </div>
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
