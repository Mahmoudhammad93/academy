<template>
    <form action="" @submit.prevent="submitForm()">
        <div class="form-group">
            <label for="name">Name</label>
            <input
                type="text"
                name="name"
                placeholder="Name"
                v-model="lesson.name"
                class="form-control"
            />
            <span style="color: red;"></span>
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <input
                type="text"
                name="type"
                placeholder="Type"
                v-model="lesson.type"
                class="form-control"
            />
            <span style="color: red;"></span>
        </div>
        <div class="form-group">
            <label for="path">Path</label>
            <input
                type="text"
                name="path"
                placeholder="Path"
                v-model="lesson.path"
                class="form-control"
            />
            <span style="color: red;"></span>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea
                name="description"
                cols="30"
                rows="10"
                v-model="lesson.description"
                class="form-control"
            ></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</template>

<script>
export default {
    props:[
        'lesson_id'
    ],
    data(){
        return{
            lesson:{}
        }
    },
    created(){
        this.getLesson()
    },
    methods:{
        getLesson(){
            axios.get(`/getLesson/${this.lesson_id}`)
            .then((res) => {
                console.log(res.data)
                this.lesson = res.data
            })
        },
        submitForm(){
            axios.post(`/update_lesson/${this.lesson_id}`, this.lesson)
            .then((res) => {
                console.log(res.data)
                Vue.$toast.success('Lesson Updated.', {
                    heading: 'Success',
                    position: 'bottom-right'
                })
                
            })
        }
    }
}
</script>
