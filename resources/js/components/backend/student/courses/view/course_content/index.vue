<template>
    <div
        class="tab-pane fade"
        id="content-1"
        role="tabpanel"
        aria-labelledby="content-tab"
    >
        <div class="row toping">
            <div class="col-md-6">
                <h3>{{ $trans("data.Course content") }}</h3>
            </div>
            <div class="col-md-6 share-on">
                <h4>
                    {{ $trans("data.Share") }}
                    <i class=" mdi mdi-share-variant share"></i
                    ><i class="mdi mdi-whatsapp socials"></i
                    ><i class="mdi mdi-facebook socials"></i
                    ><i class="mdi mdi-telegram socials"></i>
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div style="position: relative;min-height: 300px" v-if="curriculums.length > 0">
                    <loader v-if="isLoading"></loader>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" v-for="curriculum in curriculums">
                            <a
                                class="nav-link"
                                id="curriculum"
                                data-toggle="tab"
                                href="#curriculum-1"
                                role="tab"
                                aria-controls="curriculum-1"
                                aria-selected="true"
                                :class="
                                    curriculum.id === cur_tab_active
                                        ? 'active'
                                        : ''
                                "
                                @click="getUnits(curriculum.id)"
                                >{{
                                    locale_lang == "ar"
                                        ? curriculum.name_ar
                                        : curriculum.name_en
                                }}
                            </a>
                            <a href="" class="cart" @click.prevent="submitForm(curriculum)" v-if="curriculums_enrolled.indexOf(curriculum.id) == -1 && course_en !== -1">
                                <i class="mdi mdi-cart-plus"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div
                            class="tab-pane fade show active"
                            id="curriculum-1"
                            role="tabpanel"
                            aria-labelledby="curriculum"
                        >
                            <div class="">
                                <div class="">
                                    <div
                                        class="accordion accordion-bordered"
                                        id="accordion-20"
                                        role="tablist"
                                        v-if="units.length > 0"
                                    >
                                        <div class="card lessons_card" v-for="unit in units">
                                            <course_units :unit="unit" :locale_lang="locale_lang"></course_units>
                                            <div
                                                :id="`collapse-${unit.id}`"
                                                class="lessons"
                                                role="tabpanel"
                                                :aria-labelledby="
                                                    `heading-${unit.id}`
                                                "
                                                data-parent="#accordion-20"
                                            >
                                                <div class="card-body">
                                                    <ol
                                                        class="lessons_list"
                                                        v-if="
                                                            unit.lessons
                                                                .length > 0
                                                        "
                                                    >
                                                        <li
                                                            v-for="lesson in unit.lessons"
                                                        >
                                                            <p v-if="curriculums_enrolled.indexOf(unit.curriculum_id) !== -1">
                                                                <a :href="`/course/${course.slug}/curriculum/${cur_tab_active}/unit/${unit.slug}/lesson/${lesson.slug}`" v-if="lesson.type == 'video/mp4'">
                                                                    <i class="mdi mdi-check-circle-outline"></i>
                                                                    {{
                                                                        lesson.name
                                                                    }}
                                                                </a>
                                                                <a
                                                                    :href="`${storage_path}/${lesson.path}`"
                                                                    download
                                                                    v-else
                                                                    ><i
                                                                        class="mdi mdi-check-circle-outline"
                                                                    ></i>
                                                                    {{
                                                                        lesson.name
                                                                    }}
                                                                </a>
                                                            </p>
                                                            <p v-else>
                                                                <a>
                                                                    <i class="mdi mdi-check-circle-outline"></i>
                                                                    {{
                                                                        lesson.name
                                                                    }}
                                                                </a>
                                                            </p>
                                                        </li>
                                                    </ol>
                                                    <ol
                                                        class="lessons_list"
                                                        v-else
                                                    >
                                                        <li>
                                                            <p>
                                                                {{
                                                                    $trans(
                                                                        "data.No Data Found"
                                                                    )
                                                                }}
                                                            </p>
                                                        </li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <empty
                                        :storage_path="storage_path"
                                        v-else
                                    ></empty>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <empty
                    :storage_path="storage_path"
                    v-else
                ></empty>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    props: ["locale_lang", "storage_path", "slug", "id", 'course','user_id','subject_id','course_en'],
    data() {
        return {
            curriculums: [],
            curriculums_enrolled: [],
            cur_tab_active: null,
            units: [],
            isLoading:false,
            open: false
        };
    },
    created() {
        this.getCurriculums();
        this.getCurriculumsEnrolled();
    },
    mounted() {

    },
    methods: {
        getCurriculums() {
            this.isLoading = true
            axios.get(`/get_curriculum/${this.id}`).then(res => {
                this.curriculums = res.data;
                this.cur_tab_active = res.data[0].id;

                axios.get(`/get_units/${this.cur_tab_active}`).then(res => {
                    this.units = res.data
                    this.isLoading = false
                });
            });
        },
        getUnits(id){
            this.isLoading = true
            this.cur_tab_active = id
            axios.get(`/get_units/${id}`).then(res => {
                this.units = res.data
                this.isLoading = false
            });
        },
        getCurriculumsEnrolled(){
            axios.get(`/get_curriculums_enrolled`)
            .then((res) => {
                this.curriculums_enrolled = res.data
            })
        },
        submitForm(obj){
            axios.post(`/curriculum/store`,obj)
            .then((res) => {
                location.replace(res.data)
            })
        }
    }
};
</script>
