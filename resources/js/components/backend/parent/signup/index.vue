<template>
    <div class="sign-up">
        <div class="card">
            <div class="card-body">
                <p class="card-title">
                    {{$trans('data.Parent Register')}}
                </p>
                <div class="row form-group">
                    <div class="col-md-6">
                        <label>{{$trans('data.Name')}}</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="mdi mdi-account"></i>
                                </div>
                            </div>
                            <input
                                type="text"
                                class="form-control"
                                id="inlineFormInputGroupUsername2"
                                :placeholder="$trans('data.Name')"
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>{{$trans('data.Email')}}</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="mdi mdi-email-variant"></i>
                                </div>
                            </div>
                            <input
                                type="email"
                                class="form-control"
                                id="inlineFormInputGroupUsername2"
                                :placeholder="$trans('data.Email')"
                            />
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-6">
                        <label>{{$trans('data.Password')}}</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="mdi mdi-lock-open"></i>
                                </div>
                            </div>
                            <input
                                type="password"
                                class="form-control"
                                id="inlineFormInputGroupUsername2"
                                :placeholder="$trans('data.Password')"
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>{{$trans('data.Confirm Password')}}</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="mdi mdi-lock-open"></i> 
                                </div>
                            </div>
                            <input
                                type="password"
                                class="form-control"
                                id="inlineFormInputGroupUsername2"
                                :placeholder="$trans('data.Confirm Password')"
                            />
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label>{{$trans('data.Gender')}}</label>
                        <div>
                            <select
                                class="form-control"
                                id="exampleSelectGender"
                            >
                                <option>{{$trans('data.Male')}}</option>
                                <option>{{$trans('data.Female')}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>{{$trans('data.Country')}}</label>
                        <div>
                            <select
                                class="form-control"
                                id="exampleSelectCountry"
                            >
                                <option>{{$trans('data.Egypt')}}</option>
                                <option>{{$trans('data.Saudi Arabia')}}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="examplePhone">{{$trans('data.School Type')}}</label>
                    <select class="form-control" id="exampleSelectEducation">
                        <option>{{$trans('data.Public')}}</option>
                        <option>{{$trans('data.Private')}}</option>
                    </select>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">
                        <label>{{$trans('data.City')}}</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="mdi mdi-city"></i>
                                </div>
                            </div>
                            <input
                                type="text"
                                class="form-control"
                                id="inlineFormInputGroupUsername2"
                                :placeholder="$trans('data.City')"
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>{{$trans('data.School')}}</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="mdi mdi-school"></i>
                                </div>
                            </div>
                            <input
                                type="email"
                                class="form-control"
                                id="inlineFormInputGroupUsername2"
                                :placeholder="$trans('data.School')"
                            />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="examplePhone">{{$trans('data.Phone')}}</label>
                    <input
                        type="number"
                        class="form-control"
                        id="examplePhone"
                        :placeholder="$trans('data.Phone')"
                    />
                </div>

               

                <button type="submit" class="btn btn-primary mr-2">
                    {{$trans('data.Submit')}}
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["storage_path", "locale_lang"],
    data() {
        return {};
    },
    created() {},
    mounted() {
        if (this.locale_lang) {
            this.$lang.setLocale(this.locale_lang);
        } else {
            this.$lang.setLocale("en");
        }
    },
    methods: {}
};
</script>
