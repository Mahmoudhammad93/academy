/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('lang.js');

window.Vue = require('vue').default;

import VueToast from 'vue-toast-notification';
import 'vue-toast-notification/dist/theme-sugar.css';
import VueLang from '@eli5/vue-lang-js'
// get the data source
import translations from './vue-translations.js';

Vue.use(VueToast);

import Vue from 'vue';
import users from './components/backend/admin/users/index.vue';
// import requests from './components/backend/admin/users/requests/index.vue';
import create_user from './components/backend/admin/users/create/index.vue';
import edit_user from './components/backend/admin/users/edit/index.vue';
import users_table from './components/backend/admin/users/components/table/index.vue';
import subjects from './components/backend/admin/subjects/index.vue';
import payments from './components/backend/admin/payments/index.vue';
import payments_table from './components/backend/admin/payments/components/table/index.vue';
import pages from './components/backend/admin/pages/index.vue';
import pages_table from './components/backend/admin/pages/components/table/index.vue';
import requests from './components/backend/admin/requests/index.vue';
import requests_table from './components/backend/admin/requests/components/table/index.vue';

// import create_subject './components/backend/admin/subjects/create/index.vue';
import edit_subject from './components/backend/admin/subjects/edit/index.vue';
import subjects_table from './components/backend/admin/subjects/components/table/index.vue';
import schools from './components/backend/admin/schools/index.vue';
import edit_school from './components/backend/admin/schools/edit/index.vue';
import schools_table from './components/backend/admin/schools/components/table/index.vue';
import grades from './components/backend/admin/grades/index.vue';
import edit_grade from './components/backend/admin/grades/edit/index.vue';
import grades_table from './components/backend/admin/grades/components/table/index.vue';
import levels from './components/backend/admin/grades/levels/index.vue';
import levels_form from './components/backend/admin/grades/levels/components/form/index.vue';
import levels_table from './components/backend/admin/grades/levels/components/table/index.vue';
import countries from './components/backend/admin/countries/index.vue';
import edit_country from './components/backend/admin/countries/edit/index.vue';
import countries_table from './components/backend/admin/countries/components/table/index.vue';
import settings from './components/backend/admin/settings/index.vue';
import general_setting from './components/backend/admin/settings/general_setting/index.vue';
import user_permissions from './components/backend/admin/settings/permissions/index.vue';
import roles from './components/backend/admin/roles/index.vue';
import roles_table from './components/backend/admin/roles/components/table/index.vue';
import role_permissions from './components/backend/admin/roles/permissions/index.vue';
import terms from './components/backend/admin/terms/index.vue';
import terms_table from './components/backend/admin/terms/components/table/index.vue';
import courses from './components/backend/admin/courses/index.vue';
import courses_table from './components/backend/admin/courses/components/table/index.vue';
import ilo from './components/backend/admin/courses/components/ilo/index.vue';
import course_role from './components/backend/admin/courses/roles/index.vue';
import course_roles_table from './components/backend/admin/courses/roles/table/index.vue';
import course_roles_form from './components/backend/admin/courses/roles/form/index.vue';
import curriculums from './components/backend/admin/curriculums/index.vue';
import curriculums_table from './components/backend/admin/curriculums/components/table/index.vue';
import units from './components/backend/admin/units/index.vue';
import lessons from './components/backend/admin/lessons/index.vue';
import create_lesson from './components/backend/admin/lessons/create/index.vue';
import table_lessons from './components/backend/admin/lessons/components/table/index.vue';
import edit_lessons from './components/backend/admin/lessons/edit/index.vue';
import form_lessons from './components/backend/admin/lessons/components/form/index.vue';
import quizzes from './components/backend/student/quizzes/index.vue';
import quizzes_side_menu from "./components/backend/student/quizzes/side_menu/index.vue";
import quizzes_user_info from "./components/backend/student/quizzes/side_menu/user_info/index.vue";
import quizzes_instructions_popup from "./components/backend/student/quizzes/side_menu/questions_actions/instructions_popup/index.vue";
import quizzes_help_popup from "./components/backend/student/quizzes/side_menu/questions_actions/help_popup/index.vue";
import quizzes_timer from "./components/backend/student/quizzes/side_menu/timer/index.vue";
import quizzes_questions_actions from "./components/backend/student/quizzes/side_menu/questions_actions/index.vue";
import quizzes_questions_types from "./components/backend/student/quizzes/questions/index.vue";
import questions_types_true from "./components/backend/student/quizzes/questions/true_false/index.vue";
import questions_types_single from "./components/backend/student/quizzes/questions/single_select/index.vue";
import questions_types_multi from "./components/backend/student/quizzes/questions/multi_select/index.vue";
import quiz_result from "./components/backend/student/quizzes/quiz_result/index.vue";
import digital_library from './components/backend/student/digital_library/index.vue';
import view_digital_library from './components/backend/student/digital_library/view/index.vue';
import digital_library_form from './components/backend/student/digital_library/form/index.vue';
import playlist from './components/backend/student/playlist/index.vue';
import playlist_buttons from './components/backend/student/playlist/playlist_buttons/index.vue';
import playlist_main from './components/backend/student/playlist/playlist_main/index.vue';
import lessons_list from './components/backend/student/playlist/playlist_main/lessons_list/index.vue';
import media_player from './components/backend/student/playlist/playlist_main/media_player/index.vue';
import playlist_discussion from './components/backend/student/playlist/playlist_discussion/index.vue';
import timetable from './components/backend/admin/timetable/index.vue';
import loader from './components/global/loader/index.vue';
import banks from './components/backend/admin/banks/index.vue';
import banks_table from './components/backend/admin/banks/components/table/index.vue';
import question_form from './components/backend/admin/questions/components/form/index.vue';
import choice from './components/backend/admin/questions/components/choice/index.vue';
import truefalse from './components/backend/admin/questions/components/truefalse/index.vue';
import questions from './components/backend/admin/questions/index.vue';
import question_table from './components/backend/admin/questions/components/table/index.vue';
import student_courses from './components/backend/student/courses/index.vue';
import view_course from './components/backend/student/courses/view/index.vue';
import course_learning from './components/backend/student/courses/view/course_learning/index.vue';
import course_content from './components/backend/student/courses/view/course_content/index.vue';
import course_units from './components/backend/student/courses/view/course_content/units/index.vue';
import course_teachers from './components/backend/student/courses/view/course_teachers/index.vue';
import comments from './components/backend/student/courses/view/comments/index.vue';
import comment from './components/backend/student/courses/view/comments/comment/index.vue';
import comment_form from './components/backend/student/courses/view/comments/comment/comment_form/index.vue';
import replies from './components/backend/student/courses/view/comments/comment/replies/index.vue';
import replay_form from './components/backend/student/courses/view/comments/comment/replies/replay_form/index.vue';
import activities from './components/backend/student/courses/view/activities/index.vue';
import online_teaching from './components/backend/student/courses/view/online_teaching/index.vue';
import empty from './components/global/empty/index.vue';
import units_table from './components/backend/admin/units/components/table/index.vue';
import assignment_grade from './components/backend/teacher/assignments/grade/index.vue';
import quiz_grade from './components/backend/teacher/quiz_grade/index.vue';
import parent_signup from './components/backend/parent/signup/index.vue';
import student_signup from './components/backend/student/signup/index.vue';
import teacher_signup from './components/backend/teacher/signup/index.vue';



