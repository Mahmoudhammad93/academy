<template>
    <div class="playlist-footer">
        <loader v-if="isLoading"></loader>
        <hr />
        <div class="playlist-focus" v-if="completed_lessons.indexOf(lesson.id) == -1">
            <h3>Discussion</h3>
            <button type="button" class="btn btn-success" @click="completedLesson()">
                I understand the lesson
            </button>
        </div>
        <div class="discussions">
            <div class="discussions-inner">
                <div class="write-comment">
                    <div>
                        <div class="form-group comment-reply-group">
                            <label for="exampleTextarea1">Write comment</label>
                            <textarea
                                class="form-control"
                                id="exampleTextarea1"
                                rows="4"
                            ></textarea>
                        </div>
                        <div class="comment-action">
                            <button
                                class="btn btn btn-inverse-primary btn-fw btn-block"
                            >
                                Comment
                            </button>
                        </div>
                    </div>
                </div>
                <div class="comments">
                    <div>
                        <div class="comment">
                            <div class="comment-inner">
                                <div class="name-time">
                                    <span class="name">Mohammed Salman</span
                                    ><span class="time">15 min ago</span>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Sed placerat metus est, nec
                                    fermentum urna laoreet nec. Pellentesque
                                    habitant morbi tristique senectus et netus
                                    et malesuada fames ac turpis egestas. Morbi
                                    vestibulum ante vitae ante tristique, ac
                                    dictum leo commodo. Mauris a aliquet est.
                                    Quisque vehicula ante vel finibus
                                    pellentesque.
                                </p>

                                <div class="form-group comment-reply-group">
                                    <label for="exampleTextarea1"
                                        >Write reply</label
                                    >
                                    <textarea
                                        class="form-control"
                                        id="exampleTextarea1"
                                        rows="2"
                                    ></textarea>
                                </div>
                                <div class="reply-action">
                                    <button
                                        class="btn btn btn-inverse-primary btn-fw btn-block"
                                    >
                                        Reply
                                    </button>
                                </div>
                                <span></span>
                                <div class="replies">
                                    <div class="reply">
                                        <div class="reply-inner">
                                            <div class="name-time">
                                                <span class="name"
                                                    >Yasser Ehab</span
                                                ><span class="time"
                                                    >9 min ago</span
                                                >
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Sed
                                                placerat metus est, nec
                                                fermentum urna laoreet nec.
                                                Pellentesque habitant morbi
                                                tristique senectus et netus et
                                                malesuada fames ac turpis
                                                egestas. Morbi vestibulum ante
                                                vitae ante tristique, ac dictum
                                                leo commodo. Mauris a aliquet
                                                est. Quisque vehicula ante vel
                                                finibus pellentesque.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply">
                                        <div class="reply-inner">
                                            <div class="name-time">
                                                <span class="name"
                                                    >Mahmoud Hammad</span
                                                ><span class="time"
                                                    >7 min ago</span
                                                >
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Sed
                                                placerat metus est, nec
                                                fermentum urna laoreet nec.
                                                Pellentesque habitant morbi
                                                tristique senectus et netus et
                                                malesuada fames ac turpis
                                                egestas. Morbi vestibulum ante
                                                vitae ante tristique, ac dictum
                                                leo commodo. Mauris a aliquet
                                                est. Quisque vehicula ante vel
                                                finibus pellentesque.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply">
                                        <div class="reply-inner">
                                            <div class="name-time">
                                                <span class="name"
                                                    >Ibraheem Mansour</span
                                                ><span class="time"
                                                    >1 min ago</span
                                                >
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Sed
                                                placerat metus est, nec
                                                fermentum urna laoreet nec.
                                                Pellentesque habitant morbi
                                                tristique senectus et netus et
                                                malesuada fames ac turpis
                                                egestas. Morbi vestibulum ante
                                                vitae ante tristique, ac dictum
                                                leo commodo. Mauris a aliquet
                                                est. Quisque vehicula ante vel
                                                finibus pellentesque.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment">
                            <div class="comment-inner">
                                <div class="name-time">
                                    <span class="name">Mohammed Salman</span
                                    ><span class="time">15 min ago</span>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Sed placerat metus est, nec
                                    fermentum urna laoreet nec. Pellentesque
                                    habitant morbi tristique senectus et netus
                                    et malesuada fames ac turpis egestas. Morbi
                                    vestibulum ante vitae ante tristique, ac
                                    dictum leo commodo. Mauris a aliquet est.
                                    Quisque vehicula ante vel finibus
                                    pellentesque.
                                </p>

                                <div class="form-group comment-reply-group">
                                    <label for="exampleTextarea1"
                                        >Write reply</label
                                    >
                                    <textarea
                                        class="form-control"
                                        id="exampleTextarea1"
                                        rows="2"
                                    ></textarea>
                                </div>
                                <div class="reply-action">
                                    <button
                                        class="btn btn btn-inverse-primary btn-fw btn-block"
                                    >
                                        Reply
                                    </button>
                                </div>
                                <span></span>
                                <div class="replies">
                                    <div class="reply">
                                        <div class="reply-inner">
                                            <div class="name-time">
                                                <span class="name"
                                                    >Yasser Ehab</span
                                                ><span class="time"
                                                    >9 min ago</span
                                                >
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Sed
                                                placerat metus est, nec
                                                fermentum urna laoreet nec.
                                                Pellentesque habitant morbi
                                                tristique senectus et netus et
                                                malesuada fames ac turpis
                                                egestas. Morbi vestibulum ante
                                                vitae ante tristique, ac dictum
                                                leo commodo. Mauris a aliquet
                                                est. Quisque vehicula ante vel
                                                finibus pellentesque.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply">
                                        <div class="reply-inner">
                                            <div class="name-time">
                                                <span class="name"
                                                    >Mahmoud Hammad</span
                                                ><span class="time"
                                                    >7 min ago</span
                                                >
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Sed
                                                placerat metus est, nec
                                                fermentum urna laoreet nec.
                                                Pellentesque habitant morbi
                                                tristique senectus et netus et
                                                malesuada fames ac turpis
                                                egestas. Morbi vestibulum ante
                                                vitae ante tristique, ac dictum
                                                leo commodo. Mauris a aliquet
                                                est. Quisque vehicula ante vel
                                                finibus pellentesque.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply">
                                        <div class="reply-inner">
                                            <div class="name-time">
                                                <span class="name"
                                                    >Ibraheem Mansour</span
                                                ><span class="time"
                                                    >1 min ago</span
                                                >
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Sed
                                                placerat metus est, nec
                                                fermentum urna laoreet nec.
                                                Pellentesque habitant morbi
                                                tristique senectus et netus et
                                                malesuada fames ac turpis
                                                egestas. Morbi vestibulum ante
                                                vitae ante tristique, ac dictum
                                                leo commodo. Mauris a aliquet
                                                est. Quisque vehicula ante vel
                                                finibus pellentesque.
                                            </p>
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
</template>
<script>
export default {
    props: [
        'lesson',
        'courseSlug'
    ],
    data() {
        return {
            completed_lessons: [],
            isLoading: true
        };
    },
    created() {
        this.getCompletedLessons()
    },
    mounted() {
        if (this.locale_lang) {
            this.$lang.setLocale(this.locale_lang);
        } else {
            this.$lang.setLocale("en");
        }
    },
    methods: {
        completedLesson(){
            this.lesson.course_slug = this.courseSlug
            axios.post(`/complete_lesson/${this.lesson.id}`,this.lesson)
            .then((res) => {
                this.completed_lessons.push(parseInt(res.data.lesson_id))
                Vue.$toast.success('Lesson Completed.', {
                    position: 'top-right'
                })
                console.log(this.completed_lessons)
            })
        },
        getCompletedLessons(){
            axios.post(`/get_completed_lessons`)
            .then((res) => {
                this.completed_lessons = res.data
                console.log(this.completed_lessons)
                this.$emit('completed_lessons', this.completed_lessons)
                this.isLoading = false
            })
        }
    }
};
</script>

<style scoped>
.playlist-footer{
    position: relative;
}
</style>
