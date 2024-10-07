<template>
    <div class="assignment-grade">
        <div class="card">
            <div class="card-body">
                <div class="assign-grade">
                    <div class="assignment-title">
                                        <h2 class="ques-assign">Write what you know about vuejs</h2>
                                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <div class="assignment-view">
                                <iframe :src="`${storage_path}/pdf.pdf`" height="500px" width="100%"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="assignment-data">
                                <h2>{{$trans('data.Assignment Data')}}</h2>
                                <div class="assignment-data-detail">
                                    <p><b>{{$trans('data.Course Name')}}: </b>Course One</p>
                                </div>
                                <div class="assignment-data-detail">
                                    <p><b>{{$trans('data.Assignment Name')}}: </b>First One</p>
                                </div>
                                <div class="assignment-data-detail">
                                    <p><b>{{$trans('data.Student Name')}}: </b>Student One</p>
                                </div>
                                <div class="assignment-data-detail">
                                    <p><b>{{$trans('data.Assignment Full Mark')}}: </b>10</p>
                                </div>
                            </div>
                            <hr>
                            <div class="assignment-action">
                                <form class="forms-sample">
                                    <h2>{{$trans('data.Assignment Action')}}</h2>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">{{$trans('data.Assignment Grade')}}</label>
                                    <input type="number" min="0" max="999" class="form-control" id="assignmentGrade" placeholder="Assignment Grade"/>
                                </div>
                                <button type="button" class="btn btn-primary assign-grade">{{$trans('data.Submit')}}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    props:['storage_path', 'locale_lang'],
    data() {
        return {};
    },
    created() {},
    mounted(){
        if (this.locale_lang) {
            this.$lang.setLocale(this.locale_lang);
        } else {
            this.$lang.setLocale('en');
        }
    },
    methods: {},
};
</script>
