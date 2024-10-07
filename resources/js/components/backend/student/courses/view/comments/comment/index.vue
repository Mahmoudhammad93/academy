<template>
    <div class="comment-inner">
        <div class="name-time">
            <span class="name">{{comment.name}}</span
            ><span class="time">15 {{ $trans("data.min ago") }}</span>
        </div>
        <p>
            {{comment.description}}
        </p>
        <div class="react text-primary">
            <span
                ><i class="mdi mdi-thumb-up-outline"></i>
                {{ $trans("data.like") }}</span
            ><span
                ><i class="mdi mdi-microphone-variant"></i>
                {{ $trans("data.Report") }}</span
            ><span
                ><i class="mdi mdi-account-check"></i
                >{{ $trans("data.Number of likes") }}: 12</span
            ><span
                ><i
                    class="mdi mdi-comment
                                        "
                ></i
                >{{ $trans("data.Number of replies") }}: 3</span
            >
        </div>
        <replay_form @newReplay="newReplay" :comment="comment" :course_id="course_id" :user_name="user_name"></replay_form>
        <span></span>
        <div class="replies" v-for="replay in replies">
            <replies :replay="replay"></replies>
        </div>
    </div>
</template>

<script>
export default {
    props:[
        'comment',
        'course_id',
        'user_name'
    ],
    data(){
        return{
            replies: []
        }
    },
    created(){
        this.getReplies()
        console.log(this.comment)
    },
    methods:{
        newReplay(data){
            this.replies.unshift(data)
        },
        getReplies(){
            axios.get(`/getReplies/${this.course_id}/${this.comment.id}`)
            .then((res) => {
                this.replies = res.data
                console.log(res.data)
            })
        },
    }
}
</script>
