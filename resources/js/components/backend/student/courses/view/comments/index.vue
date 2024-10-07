<template>
    <div
        class="tab-pane fade"
        id="comments-1"
        role="tabpanel"
        aria-labelledby="comments-tab"
    >
        <div class="row toping">
            <div class="col-md-6">
                <h3>{{ $trans("data.Comments") }}</h3>
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
        <div class="discussions">
            <div class="discussions-inner">
                <div class="write-comment">
                    <div>
                        <comment_form @newComment="newComment" :course_id="course_id" :user_name="user_name"></comment_form>
                    </div>
                </div>
                <div class="comments">
                    <div>
                        <div class="comment" v-for="comment in comments">
                            <comment :comment="comment" :course_id="course_id" :user_name="user_name"></comment>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:[
        'course_id',
        'user_name'
    ],
    data(){
        return{
            comments:[]
        }
    },
    created(){
        this.getComments()
    },
    methods:{
        getComments(){
            axios.get(`/getComments/${this.course_id}`)
            .then((res) => {
                this.comments = res.data
            })
        },
        newComment(data){
            this.comments.name = this.user_name
            this.comments.unshift(data);
        }
    }
}
</script>
