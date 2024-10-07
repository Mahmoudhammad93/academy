<template>
    <form class="forms-sample cmxform" id="signupForm" method="post" @submit.prevent="addRole()">
        <fieldset>
            <div class="row">
                <div class="form-group col-lg-6 col-sm-12">
                    <label for="users" style="display:block">{{$trans('data.Users')}}</label>
                    <select class="form-control" name="users_id" id="users" v-model="role.user_id">
                        <option disabled>Assign User</option>
                        <option v-for="user in users" :value="user.id">{{user.name}}</option>
                    </select>
                </div>

                <div class="form-group col-lg-6 col-sm-12">
                    <label for="role" style="display:block">{{$trans('data.Roles')}}</label>
                    <select name="role" class="form-control" id="role" v-model="role.role">
                        <option disabled selected>Assign Role</option>
                        <option v-for="role in roles" :value="role.name">{{role.name}}</option>
                    </select>
                </div>
                <div class="form-group col-lg-6 col-sm-12">
                    <label for="status" style="display:block">{{$trans('data.Status')}}</label>
                    <select name="status" class="form-control" id="status" v-model="role.status">
                        <option disabled selected>Assign Status</option>
                        <option value = 1> Active</option>
                        <option value = 0> In Active</option>
                    </select>
                </div>
                <div class="form-group col-lg-6 col-sm-12 mt-4">
                    <input type="submit" class="btn btn-primary btn-block mr-2" :value="$trans('data.Submit')"/>
                </div>
            </div>
        </fieldset>
    </form>
</template>

<script>
import axios from 'axios'
export default {
    props:[
        'course_id'
    ],
    data(){
        return{
            users:[],
            roles:[],
            role:{}
        }
    },
    created(){
        this.getData()
    },
    methods:{
        getData(){
            axios.get(`/get_data/${this.course_id}`)
            .then((res) => {
                this.users = res.data.users
                this.roles = res.data.roles
            })
        },
        addRole(){
            console.log(this.role)
            axios.post(`/courses/${this.course_id}/role/assign`, this.role)
            .then((res) => {
                Vue.$toast.success('Role saved.', {
                    position: 'top-right'
                })
                location.reload();
            }).catch((err) => {
                Vue.$toast.error('Complete Role Info '+err, {
                    position: 'top-right'
                })
            })
        }
    }
}
</script>
