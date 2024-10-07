<template>
   <div class="library">
      <div class="view-digital-library">
         <div class="card">
            <div class="card-body">

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
