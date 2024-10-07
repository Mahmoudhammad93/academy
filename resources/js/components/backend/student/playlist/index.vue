<template>
    <div class="playlist">
        <playlist_buttons></playlist_buttons>
        <playlist_main :completed_lessons="completed_lessons" :courseId="course_slug" :currId="curr_id" :unitSlug="unit_slug" :lessonSlug="lesson_slug" :storage_path="storage_path"></playlist_main>
        <playlist_discussion @completed_lessons="completedLessons" :lesson="lesson" :courseSlug="course_slug"></playlist_discussion>hp
    </div>
</template>
<script>
import axios from 'axios';
export default {
    props: [
        'course_slug',
        'curr_id',
        'unit_slug',
        'lesson_slug',
        'storage_path'
    ],
    data() {
        return {
            lesson:{},
            completed_lessons: [],
        };
    },
    created() {
        this.getDiscLesson()
    },
    mounted() {
        if (this.locale_lang) {
            this.$lang.setLocale(this.locale_lang);
        } else {
            this.$lang.setLocale("en");
        }
    },
    methods: {
        getDiscLesson() {
            axios.get(`/get_lesson/${this.lesson_slug}`).then(res => {
                this.lesson = res.data;
            });
        },
        completedLessons(data){
            this.completed_lessons = data
        }
    }
};
</script>
