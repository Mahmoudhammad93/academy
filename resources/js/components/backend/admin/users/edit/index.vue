<template>
    <div id="profile" style="width:80%; margin:auto;">
        <div class="row">
            <div class="col-md-3">
                <div class="setting-menu">
                    <h3 class="head pb-4">System Settings</h3>
                    <ul class="list-unstyled p-0">
                        <li
                        @click="settingTabs('general')"
                        :class="active == 'general' ? 'active' : ''"
                        >
                        User Info
                        </li>
                        <li
                        @click="settingTabs('home page')"
                        :class="active == 'home page' ? 'active' : ''"
                        >
                        Home Page
                        </li>
                        <li
                        @click="settingTabs('permissions')"
                        :class="active == 'permissions' ? 'active' : ''"
                        >
                        Permissions
                        </li>
                        <li
                        @click="settingTabs('activate')"
                        :class="active == 'activate' ? 'active' : ''"
                        >
                        Activate
                        </li>
                        <li
                        @click="settingTabs('help')"
                        :class="active == 'help' ? 'active' : ''"
                        >
                        Help
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"></h4>
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
                        <form  class="forms-sample cmxform" id="signupForm" action="" method="POST" @submit.prevent="submitForm(user)">
                            <fieldset>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="home-1" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="form-group">
                                        <label for="name">{{$trans('data.Name')}}</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name"
                                            v-model="user.name">
                                    </div>
                                    <div class="form-group">
                                        <label for="gender">{{$trans('data.Gender')}}</label>
                                        <select name="gender" class="form-control" v-model="user.gender">
                                            <option disabled selected>-- {{$trans('data.select Gender')}} --</option>
                                            <option value="male">{{$trans('data.Male')}}</option>
                                            <option value="female">{{$trans('data.Female')}}</option>
                                        </select>
                                        <!-- <span style="color: red">
                                            @error('gender')
                                                {{ $message }}
                                            @enderror
                                        </span> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">{{$trans('data.Phone')}}</label>
                                        <input type="text" class="form-control" name="phone" placeholder="Phone"
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
                                            @error('country')
                                                {{ $message }}
                                            @enderror
                                        </span> -->
                                    </div>

                                    <div class="form-group">
                                        <label for="city">{{$trans('data.City')}}</label>
                                        <input type="text" class="form-control" name="city" placeholder="City" v-model="user.city">
                                    </div>

                                    <div class="form-group">
                                        <label for="address">{{$trans('data.Address')}}</label>
                                        <input type="text" class="form-control" name="address" placeholder="Address" v-model="user.address">
                                    </div>

                                    <div class="form-group">
                                        <label for="about">{{$trans('data.About User')}}</label>
                                        <textarea name="about" class="form-control" cols="30" rows="10" v-model="user.about"></textarea>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile-1" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="form-group">
                                        <label for="email">{{$trans('data.Email Address')}}</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" v-model="user.email">
                                        <!-- <span style="color: red">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span> -->
                                    </div>
                                    <div class="form-group" v-if="!user">
                                        <label for="password">{{$trans('data.Password')}}</label>
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="Password" v-model="user.password">
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
                                        <input type="text" class="form-control" name="school" placeholder="School" v-model="user.school">
                                    </div>
                                        <div class="form-group">
                                    <label for="school">{{$trans('data.Grade')}}</label>
                                        <input type="text" class="form-control" name="grade_name" placeholder="Grade Name" v-model="edu_data.grade_name" disabled>
                                    </div>
                                    <div class="form-group">
                                    <label for="school">{{$trans('data.Grade')}}</label>
                                        <input type="text" class="form-control" name="level_name" placeholder="level_name" v-model="edu_data.level_name" disabled>
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-primary mr-2" onclick="showSuccessToast()" :value="$trans('data.Submit')"/>
                            </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:[
        'countries',
        'user_data',
        'locale_lang'
    ],
    data(){
        return{
            user:{},
            edu_data: {},
            active: 'general'
        }
    },
    mounted(){
        if (this.locale_lang) {
            this.$lang.setLocale(this.locale_lang);
        } else {
            this.$lang.setLocale('en');
        }
    },
    created(){
        this.user = JSON.parse(this.user_data)
        this.educational_data(this.user)
        console.log(this.user)
    },
    methods:{
        submitForm(obj){
                console.log(obj)
            axios.post(`/users/${obj.id}/update`,obj).then((res) => {
                Vue.$toast.success('Profile saved.', {
                    heading: 'Success',
                    position: 'bottom-right'
                })
            })
        },
        educational_data: function(obj){
            axios.get(`/users/${obj.id}/educational`).then((res)=>{
               this.edu_data=res.data;

            }).catch((e)=>{

            });
        },
        settingTabs: function (value) {
            this.active = value;
        }
    }
}
</script>
