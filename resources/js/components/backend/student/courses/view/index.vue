<template>
    <div class="card view-course">
        <div class="card-body shifted-course-data">
            <div class="view-primary-data alert alert-secondary">
                <div class="inner-view-primary-data row">
                    <div class="col-md-12 info-row large-screens">
                        <div>
                            <div class="view-right">
                                <div class="toppers">
                                    <div class="info large-screens">
                                        <h1>
                                            <span>{{
                                                locale_lang == "ar"
                                                    ? course.cn_ar
                                                    : course.cn_en
                                            }}</span>,
                                            <span>{{
                                                locale_lang == "ar"
                                                    ? course.gn_ar
                                                    : course.gn_en
                                            }}</span>
                                        </h1>
                                    </div>
                                    <div class="info large-screens">
                                        <h3>
                                            {{
                                                locale_lang == "ar"
                                                    ? course.tn_ar
                                                    : course.tn_en
                                            }}
                                        </h3>
                                    </div>
                                    <div class="info large-screens">
                                        <h3>
                                            {{ user_name }}
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="col-md-6 course_info_left">
                                <div class="info large-screens">
                                    <h4>
                                        <i class="mdi mdi-checkbox-marked"></i
                                        ><span
                                            >{{
                                                $trans("data.Course hours")
                                            }}: </span
                                        >80
                                    </h4>
                                </div>
                                <div class="info  large-screens">
                                    <h4>
                                        <i class="mdi mdi-checkbox-marked"></i
                                        ><span
                                            >{{
                                                $trans(
                                                    "data.Course online lessons"
                                                )
                                            }}: </span
                                        >1
                                    </h4>
                                </div>
                                <div class="info  large-screens">
                                    <h4>
                                        <i class="mdi mdi-checkbox-marked"></i
                                        ><span
                                            >{{
                                                $trans("data.Course exersices")
                                            }}: </span
                                        >50
                                    </h4>
                                </div>
                                <div class="info  large-screens">
                                    <h4>
                                        <i class="mdi mdi-checkbox-marked"></i
                                        ><span
                                            >{{
                                                $trans("data.Course homeworks")
                                            }}: </span
                                        >50
                                    </h4>
                                </div>
                                <div class="info" v-if="
                                            courses_en.indexOf(course.id) == -1
                                        ">
                                    <span
                                        class="alert alert-danger price"
                                    >
                                        {{ course.price }}
                                        {{ $trans("data.Coins.EGP") }}
                                    </span>
                                </div>
                                <div class="info" v-if="
                                            courses_en.indexOf(course.id) == -1
                                        ">
                                    <a
                                        href=""
                                        class="btn btn-primary btn-block"
                                        data-toggle="modal"
                                        data-target="#exampleModal"
                                        >{{ $trans("data.Join course") }}</a
                                    >
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="fixed-holder row">
                <div class="fixed-course col-xl-3 col-lg-12">
                    <div class="fixed-course-data">
                        <loader v-if="isLoading"></loader>
                        <div class="course-data-inner">
                            <div class="course-fix-bk">
                                <div class="fix-bk">
                                    <img :src="`${storage_path}/${course.image}`">
                                </div>
                            </div>
                            <div class="fix-text">
                                <div class="enrolled-num fix-pad">
                                    <h5>{{(countEnrolled > 1000)?'+':''}}{{countEnrolled}} <span>Enrolled</span></h5>
                                </div>
                                <div class="fix-buttons fix-pad">
                                    <!-- <button class="btn btn-rounded btn-block btn-secondary" disabled>You are not Enrolled</button> -->
                                    <button class="btn btn-rounded btn-block btn-primary" v-if="courses_en.indexOf(course.id) == -1" data-toggle="modal" data-target="#exampleModal">{{ $trans("data.Join course") }}</button>
                                </div>
                                <div class="fix-price fix-pad">
                                    <span>Free</span>
                                </div>
                                <div class="fix-course-content fix-pad">
                                    <h4>Course Content</h4>
                                    <div class="fix-inner-content">
                                        <i class="mdi mdi-book-open-page-variant"></i>
                                        <p><span>35 </span>parts</p>
                                    </div>
                                    <div class="fix-inner-content">
                                        <i class="mdi mdi-film"></i>
                                        <p><span>{{countLessons}} </span>videos</p>
                                    </div>
                                    <div class="fix-inner-content">
                                        <i class="mdi mdi-comment-question-outline"></i>
                                        <p><span>45 </span>quiz</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view-tabs-holder col-xl-9 col-lg-12">
                    <div class="view-tabs">
                        <h4 class="card-title">{{ $trans("data.Members") }}</h4>
                        <ul
                            class="nav nav-pills nav-pills-custom"
                            role="tablist"
                        >
                            <li class="nav-item">
                                <a
                                    class="nav-link active"
                                    id="learning-tab"
                                    data-toggle="tab"
                                    href="#learning-1"
                                    role="tab"
                                    aria-controls="learning-1"
                                    aria-selected="true"
                                    >{{ $trans("data.Course learning") }}</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    id="content-tab"
                                    data-toggle="tab"
                                    href="#content-1"
                                    role="tab"
                                    aria-controls="content-1"
                                    aria-selected="false"
                                    >{{ $trans("data.Course content") }}</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    id="teacher-tab"
                                    data-toggle="tab"
                                    href="#teacher-1"
                                    role="tab"
                                    aria-controls="teacher-1"
                                    aria-selected="false"
                                    >{{ $trans("data.Teacher") }}</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    id="comments-tab"
                                    data-toggle="tab"
                                    href="#comments-1"
                                    role="tab"
                                    aria-controls="comments-1"
                                    aria-selected="false"
                                    >{{ $trans("data.Comments") }}</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    id="activity-tab"
                                    data-toggle="tab"
                                    href="#activity-1"
                                    role="tab"
                                    aria-controls="activity-1"
                                    aria-selected="false"
                                    >{{ $trans("data.Activities") }}</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    id="online-tab"
                                    data-toggle="tab"
                                    href="#online-1"
                                    role="tab"
                                    aria-controls="online-1"
                                    aria-selected="false"
                                    >{{ $trans("data.Online teaching") }}</a
                                >
                            </li>
                        </ul>
                        <div class="tab-content">
                            <course_learning :id="id"></course_learning>
                            <course_content
                                :locale_lang="locale_lang"
                                :slug="slug"
                                :id="id"
                                :storage_path="storage_path"
                                :subject_id="course.subject_id"
                                :user_id="user_id"
                                :course="course"
                                :course_en="courses_en.indexOf(course.id)"
                            ></course_content>
                            <course_teachers
                                :storage_path="storage_path"
                                :teacher="teacher"
                                :assesstants="assesstants"
                            ></course_teachers>
                            <comments
                                :storage_path="storage_path"
                                :course_id="id"
                                :user_name="user_name"
                            ></comments>
                            <activities
                                :storage_path="storage_path"
                                :lessonsCompleted="lessonsCompleted"
                                :countLessons="countLessons"
                                :barStatusClass="barStatusClass"
                            ></activities>
                            <online_teaching
                                :storage_path="storage_path"
                            ></online_teaching>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="modal payment fade"
            id="exampleModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-modal="false"
        >
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4>
                            الانضمام لمادة ||
                            <span class="text-info">{{
                                locale_lang == "ar"
                                    ? course.cn_ar
                                    : course.cn_en
                            }}</span>
                        </h4>
                        <h4>
                            {{
                                locale_lang == "ar"
                                    ? course.gn_ar
                                    : course.gn_en
                            }}
                            ||
                            {{
                                locale_lang == "ar"
                                    ? course.tn_ar
                                    : course.tn_en
                            }}
                        </h4>
                        <h4>
                            التكلفة || {{ course.price }}
                            {{ $trans("data.Coins.EGP") }}
                        </h4>
                        <h4>أختر طريقة الدفع</h4>
                        <div class="payment-methods">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="image">
                                        <form
                                            action=""
                                            method="post"
                                            id="join_form"
                                            @submit.prevent="submitForm()"
                                        >
                                            <input
                                                type="hidden"
                                                name="flag"
                                                v-model="course.addcourse"
                                            />
                                            <input
                                                type="hidden"
                                                id="course_select"
                                                name="subjects[]"
                                                :v-model="
                                                    `${user_id},${course.subject_id},${course.cn_en},${course.id},${course.price}`
                                                "
                                            />
                                            <input
                                                type="hidden"
                                                name="teacher_id[]"
                                                :v-model="`${user_id}`"
                                            />
                                            <div class="form-group">
                                                <button
                                                    type="submit"
                                                    class="add-course"
                                                    id="addCourses"
                                                >
                                                    <img
                                                        :src="
                                                            `${storage_path}/visa.png`
                                                        "
                                                        alt=""
                                                    />
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="image">
                                        <a
                                            href=""
                                            @click.prevent="joinCourse()"
                                        >
                                            <img
                                                :src="
                                                    `${storage_path}/visa.png`
                                                "
                                                alt=""
                                            />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="image">
                                        <a
                                            href=""
                                            @click.prevent="joinCourse()"
                                        >
                                            <img
                                                :src="
                                                    `${storage_path}/visa.png`
                                                "
                                                alt=""
                                            />
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="image">
                                        <a
                                            href=""
                                            @click.prevent="joinCourse()"
                                        >
                                            <img
                                                :src="
                                                    `${storage_path}/visa.png`
                                                "
                                                alt=""
                                            />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-light"
                            data-dismiss="modal"
                        >
                            Cancel
                        </button>
                    </div>
                </div>
                 <loader v-if="isLoading"></loader>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    props: [
        "module_name",
        "locale_lang",
        "storage_path",
        "slug",
        "id",
        "user_id",
        "user_name"
    ],
    data() {
        return {
            course: {},
            countLessons: '',
            lessonsCompleted: '',
            countEnrolled: '',
            tabs: [],
            courses_en: [],
            teacher: {},
            assesstants: [],
            isLoading: false,
            barStatusClass: ''
        };
    },
    created() {
        this.getCourseData();
    },
    mounted() {
        if (this.locale_lang) {
            this.$lang.setLocale(this.locale_lang);
        } else {
            this.$lang.setLocale("en");
        }
    },
    methods: {
        getCourseData() {
            this.isLoading = true;
            axios.get(`/course_data/${this.slug}`).then(res => {
                this.course = res.data.course;
                this.courses_en = res.data.courses_enrolled;
                this.teacher = res.data.teacher;
                this.assesstants = res.data.assesstants;
                this.isLoading = false;
                this.countLessons = res.data.countLessons
                this.lessonsCompleted = res.data.lessonsCompleted
                this.countEnrolled = res.data.countEnrolled

                // To get percent of lessons completed
                var count = (this.lessonsCompleted * 100)/this.countLessons;
                
                if(count <= 30){
                    this.barStatusClass = 'bg-danger'
                }
                else if(count <= 60){
                    this.barStatusClass = 'bg-warning'
                }
                else {
                    this.barStatusClass = 'bg-success'
                }

                console.log(this.barStatusClass)
            });
        },
        joinCourse() {
            axios
                .post(`/join_course/${this.id}`, this.course)
                .then(res => {
                    Vue.$toast.success("Course Added Successfuly.", {
                        position: "top-right"
                    });
                })
                .catch(err => {
                    console.log(err);
                });
        },
        submitForm() {
            this.joinCourse();
            axios.post(`/course/store`, this.course).then(res => {
                location.replace(res.data);
            });
        },
    }
};
</script>
