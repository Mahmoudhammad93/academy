<template>
  <div class="panel panel-right-sidebar ">
    <div class="panel-heading">
      <div class="heading-info">
        <quizzes_user_info></quizzes_user_info>
        <hr />
        <quizzes_timer :quiz="quiz" :question="question" :timer="timer"></quizzes_timer>
      </div>
    </div>
    <quizzes_questions_actions :quiz="quiz" :quiz_name="quiz_name" :quiz_length="quiz_length" :question="question"></quizzes_questions_actions>
  </div>
</template>

<script>
export default {
  props:['question','timer','quiz_length','quiz_name', 'quiz']
}
</script>
