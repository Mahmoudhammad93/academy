<template>
      <div class="playlist-top">
         <div class="playlist-buttons">
            <button type="button" class="btn btn-info">Explanation</button>
            <button type="button" class="btn btn-light">Exercises</button>
            <button type="button" class="btn btn-primary">Homework</button>
         </div>
      </div>
</template>
<script>
   export default {
        props:[

       ],
        data(){
         return{


         }
     },
        created(){

        },
     mounted(){
         if (this.locale_lang) {
               this.$lang.setLocale(this.locale_lang);
           } else {
               this.$lang.setLocale('en');
           }
     },
        methods: {


     },
   }
</script>

