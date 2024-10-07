<template>
   <div class="library">
      <div class="digital-library-form">
         <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{$trans('data.Add Video')}}</h4>
               <form class="forms-sample cmxform" id="signupForm" method="post" @submit.prevent="addRole()">
                  <fieldset>
                     <div class="row">
                         <div class="form-group col-lg-12 col-sm-12">
                           <label  style="display:block">{{$trans('data.Video Title')}}</label>
                           <input class="form-control" type="text" >
                        </div>
                        <div class="form-group col-lg-12 col-sm-12">
                           <label  style="display:block">{{$trans('data.Subject')}}</label>
                           <select class="form-control">
                              <option >{{$trans('data.Subject')}} 1</option>
                              <option >{{$trans('data.Subject')}} 2</option>
                           </select>
                        </div>
                        <div class="form-group col-lg-12 col-sm-12">
                           <label  style="display:block">{{$trans('data.Video Type')}}</label>
                           <select name="role" class="form-control" >
                              <option>{{$trans('data.YouTube Video')}}</option>
                              <option>{{$trans('data.Video from Link')}}</option>
                           </select>
                        </div>
                        <div class="form-group col-lg-12 col-sm-12">
                           <label style="display:block">{{$trans('data.Video Link')}}</label>
                           <input class="form-control" type="text" >
                        </div>
                        <div class="form-group col-lg-12 col-sm-12">
                           <label style="display:block">{{$trans('data.Notes')}}</label>
                           <textarea class="form-control" ></textarea>
                        </div>
                        <div class="form-group col-lg-12 col-sm-12">
                           <input type="submit" class="btn btn-primary btn-block mr-2" :value="$trans('data.Submit')"/>
                        </div>
                     </div>
                  </fieldset>
               </form>
            </div>
         </div>
      </div>
   </div>
</template>
<script>
   export default {
        props:['storage_path'],
        data(){
         return{


         }
     },
        created(){

        },
     mounted(){
         this.$lang.setLocale(localStorage.getItem('locale'));
     },
        methods: {


     },
   }
</script>
