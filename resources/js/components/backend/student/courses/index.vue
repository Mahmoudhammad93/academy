<template>
    <div id="student_courses" class="card mt-4">
        <div class="card-body">
            <div class="top-tabs">
                <h4 class="card-title">
                    {{ $trans("data.Grade") }}: {{ $trans("data.First primary") }}
                </h4>
                <ul
                    class="nav nav-pills nav-pills-custom"
                    id="pills-tab"
                    role="tablist"
                >
                    <li class="nav-item" v-for="term in terms" :data-id="term.id" @click="getTermCourses(term.id)">
                        <a
                            class="nav-link"
                            :class="(active_term === term.id)?'active':''"
                            id="pills-home-tab"
                            data-toggle="pill"
                            href="#first-term"
                            role="tab"
                            aria-controls="first-term"
                            aria-selected="true"
                            >{{(locale_lang == 'ar')?term.name_ar:term.name_en}}</a
                        >
                    </li>
                </ul>
            </div>
            <div class="tab-content unbordered" id="pills-tabContent">
                <div
                    class="tab-pane fade show active"
                    id="first-term"
                    role="tabpanel"
                    aria-labelledby="first-term-tab"
                >
                    <ul
                        class="nav nav-pills nav-pills-primary"
                        id="pills-tab"
                        role="tablist"
                    >
                        <li class="nav-item" @click="getMyCourses('all',term_data_id)">
                            <a
                                class="nav-link"
                                :class="(all_is_active == 'all')?'active':''"
                                >{{ $trans("data.All courses") }}</a
                            >
                        </li>
                        <li class="nav-item" @click="getMyCourses('my',term_data_id)">
                            <a
                                class="nav-link"
                                :class="(all_is_active == 'my')?'active':''"
                                >{{ $trans("data.My courses") }}</a
                            >
                        </li>
                    </ul>
                    <div class="tab-content unbordered" id="pills-tabContent">
                        <div class="row" v-if="courses.length > 0">
                            <div class="col-sm-6 col-md-4 col-lg-3" v-for="course in courses">
                                <div class="courses item-card">
                                    <a href="course_list/course/9">
                                        <div
                                            class="image courseimage"
                                            :style="{backgroundImage: 'url('+`${storage_path + '/' +course.image}`+')'}"
                                        ></div>
                                        <div class="details">
                                            <p class="course_name m-0">
                                                {{course.name_ar}}
                                            </p>
                                            <p class="sub_name m-0">
                                                <span
                                                    >{{course.name_en}}</span
                                                >
                                            </p>
                                            <span class="author">
                                                Mahmoud Adam
                                            </span>
                                            <div class="rate">
                                                <span class="num-rate">( 4 )</span>
                                                <ul
                                                    class="rate-stars list-unstyled"
                                                >
                                                    <li class="star">
                                                        <i
                                                            class="fa fa-star text-secondary"
                                                        ></i>
                                                    </li>
                                                    <li class="star">
                                                        <i
                                                            class="fa fa-star text-secondary"
                                                        ></i>
                                                    </li>
                                                    <li class="star">
                                                        <i
                                                            class="fa fa-star text-secondary"
                                                        ></i>
                                                    </li>
                                                    <li class="star">
                                                        <i
                                                            class="fa fa-star text-secondary"
                                                        ></i>
                                                    </li>
                                                    <li class="star">
                                                        <i
                                                            class="fa fa-star text-secondary"
                                                        ></i>
                                                    </li>
                                                </ul>
                                                <span class="reviews"
                                                    >( 0 )</span
                                                >
                                            </div>
                                            <div class="price">
                                                <span class="offer-price"
                                                    >{{course.price}}
                                                    {{
                                                        $trans("data.SAR")
                                                    }}</span
                                                >
                                            </div>
                                        </div>
                                    </a>
                                    <a :href="`/courses/${course.slug}/view`" class="btn btn-primary join-course btn-block" v-if="courses_is_enrolled_check.indexOf(course.id) !== -1">
                                        {{ $trans("data.Start Learning") }}
                                    </a>
                                    <a :href="`/courses/${course.slug}/view`" class="btn btn-primary join-course btn-block" v-else>
                                        {{ $trans("data.Join course") }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <empty :storage_path="storage_path" :locale_lang="locale_lang" v-else></empty>
                    </div>
                </div>
            </div>
            <loader v-if="isLoading"></loader>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    props:[
        'locale_lang',
        'storage_path'
    ],
    data(){
        return{
            terms: {},
            all_courses: {},
            courses: {},
            courses_is_enrolled: {},
            courses_is_enrolled_check:[],
            active_term:null,
            term_data_id:null,
            isLoading: false,
            all_is_active: 'all'
        }
    },
    created(){
        this.getTerms()
    },
    mounted(){
        if (this.locale_lang) {
            this.$lang.setLocale(this.locale_lang);
        } else {
            this.$lang.setLocale('en');
        }
    },
    methods:{
        getTerms(){
            this.isLoading = true
            axios.get('/terms')
            .then((res) => {
                this.terms = res.data.data
                this.active_term = this.terms[0].id
                this.term_data_id = this.terms[0].id

                axios.get(`/get_term_courses/${this.terms[0].id}`)
                .then((res) => {
                    this.courses = res.data.courses
                    this.all_courses = res.data.courses
                    this.courses_is_enrolled = res.data.coursesIsEnrolled

                    var array = this.courses_is_enrolled.map(({ context_id }) => context_id)
                    this.courses_is_enrolled_check = array
                    this.isLoading = false
                })
            })



        },
        getTermCourses(id){
            this.active_term = id
            this.term_data_id = id
            this.all_is_active = 'all'
            axios.get(`/get_term_courses/${id}`)
            .then((res) => {
                this.courses = res.data.courses
            })
        },
        getMyCourses(value, term_id){
            this.all_is_active = value
            axios.get(`/get_my_courses/${value}/term/${term_id}`)
            .then((res) => {
                this.courses = res.data
            })
        },
    }
}
</script>
