<template>
    <div class="playlist-list  col-xl-4 col-md-4 col-lg-4 col-sm-12">
        <div class="inner-list">
            <div
                class="accordion accordion-bordered"
                :id="'accordion-' + courseId"
                role="tablist"
            >
                <div class="card" v-for="unit in units">
                    <div
                        class="card-header"
                        role="tab"
                        :id="'heading-' + unit.id"
                    >
                        <h6 class="mb-0">
                            <a
                                data-toggle="collapse"
                                :href="'#collapse-' + unit.id"
                                aria-expanded="false"
                                :aria-controls="'collapse-' + unit.id"
                            >
                                <span
                                    class="btn btn-inverse-success btn-fw btn_plus"
                                    ><i class="mdi mdi-minus change-input"></i
                                ></span>
                                {{ unit.name_ar }}
                            </a>
                        </h6>
                    </div>
                    <div
                        :id="'collapse-' + unit.id"
                        class="collapse lessons_box"
                        role="tabpanel"
                        :class="unit.slug === unitSlug ? 'show' : ''"
                        :aria-labelledby="'heading-' + unit.id"
                        :data-parent="'#accordion-' + courseId"
                    >
                        <div class="card-body">
                            <ol class="lessons_list" v-if="unit.lessons.length > 0">
                                <li v-for="lesson in unit.lessons" :class="(lessonSlug == lesson.slug)?'active':''" :key="lesson.id">
                                    <p :class="(completed_lessons.indexOf(lesson.id) != -1)?'completed':''">
                                        <a
                                            :href="
                                                `/course/${courseId}/curriculum/${currId}/unit/${unitSlug}/lesson/${lesson.slug}`
                                            "
                                            v-if="lesson.type == 'video/mp4'"
                                        >
                                            <i
                                                class="mdi mdi-play-circle-outline"
                                            ></i>
                                            {{ lesson.name }}
                                        </a>
                                        <a
                                            :href="`${storage_path}/${lesson.path}`"
                                            download
                                            v-else
                                        >
                                            <i
                                                class="mdi mdi-play-circle-outline"
                                            ></i>
                                            {{ lesson.name }}
                                        </a>
                                        <input type="checkbox" name="" id="" @change="completedLesson(lesson)" v-if="completed_lessons.indexOf(lesson.id) == -1">
                                        <i class="fa fa-check" v-else></i>
                                    </p>
                                </li>
                            </ol>
                            <ol class="lessons_list" v-else>
                                <li>
                                    <p>
                                        <a>
                                            No Data Found
                                        </a>
                                    </p>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["currId", "courseId", "unitSlug", "lessonSlug", "storage_path","completed_lessons"],
    data() {
        return {
            units: [],
        };
    },
    created() {
        this.getUnits();
    },
    methods: {
        getUnits() {
            axios.get(`/get_units/${this.currId}`).then(res => {
                this.units = res.data;
            });
        },
        completedLesson(obj){
            obj.course_slug = this.courseId
            axios.post(`/complete_lesson/${obj.id}`,obj)
            .then((res) => {
                this.completed_lessons.push(parseInt(res.data.lesson_id))
                Vue.$toast.success('Lesson Completed.', {
                    position: 'top-right'
                })
                console.log(this.completed_lessons)
            })
        }
    }
};
</script>
