<template>
  <form action="" method="post" @submit.prevent="setPermissions()">
    <div class="form-group">
      <label for="permissions">Permissions</label>
      <table v-if="permissions.length > 0">
        <tr v-for="permission in permissions" :key="permission.id">
          <td>
            <input
                type="checkbox"
                name="permissions[]"
                :checked="(PermissionsArr.indexOf(permission.name) != -1)?'checked':''"
                :value="permission.name"
                @change="setChecked($event)"
            />
          </td>
          <td>
            {{permission.name}}
          </td>
        </tr>
      </table>
    <span v-else> No Roles now</span>
    </div>
    <button type="submit" class="btn btn-primary mr-2">Submit</button>
  </form>
</template>
<script>

export default {
    props:[
        'id',
    ],
    data(){
        return{
            permissions:{},
            PermissionsArr:[],
            checkedPermissions:[]
        }
    },
    created(){
        this.getPermissions()
        this.getPermissionsArr()
    },
    methods:{
        getPermissions(){
            axios.get(`/getPermissions`).then((res) => {
                this.permissions = res.data
            })
        },
        getPermissionsArr(){
            axios.get(`/getPermissionsArr/${this.id}`).then((res) => {
                this.PermissionsArr = res.data
                console.log(res.data)
            })
        },
        setPermissions(){
            console.log(this.permissions)
            axios.post(`/roles/${this.id}/setPermissions`, this.permissions)
            .then((res) => {
                console.log(res.data)
            })
        },
        setChecked(e){
            if(e.target.checked == true){
                if(this.checkedPermissions.length > 0){
                    this.checkedPermissions.filter((item) => {
                        console.log(item)
                        if(item != e.target.value){
                            this.checkedPermissions.push(e.target.value)
                        }
                    })
                }else{
                    this.checkedPermissions.push(e.target.value)
                }
            }
            console.log(e.target.value)
            console.log(this.checkedPermissions)
            console.log(this.checkedPermissions.length)
        }
    },
}
</script>
