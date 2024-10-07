<template>
   <div class="exam_result">
      <div class="panel panel-custom">
         <div class="panel-heading">
            <h1>{{ca_exam_name}} Result of</h1>
         </div>
         <div class="panel-body">
            <div class="absolute_container">
            <h3> Result for {{firstname}} {{lastname}} </h3>
            <ul class="library-statistic">
               <li class="total-books">
                 <span class="result_label"> Result: </span> <span class="result_input"> {{result}}/{{examresult}} </span>
               </li>
               <li class="total-journals">
                 <span class="result_label"> Percentage: </span> <span class="result_input"> {{persentage}} % </span>
               </li>
               <li class="digital-items">
                 <span class="result_label"> Status: </span> <span class="result_input"> {{status}} </span>
               </li>
            </ul>
            </div>
         </div>
      </div>
   </div>
</template>

<script>
import axios from "axios";

export default {
   props:[
      'exam_id',
       'result',
       'examresult',
       'persentage',
       'status',
       'firstname',
       'lastname',
       'ca_exam_name'
   ],
  data(){
     return {
      trans:[],
        translationEn:[
        'Result for',
        'Result',
        'Result of',
        'Percentage',
        'Status'
      ],
     };
  },
  created() {
    this.translate();
  },
  methods:{
    translate(){
      axios.post(`/translate`, this.translationEn).then((res)=>{
        this.trans = res.data;
      });
    },
    _:function(word){
      try {
        return this.trans[word];
      } catch (error) {
        return 'data.'+word;
      }
    }
  }
}
</script>

