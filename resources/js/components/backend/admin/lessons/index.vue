<template>
    <div class="card-body p-0">
        <ol class="lessons_list" v-if="lessons.length > 0">
            <li v-for="lesson in lessons" :key="lesson.id">
                <p>
                    <a href="#">
                        <i class="mdi mdi-play-circle-outline"></i>
                        {{lesson.name}}
                    </a>
                </p>
            </li>
        </ol>
        <ol class="lessons_list" v-else>
            <li>
                <p>
                    {{$trans('data.No Data Found')}}
                </p>
            </li>
        </ol>
        <br />
        <p class="text-success">
            <i class="mdi mdi-alert-octagon mr-2"></i>If the problem persists,
            you can contact our support.
        </p>
    </div>
</template>

<script>
export default {
    props:[
        'uid',
        'locale_lang'
    ],
    data(){
        return{
            lessons:[]
        }
    },
    mounted(){
        if (this.locale_lang) {
            this.$lang.setLocale(this.locale_lang);
        } else {
            this.$lang.setLocale('en');
        }
    },
    created(){
        this.getLessons()
    },
    methods:{
        getLessons(){
            axios.get(`/unit/${this.uid}/lessons`)
            .then((res) => {
                console.log(res.data)
                this.lessons = res.data
            })
        }
    }
}
</script>
