<template>
    <div class="col-md-12 grid-margin stretch-card mt-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"></h4>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="personal" data-toggle="tab" href="#home-1" role="tab"
                            aria-controls="home-1" aria-selected="true">Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="account" data-toggle="tab" href="#profile-1" role="tab"
                            aria-controls="profile-1" aria-selected="false">Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="education" data-toggle="tab" href="#contact-1" role="tab"
                            aria-controls="contact-1" aria-selected="false">Education</a>
                    </li>
                </ul>
                <form class="forms-sample" action="" method="POST">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="home-1" role="tabpanel" aria-labelledby="home-tab">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name"
                                    v-model="user.name">
                                <!-- <span style="color: red">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span> -->
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select name="gender" class="form-control" v-model="user.gender">
                                    <option disabled selected>-- select Gender--</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <!-- <span style="color: red">
                                    @error('gender')
                                        {{ $message }}
                                    @enderror
                                </span> -->
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone" placeholder="Phone"
                                    v-model="user.phone">
                                <!-- <span style="color: red">
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </span> -->
                            </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <select name="country" class="form-control" v-model="user.country">
                                    <option disabled selected>-- select Country --</option>
                                    <option v-for="country in JSON.parse(countries)" :value="country" :key="country">{{country}}</option>
                                </select>
                                <!-- <span style="color: red">
                                    @error('country')
                                        {{ $message }}
                                    @enderror
                                </span> -->
                            </div>

                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" name="city" placeholder="City" v-model="user.city">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" placeholder="Address" v-model="user.address">
                            </div>

                            <div class="form-group">
                                <label for="about">About User</label>
                                <textarea name="about" class="form-control" cols="30" rows="10" v-model="user.about"></textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile-1" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" v-model="user.email">
                                <!-- <span style="color: red">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span> -->
                            </div>
                            <div class="form-group" v-if="!user">
                                <label for="password">Password</label>
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
                                <label for="school">School</label>
                                <input type="text" class="form-control" name="school" placeholder="School" v-model="user.school">
                            </div>
                        </div>

                        <button class="btn btn-primary mr-2" @click.prevent="submitForm(user)">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:[
        'countries',
        'user_data'
    ],
    data(){
        return{
            user:{}
        }
    },
    created(){
        this.user = JSON.parse(this.user_data)
        console.log(this.user)
    },
    methods:{
        submitForm(obj){
            axios.post(`/users/${obj.id}/update`,obj).then((res) => {
                console.log(res.data)
                Vue.$toast.success('Profile saved.', {
                    heading: 'Success',
                    text: 'And these were just the basic demos! Scroll down to check further details on how to customize the output.',
                    showHideTransition: 'slide',
                    icon: 'success',
                    loaderBg: '#f96868',
                    position: 'top-right'
                })
            })
        }
    }
}
</script>
