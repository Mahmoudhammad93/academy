<template>
    <div class="col-md-12 grid-margin stretch-card mt-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{$trans('data.Add informations for user')}}</h4>
                <ul class="nav nav-tabs p-0" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="personal" data-toggle="tab" href="#home-1" role="tab"
                            aria-controls="home-1" aria-selected="true">{{$trans('data.Personal')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="account" data-toggle="tab" href="#profile-1" role="tab"
                            aria-controls="profile-1" aria-selected="false">{{$trans('data.Account')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="education" data-toggle="tab" href="#contact-1" role="tab"
                            aria-controls="contact-1" aria-selected="false">{{$trans('data.Education')}}</a>
                    </li>
                </ul>
                <form class="forms-sample cmxform" id="signupForm" action="" method="POST" @submit.prevent="submitForm(user)">
                    <fieldset>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="home-1" role="tabpanel" aria-labelledby="home-tab">
                                <div class="form-group">
                                    <label for="name">{{$trans('data.Name')}}</label>
                                    <input type="text" class="form-control" name="name" id="name" :placeholder="$trans('data.Name')"
                                        v-model="user.name">
                                </div>
                                <div class="form-group">
                                    <label for="gender">{{$trans('data.Gender')}}</label>
                                    <select name="gender" class="form-control" v-model="user.gender">
                                        <option disabled selected>-- {{$trans('data.select Gender')}} --</option>
                                        <option value="male">{{$trans('data.Genders.Male')}}</option>
                                        <option value="female">{{$trans('data.Genders.Female')}}</option>
                                    </select>
                                    <!-- <span style="color: red">
                                        @error('gender')
                                            {{ $message }}
                                        @enderror
                                    </span> -->
                                </div>
                                <div class="form-group">
                                    <label for="phone">{{$trans('data.Phone')}}</label>
                                    <input type="text" class="form-control" name="phone" :placeholder="$trans('data.Phone')"
                                        v-model="user.phone">
                                    <!-- <span style="color: red">
                                        @error('phone')
                                            {{ $message }}
                                        @enderror
                                    </span> -->
                                </div>
                                <div class="form-group">
                                    <label for="country">{{$trans('data.Country')}}</label>
                                    <select name="country" class="form-control" v-model="user.country">
                                        <option disabled selected>-- {{$trans('data.select Country')}} --</option>
                                        <option v-for="country in JSON.parse(countries)" :value="country" :key="country">{{country}}</option>
                                    </select>
                                    <!-- <span style="color: red">
                                            {{ $message }}
                                        @enderror
                                    </span> -->
                                </div>

                                <div class="form-group">
                                    <label for="city">{{$trans('data.City')}}</label>
                                    <input type="text" class="form-control" name="city" :placeholder="$trans('data.City')" v-model="user.city">
                                </div>

                                <div class="form-group">
                                    <label for="address">{{$trans('data.Address')}}</label>
                                    <input type="text" class="form-control" name="address" :placeholder="$trans('data.Address')" v-model="user.address">
                                </div>

                                <div class="form-group">
                                    <label for="about">{{$trans('data.About User')}}</label>
                                    <textarea name="about" class="form-control" cols="30" rows="10" v-model="user.about"></textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile-1" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="form-group">
                                    <label for="account_type">{{$trans('data.Account Type')}}</label>
                                    <select class="form-control form-control-sm" name="account_type" id="account_type" v-model="user.account_type">
                                        <option value="super_admin">Super Admin</option>
                                        <option value="admin">Admin</option>
                                        <option value="student">Student</option>
                                        <option value="teacher">Teacher</option>
                                        <option value="parent">Parent</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="email">{{$trans('data.Email Address')}}</label>
                                    <input type="email" class="form-control" name="email" id="email" :placeholder="$trans('data.Email Address')" v-model="user.email">
                                    <!-- <span style="color: red">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span> -->
                                </div>
                                <div class="form-group">
                                    <label for="password">{{$trans('data.Register.Password')}}</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        :placeholder="$trans('data.Register.Password')" v-model="user.password">
                                    <!-- <span style="color: red">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span> -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact-1" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="form-group">
                                    <label for="school">{{$trans('data.School')}}</label>
                                    <input type="text" class="form-control" name="school" :placeholder="$trans('data.School')" v-model="user.school">
                                </div>
                            </div>

                            <input type="submit" class="btn btn-primary mr-2" :value="$trans('data.Submit')" />
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    props:[
        'countries',
        'locale_lang'
    ],
    data(){
        return{
            user:{},
            errors:{}
        }
    },
    mounted(){
    },
    created(){
        if (this.locale_lang) {
            this.$lang.setLocale(this.locale_lang);
        } else {
            this.$lang.setLocale('en');
        }
    },
    methods:{
        submitForm(obj){
            axios.post(`/users/store`,obj)
            .then((res) => {
                Vue.$toast.success('Profile saved.', {
                    position: 'top-right'
                })
                window.location.href = '/users'
            }).catch((err) => {
                Vue.$toast.error('Complete User Informations '+err, {
                    position: 'top-right'
                })
            })
        }
    },

}
</script>
