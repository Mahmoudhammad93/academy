<template>
    <div id="timetable">
        <div class="row">
            <div class="col-md-12 mb-2">
                <!-- <a href="timetable/create" class="btn btn-success btn-create">
                    <i class="mdi mdi-plus"></i> {{$trans('data.Add Classroom')}}
                </a> -->
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Weekly Timetable</h4>
                        <div class="form-group col-lg-6 col-sm-12">
                            <label for="month" style="display:block">Select Month</label>
                            <select class="form-control" name="month" id="month" @change="changeWeek($event)">
                                <option disabled>Select Month</option>
                                <option value="1" :selected="month_number == 1">1</option>
                                <option value="2" :selected="month_number == 2">2</option>
                                <option value="3" :selected="month_number == 3">3</option>
                                <option value="4" :selected="month_number == 4">4</option>
                                <option value="5" :selected="month_number == 5">5</option>
                                <option value="6" :selected="month_number == 6">6</option>
                                <option value="7" :selected="month_number == 7">7</option>
                                <option value="8" :selected="month_number == 8">8</option>
                                <option value="9" :selected="month_number == 9">9</option>
                                <option value="10" :selected="month_number == 10">10</option>
                                <option value="11" :selected="month_number == 11">11</option>
                                <option value="12" :selected="month_number == 12">12</option>
                            </select>
                        </div>
                        <ul class="list-unstyled timetable-tabs">
                            <li @click="tabWeeks('first_w',1)" :class="active == 'first_w'?'active':''">الاسبوع الاول</li>
                            <li @click="tabWeeks('second_w',2)" :class="active == 'second_w'?'active':''">الاسبوع الثاني</li>
                            <li @click="tabWeeks('third_w',3)" :class="active == 'third_w'?'active':''">الاسبوع الثالث</li>
                            <li @click="tabWeeks('fourth_w',4)" :class="active == 'fourth_w'?'active':''">الاسبوع الرابع</li>
                        </ul>
                        <table class="table table-bordered">
                            <thead>
                                <tr >
                                    <th></th>
                                    <th v-for="tm in timetable">{{convert12hours(tm) + '-'+(convert12hours(tm)==12?1:convert12hours(tm)+1)}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(key,weekday) in days">
                                    <td>{{key}}</td>
                                    <td v-for="tm in timetable" :id="month_number+'-'+week_number+'-'+key + '-' + tm">

                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
        'module_name',
        'locale_lang',
    ],
    data(){
        return{
            active: 'first_w',
            lessons:[
                {id: 1, week_day: 0, course_id: 1, week: 1, month: 1, year: 2021, from: 9, to: 10},
                {id: 2, week_day: 0, course_id: 1, week: 1, month: 1, year: 2021, from: 10, to: 11},
                {id: 3, week_day: 0, course_id: 1, week: 1, month: 1, year: 2021, from: 11, to: 12},
                {id: 4, week_day: 1, course_id: 1, week: 1, month: 1, year: 2021, from: 12, to: 1},
                {id: 5, week_day: 0, course_id: 1, week: 1, month: 1, year: 2021, from: 13, to: 2},
                {id: 6, week_day: 2, course_id: 1, week: 1, month: 1, year: 2021, from: 2, to: 3},
                {id: 7, week_day: 0, course_id: 1, week: 1, month: 1, year: 2021, from: 9, to: 10},
                {id: 8, week_day: 3, course_id: 1, week: 1, month: 1, year: 2021, from: 10, to: 11},
                {id: 9, week_day: 0, course_id: 1, week: 1, month: 1, year: 2021, from: 9, to: 10},
                {id: 10, week_day: 0, course_id: 1, week: 1, month: 1, year: 2021, from: 9, to: 10},
                {id: 8, week_day: 3, course_id: 1, week: 1, month: 1, year: 2021, from: 10, to: 11},
                {id: 9, week_day: 0, course_id: 1, week: 1, month: 1, year: 2021, from: 9, to: 10},
                {id: 10, week_day: 0, course_id: 1, week: 1, month: 1, year: 2021, from: 9, to: 10},
            ],
            timetable: [9,10,11,12,13,14,15,16,17,18,19,20],
            days: {0:"sat", 1:"sun", 2:"mon", 3:"tue", 4:"wed", 5:"thu", 6:"fri"},
            week_number: 1,
            month_number: new Date().getMonth() + 1,
            days_keys: ["sat","sun","mon","tue","wed","thu","fri"]
        }
    },
    created(){
        var d = new Date()
        this.getTimetable();
        this.getWeeknumber(new Date());
    },
    methods:{
        tabWeeks(value, number){
            this.active = value
            this.week_number = number
        },
        changeWeek(e){
            this.month_number = e.target.value
        },
        getTimetable(){
            axios.get(`/course/${this.course_id}/getTimetable`, {
                    params: {
                        weekNumber: this.week_number,
                        monthNumber: this.month_number
                    }
                }).then((res)=>{
                this.lessons = res.data
                this.lessons.forEach(obj => {
                    $(`#${obj.month}-${obj.week}-${this.days_keys[obj.week_day]}-${obj.from}`).append(`<span class="lesson">${(obj.month == this.month_number && obj.week == this.week_number)?obj.name_en:''}</span>`)
                });
            }).catch((err)=>{
                console.log(err)
            })
        },
        convert12hours($time){
            let time= parseInt($time) % 12;
            if(time == 0)return 12
            else return time;
        },
        getWeeknumber(date) {
            // Copy date so don't affect original
            var d = new Date(+date);
            if (isNaN(d)) return;
            // Move to previous Monday
            d.setDate(d.getDate() - d.getDay() + 1);
            // Week number is ceil date/7
            this.week_number = Math.ceil(d.getDate()/7)

            if(this.week_number == 1)
                this.active = 'first_w'
            else if(this.week_number == 2)
                this.active = 'second_w'
            else if(this.week_number == 3)
                this.active = 'third_w'
            else if(this.week_number == 4)
                this.active = 'fourth_w'
        }
    },
    mounted(){
        if (this.locale_lang) {
            this.$lang.setLocale(this.locale_lang);
        } else {
            this.$lang.setLocale('en');
        }
    }
}
</script>
