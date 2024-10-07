<template>
    <div class="row playlist-row">
        <media_player
            :currId="currId"
            :unitSlug="unitSlug"
            :courseId="courseId"
            :lessonSlug="lessonSlug"
            :storage_path="storage_path"
        >
        </media_player>
        <lessons_list
            :currId="currId"
            :unitSlug="unitSlug"
            :courseId="courseId"
            :lessonSlug="lessonSlug"
            :storage_path="storage_path"
            :completed_lessons="completed_lessons"
        >
        </lessons_list>
    </div>
</template>
<script>
import $ from "jquery";

export default {
    props: ["currId", "courseId", "unitSlug", "lessonSlug", "storage_path","completed_lessons"],
    data() {
        return {

        };
    },
    created() {
    },
    mounted() {
        if (this.locale_lang) {
            this.$lang.setLocale(this.locale_lang);
        } else {
            this.$lang.setLocale("en");
        }
    },
    methods: {

    }
};
</script>
