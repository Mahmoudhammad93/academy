<template>
  <div>
    <div class="panel-body">
      <ul class="question-palette" id="pallete_list">
        <li
          class="palette pallete-elements pallete-elements-item badge pallet_subject_ not-visited"
          v-for="(pallet, index) in question"
          style="display: flex;"
           @click="getQuestion(index)"
           :data="index+1"
           :id="'question_'+(index+1)"
           >
          <span>{{ index+1 }}</span>
        </li>
      </ul>
    </div>
    <hr class="footer-hr" />
    <div class="panel-footer">
      <h2>{{$trans('data.Summary')}}</h2>
     <ul class="legends list-unstyled">
        <li class="palette ">
          <span class="num badge badge-primary"  id="palette_total_not_visited">{{quiz_length}}</span>
          <span class="text">{{$trans('data.Not Visited')}}</span>
        </li>
         <li class="palette  button">
          <span class="num badge badge-danger"  id="palette_total_not_answered">0</span>
          <span class="text">{{$trans('data.Not Answered')}}</span>
        </li>
        <li class="palette ">
          <span class="num total_marked badge badge-warning" id="palette_total_marked">0</span>
          <span class="text">{{$trans('data.Marked')}}</span>
        </li>
        <li class="palette ">
          <span class="num badge badge-success" id="palette_total_answered">0</span>
          <span class="text">{{$trans('data.Answered')}}</span>
        </li>
      </ul>
      <div class="controls">
        <div class="">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <button
              class="btn btn-inverse-success btn-fws button review review-btn myfinish-1"
              type="button"
            >
              <i class="fa fa-eye"></i>
              {{$trans('data.Review Questions')}}
            </button>
          </div>
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <button
              class="btn btn-inverse-info btn-fw button instructions"
              type="button"
              data-toggle="modal"
              data-target="#instructionsModal"
            >
              <i class="fa fa-address-book"></i>
              {{$trans('data.Instructions')}}
            </button>
          </div>
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <button
              class="btn btn-inverse-info btn-fw button help"
              type="button"
              data-toggle="modal"
              data-target="#helpModal"
            >
              <i class="fa fa-info"></i>
              {{$trans('data.Help')}}
            </button>
          </div>
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <a @click="submit" class="btn btn-inverse-danger btn-fw button finish"  type="submit">
              <i class="fa fa-times-circle"></i>
              {{$trans('data.End Exam')}}
            </a>
          </div>
        </div>
      </div>
    </div>
    <quizzes_instructions_popup :quiz_name="quiz_name" :question="question"></quizzes_instructions_popup>
    <quizzes_help_popup></quizzes_help_popup>
  </div>
</template>

<script>
export default {
  props: ["question","answered","quiz_length","quiz_name"],
   data() {
    return {


    };
  },
  mounted() {
     if (this.locale_lang) {
            this.$lang.setLocale(this.locale_lang);
        } else {
            this.$lang.setLocale('en');
        }

  },
  created(){
  },
  methods:{
    getQuestion(e){
      showSpecificQuestion(e)
    },
    submit(){
      $("#end_exam").click();
    }

  }
};
</script>
