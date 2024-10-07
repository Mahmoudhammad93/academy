<template>
    <div
        class="tab-pane fade"
        id="activity-1"
        role="tabpanel"
        aria-labelledby="activity-tab"
    >
    {{`${lessonsCompleted} ${countLessons}`}}
        <div class="row toping">
            <div class="col-md-12">
                <h3>{{ $trans("data.Activities") }}</h3>
            </div>
        </div>
        <div class="template-demo">
            <div class="d-flex justify-content-between mt-2">
                <small
                    >{{lessonsCompleted}} {{ (lessonsCompleted > 1)?$trans("data.lessons"): $trans("data.lesson")
                    }} {{ $trans("data.from") }} {{countLessons}}
                    {{ $trans("data.lessons") }}
                </small>
                <small>{{`${(lessonsCompleted*100)/countLessons}`}}%</small>
            </div>
            <div class="progress progress-sm mt-2">
                <div
                    class="progress-bar"
                    :class="barStatusClass"
                    role="progressbar"
                    :style="{width: (lessonsCompleted*100)/countLessons+'%'}"
                    :aria-valuenow="(lessonsCompleted*100)/countLessons"
                    aria-valuemin="0"
                    aria-valuemax="100"
                ></div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <small
                    >0{{ $trans("data.Exams") }}{{ $trans("data.from") }} 10
                    {{ $trans("data.Exams") }}
                </small>
                <small>0%</small>
            </div>
            <div class="progress progress-sm mt-2">
                <div
                    class="progress-bar bg-success"
                    role="progressbar"
                    style="width: 0%"
                    aria-valuenow="0"
                    aria-valuemin="0"
                    aria-valuemax="100"
                ></div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <small
                    >2{{ $trans("data.Homeworks") }}{{ $trans("data.from") }} 10
                    {{ $trans("data.Homeworks") }}</small
                >
                <small>20%</small>
            </div>
            <div class="progress progress-sm mt-2">
                <div
                    class="progress-bar bg-success"
                    role="progressbar"
                    style="width: 20%"
                    aria-valuenow="20"
                    aria-valuemin="0"
                    aria-valuemax="100"
                ></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:[
        'lessonsCompleted',
        'countLessons',
        'barStatusClass'
    ],
    data(){
        return{
            
        }
    },
    mounted(){
        
    },
    methods:{
        
    }
}
</script>