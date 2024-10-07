<template>
    <div class="playlist-video col-xl-8 col-md-8 col-lg-8 col-sm-12">
        <loader v-if="isLoading"></loader>
        <div class="inner-video" v-if="lesson.type == 'video/mp4'">
            <div class="video-holder">
                <!-- video element -->
                <vue-plyr>
                    <video
                        :src="
                            `${storage_path}/${lesson.path}`
                        "
                        data-poster="poster.jpg"
                        id="current-video"
                    >
                        <source
                            size="720"
                            :src="`${storage_path}/${lesson.path}`"
                            type="video/mp4"
                            id="current-source"
                        />
                        <track
                            kind="captions"
                            label="English captions"
                            :src="
                                `${storage_path}/${lesson.path}`
                            "
                            srclang="en"
                        />
                    </video>
                </vue-plyr>
            </div>
            <div class="controls"></div>
        </div>
        <div class="inner-files" v-else>
            <a :href="`${storage_path}/${lesson.path}`"
                >Download File</a
            >
        </div>
    </div>
</template>

<script>
export default {
    props: ["currId", "courseId", "unitSlug", "lessonSlug", "storage_path"],
    data() {
        return {
            lesson: {},
            isLoading: false
        };
    },
    created() {
        this.getLesson();
    },
    methods: {
        getLesson() {
            this.isLoading = true;
            axios.get(`/get_lesson/${this.lessonSlug}`).then(res => {
                console.log(res.data);
                this.lesson = res.data;
                this.isLoading = false;
            });
        }
    }
};
</script>
