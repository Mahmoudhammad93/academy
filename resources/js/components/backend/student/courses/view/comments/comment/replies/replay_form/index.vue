<template>
    <form action="" @submit.prevent="submitForm()">
        <div class="form-group comment-reply-group">
            <label for="exampleTextarea1">{{
                $trans("data.Write reply")
            }}</label>
            <textarea
                class="form-control"
                id="exampleTextarea1"
                rows="2"
                v-model="replay.description"
            ></textarea>
        </div>
        <div class="reply-action">
            <button class="btn btn btn-inverse-primary btn-fw btn-block">
                {{ $trans("data.Reply") }}
            </button>
        </div>
    </form>
</template>

<script>
export default {
    props:[
        'comment',
        'course_id'
    ],
    data(){
        return{
            replay:{},
        }
    },
    created(){
        console.log('comment id in replies = ' + this.comment.id)
    },
    methods:{
        submitForm(){
            this.replay.courseId = this.course_id
            this.replay.parent_id = this.comment.id
            axios.post(`/replay/store`, this.replay)
            .then((res) => {
                this.replay.description = ''
                this.$emit('newReplay', res.data)
                console.log(res.data)
            })
        }
    }
}
</script>
