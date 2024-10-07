<template>
   <div id="quiz-zes">
   <form method="post">
  <div class="form-group">
      <div class="row main">
         <div class="col-md-9 quiz-bar">
            <div class="card">
               <div class="card-header p-4">
                  <div class="row col-sm-12">
                     <div class="col-md-6 title">
                        <h4 class="card-title">{{quiz.quiz_name}}</h4>
                     </div>
                     <div class="col-md-6 date">
                        <h4 class="card-title">{{new Date().getDate()}} - {{new Date().getMonth() + 1}} - {{new Date().getFullYear()}} </h4>
                     </div>
                  </div>
               </div>
               <div class="card-body">
                  <div class="row quiz-info">
                     <div class="col-lg-9">
                        <div class="alert alert-info">
                           <div><span> 3 </span><span>{{$trans('data.Questions in exam')}}</span> </div><div><span>{{$trans('data.Questions answered')}}</span><span class="question-count total_answered"> 0 </span></div>
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="flag-details">
                           <span class="positive btn btn-primary btn-block" style="cursor: pointer;" id="show-cal" onclick="showCal()">
                           <i class="fa fa-calculator" style="margin-right: 6px;padding: 4px 0;"></i>
                           {{$trans('data.Calculator')}}
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="row" style="min-height: calc(100% - 28px);">
                     <div class="col-md-12">
                        <div class="panel panel-custom" style="height:100%;">
                           <div class="panel-heading">
                              <h1>
                                 {{$trans('data.Question')}}
                                 <span id="question_index">
                                 1
                                 </span>
                                 {{$trans('data.Of')}} 3
                              </h1>
                           </div>
                           <div class="panel-body question-ans-box">
                              <div class="list-questions list-get questions" id="questions_list">
                                 <div :data="index+1" class="question_div" v-for="(question, index) in quiz.questions">
                                   <div class="marks">
                                     <span class="pull-right">{{question.mark}} </span>
                                     <span>{{$trans('data.Marks')}}</span>
                                     <div class="option-hints pull-right default ng-hide" data-placement="left" data-toggle="tooltip" ng-show="hints" title="" data-original-title="">
                                       <i class="mdi mdi-help-circle"></i>
                                     </div>
                                   </div>
                                    <questions_types_single :question_prop="question"  :question_title="quiz.questions.question" :quiz="question" v-if="question.type=='single'"></questions_types_single>
                                    <questions_types_multi :question_prop="question" :question_title="quiz.questions.question" :quiz="question" v-if="question.type=='multi'"></questions_types_multi>
                                    <questions_types_true :question_prop="question" :question_title="quiz.questions.question" :quiz="question" v-if="question.type=='truefalse'"></questions_types_true>
                                 </div>
                              </div>
                              <div class="qus-footer">
                              <hr class="hr-footer-wr">
                              <div class="row btns">
                                 <div class="col-md-12 text-left">
                                    <button class="btn btn-lg btn-info button prev" type="button">
                                    <i class="mdi mdi-chevron-left "></i>
                                   {{$trans('data.Previous')}}
                                    </button>
                                    <button class="btn btn-lg btn-secondary button next" id="markbtn" type="button" onclick="doGeneralOperations()">
                                        {{$trans('data.Mark for review')}} &amp; {{$trans('data.Next')}}
                                    </button>
                                    <button  class="btn btn-lg btn-info button next" type="button">
                                    {{$trans('data.Next')}}
                                    <i class="mdi mdi-chevron-right"></i>
                                    </button>
                                    <button class="btn btn-lg btn-light button clear-answer" type="button" onclick="clearAnswer()">
                                    {{$trans('data.Clear answer')}}
                                    </button>
                                 </div>
                              </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 side-bar">
             <div class="side-bar-inner">
            <quizzes_side_menu  :question_id="quiz.questions.id" :quiz_name="quiz.quiz_name" :quiz_length="quiz.questions.length"  :question="quiz.questions" :timer="quiz.duration"></quizzes_side_menu>
         </div>
         </div>
      </div>
  </div>

  <input style="display: none;" type="submit" id="end_exam" >
   </form>
   </div>
</template>

<script>
export default {
     props:[
       'locale_lang'
    ],
  data() {
    return {
        quiz: {
            id: 1,
            quiz_name: "zero",
            duration: 60,
            questions: [
                {id: "1", question: "question 1", mark:5, options:[{id: "1", option: "option1"}, {id: "2", option: "option2"}, {id: "3", option: "option3"}, {id: "4", option: "option4"}], answer:["option2", "option4"], type:"multi"},
                {id: "2",question: "question 2", mark:10, options:[{id: "1", option: "option1"}, {id: "2", option: "option2"}, {id: "3", option: "option3"}, {id: "4", option: "option4"}], answer:"option1", type:"single"},
                {id:"3",question: "question 3", mark:15, options:[{id: "1", option: "true"}, {id: "2", option: "false"}], answer:"true", type:"truefalse"},
            ]

        }

    };
  },
  methods: {

  },
  created(){

  },
  mounted(){
      if (this.locale_lang) {
            this.$lang.setLocale(this.locale_lang);
        } else {
            this.$lang.setLocale('en');
        }
  }
}
</script>
