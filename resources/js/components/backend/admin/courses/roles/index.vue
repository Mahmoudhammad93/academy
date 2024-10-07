<template>
    <div id="course_roles">
        <div class="row">
            <div class="col-lg-12 mt-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$trans('data.Add Enrollment')}}</h4>
                        <course_roles_form :course_id="id"></course_roles_form>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-2 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <course_roles_table></course_roles_table>
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
        'id',
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
