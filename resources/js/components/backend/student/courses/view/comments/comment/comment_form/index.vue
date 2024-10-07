<template>
    <form action="" @submit.prevent="submitForm()">
        <div class="form-group comment-reply-group">
            <label for="exampleTextarea1">{{
                $trans("data.Write comment")
            }}</label>
            <textarea
                class="form-control"
                id="exampleTextarea1"
                rows="4"
                v-model="comment.description"
                @keypress="submitInter($event)"
            ></textarea>
        </div>
        <div class="comment-action">
            <button class="btn btn btn-inverse-primary btn-fw btn-block">
                {{ $trans("data.Comment") }}
            </button>
        </div>
    </form>
</template>

<script>
export default {
    props:[
        'course_id',
        'user_name'
    ],
    data(){
        return{
            comment:{}
        }
    },
    methods:{
        submitForm(){
            this.comment.courseId = this.course_id
            axios.post(`/comment/store`, this.comment)
            .then((res) => {
                this.comment.description = ''
                this.$emit('newComment',res.data)
            })
        },
        submitInter(e){
            if(e.which == 13){
                this.submitForm()
            }
        }
    }
}
</script>
