<template>
    <div class="create_lesson">
        <div class="col-md-12 grid-margin stretch-card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $trans("Add Lessons") }}</h4>
                    <input
                        @change="upload"
                        ref="videos"
                        type="file"
                        id="video-file"
                        class="dropify"
                        multiple
                    />

                    <div id="myProgress" class="container">
                        <div v-for="video in videos">
                            <div class="file-info">
                                <h5>{{ video.name }}</h5>
                            </div>

                            <div class="progress progress-lg mt-2">
                                <div
                                    class="progress-bar bg-success"
                                    role="progressbar"
                                    :style="{
                                        width: progress[video.name] + '%'
                                    }"
                                    aria-valuenow="this.progress[video.name]"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                >
                                    {{ progress[video.name] }}%
                                </div>
                            </div>
                        </div>
                    </div>
                    <table_lessons></table_lessons>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["module_name", "curriculum_id", "unit_id"],
    data() {
        return {
            lesson: {},
            videos: [],
            progress: [],
            doneMsg: false,
            failedMsg: false
        };
    },
    methods: {
        upload() {
            this.videos = Array.from(this.$refs.videos.files);
            const uploaders = this.videos.map(video => {
                this.progress[video.name] = 0;
                const form = new FormData();
                form.append("video", video);
                form.append("name", video.name);
                form.append("type", video.type);
                form.append('curriculum_id', this.curriculum_id)
                axios
                    .post(`/unit/${this.unit_id}/lesson/store`, form, {
                        onUploadProgress: event => {
                            this.progress[video.name] = Math.ceil(
                                (event.loaded / event.total) * 100
                            );
                            this.$forceUpdate();
                        }
                    })
                    .then(res => {
                        Vue.$toast.success(
                            res.data.lessons.name + " is uploaded successfuly",
                            {
                                position: "top-right"
                            }
                        );
                    })
                    .catch(err => {
                        Vue.$toast.success(err, {
                            position: "top-right"
                        });
                    });
            });
        }
    }
};
</script>

<style>
#myBar {
    width: 10%;
    height: 30px;
    background-color: #04aa6d;
    text-align: center; /* To center it horizontally (if you want) */
    line-height: 30px; /* To center it vertically */
    color: white;
}
</style>
