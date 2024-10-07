<template>
  <div id="questions" class="main-questions">
      <div class="form-group">
          <label for="question_type">{{$trans('data.Question Type')}}</label>
    <select name="question_type" v-model="question_type" class="form-control">
      <option v-for="option in options" v-model="question_type" :value="option">
        {{ $trans(`data.${option}`) }}
      </option>
    </select>
      </div>
    <!-- choice -->
    <choice
      :bank_id="bank_id"
      :course_id="course_id"
      :curriculums="curriculums"
      v-if="question_type == 'choice'"
    ></choice>
    <!-- end choice -->
    <!-- truefalse -->
    <truefalse
      :bank_id="bank_id"
      :course_id="course_id"
      :curriculums="curriculums"
      v-if="question_type == 'truefalse'"
    ></truefalse>
    <!-- end truefalse -->

  </div>
</template>

<script>
export default {
    props: [
        "bank_id",
        "course_id",
    ],
    data(){
        return {
            curriculums: [],
            options:["choice", "truefalse"],
            question_type: "choice"
        }
    },
    methods: {

    },
    created(){
        axios.get(`/api/courses/${this.course_id}/curriculums`).then((res)=>{
            this.curriculums = res.data;
        })

    },
    mounted(){
            this.$lang.setLocale(localStorage["locale"]);
    }

}
</script>
