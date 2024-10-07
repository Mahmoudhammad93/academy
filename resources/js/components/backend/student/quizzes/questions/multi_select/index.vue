<template>
    <div class="multi_select">
        <div class="">
        <h3 class="question_type_title">{{$trans('data.Multi Select')}}</h3>
        <p class="instructions text-secondary">{{$trans('data.Choose all the correct answers')}}:</p>
        <div class="hold-qus">
        <div class="question text-info"><h4>{{ question_prop.question }}</h4></div>
        <div class="answers">


                <div class="answers_section">
                    <div v-for="option in question_prop.options">
                        <input type="checkbox" :id="option.id" :name="option.id+'[]'" :value="option.id">
                        <label :for="option.id">{{option.option}}</label>
                    </div>
                </div>
                </div>
        </div>
        </div>
    </div>
</template>

<script>
export default {
    props:[
        'question_prop',
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