Vue.component('users', users);
// Vue.component('requests', requests);
Vue.component('create_user', create_user);
Vue.component('edit_user', edit_user);
Vue.component('users_table', users_table);
Vue.component('subjects', subjects);
Vue.component('payments', payments);
Vue.component('pages', pages);
Vue.component('pages_table', pages_table);
Vue.component('requests', requests);
Vue.component('requests_table', requests_table);
// Vue.component('create_subject', create_subject);
Vue.component('edit_subject', edit_subject);
Vue.component('subjects_table', subjects_table);
Vue.component('schools', schools);
Vue.component('edit_school', edit_school);
Vue.component('schools_table', schools_table);
Vue.component('grades', grades);
Vue.component('edit_grade', edit_grade);
Vue.component('grades_table', grades_table);
Vue.component('levels', levels);
Vue.component('levels_form', levels_form);
Vue.component('levels_table', levels_table);
Vue.component('countries', countries);
Vue.component('edit_country', edit_country);
Vue.component('countries_table', countries_table);
Vue.component('settings', settings);
Vue.component('general_setting', general_setting);
Vue.component('user_permissions', user_permissions);
Vue.component('payments_table', payments_table);
Vue.component('roles', roles);
Vue.component('roles_table', roles_table);
Vue.component('role_permissions', role_permissions);
Vue.component('terms', terms);
Vue.component('terms_table', terms_table);
Vue.component('courses', courses);
Vue.component('ilo', ilo);
Vue.component('courses_table', courses_table);
Vue.component('course_role', course_role);
Vue.component('course_roles_table', course_roles_table);
Vue.component('course_roles_form', course_roles_form);
Vue.component('curriculums', curriculums);
Vue.component('curriculums_table', curriculums_table);
Vue.component('units', units);
Vue.component('lessons', lessons);
Vue.component('create_lesson', create_lesson);
Vue.component('table_lessons', table_lessons);
Vue.component('edit_lessons', edit_lessons);
Vue.component('form_lessons', form_lessons);
Vue.component('quizzes', quizzes);
Vue.component('quizzes_side_menu',quizzes_side_menu);
Vue.component('quizzes_user_info',quizzes_user_info);
Vue.component('quizzes_instructions_popup',quizzes_instructions_popup);
Vue.component('quizzes_help_popup',quizzes_help_popup);
Vue.component('quizzes_timer',quizzes_timer);
Vue.component('quizzes_questions_actions',quizzes_questions_actions);
Vue.component('quizzes_questions_types',quizzes_questions_types);
Vue.component('questions_types_true',questions_types_true);
Vue.component('questions_types_single',questions_types_single);
Vue.component('questions_types_multi',questions_types_multi);
Vue.component('quiz_result',quiz_result);
Vue.component('digital_library', digital_library);
Vue.component('view_digital_library', view_digital_library);
Vue.component('digital_library_form', digital_library_form);
Vue.component('playlist', playlist);
Vue.component('playlist_buttons', playlist_buttons);
Vue.component('playlist_main', playlist_main);
Vue.component('lessons_list', lessons_list);
Vue.component('media_player', media_player);
Vue.component('playlist_discussion', playlist_discussion);
Vue.component('timetable',timetable);
Vue.component('loader', loader);
Vue.component('banks', banks);
Vue.component('banks_table', banks_table);
Vue.component('question_form', question_form);
Vue.component('choice', choice);
Vue.component('truefalse', truefalse);
Vue.component('questions', questions);
Vue.component('question_table', question_table);
Vue.component('student_courses', student_courses);
Vue.component('view_course', view_course);
Vue.component('course_learning', course_learning);
Vue.component('course_content', course_content);
Vue.component('course_units', course_units);
Vue.component('course_teachers', course_teachers);
Vue.component('comments', comments);
Vue.component('comment', comment);
Vue.component('comment_form', comment_form);
Vue.component('replies', replies);
Vue.component('replay_form', replay_form);
Vue.component('activities', activities);
Vue.component('online_teaching', online_teaching);
Vue.component('empty', empty);
Vue.component('units_table', units_table);
Vue.component('assignment_grade', assignment_grade);
Vue.component('quiz_grade', quiz_grade);
Vue.component('parent_signup', parent_signup);
Vue.component('student_signup', student_signup);
Vue.component('teacher_signup', teacher_signup);




import VuePlyr from 'vue-plyr'
import 'vue-plyr/dist/vue-plyr.css'
Vue.use(VuePlyr, {
    plyr: {}
})

Vue.use(VueLang, {
    messages: translations, // Provide locale file
    // locale: 'en', // Set locale
    fallback: 'en' // Set fallback lacale
  });

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
