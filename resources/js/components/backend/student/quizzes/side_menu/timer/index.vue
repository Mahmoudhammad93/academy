<template>
  <div class="time-status">

    <h2>{{$trans('data.Time Status')}}</h2>
    <div id="clockdiv">
      <div>
        <span id="hours"  class="hoursd">{{hours}}</span>
        <div class="smalltext">{{$trans('data.Hours')}}</div>
      </div>
      <div>
        <span id="mins" class="minutdes">{{minutes}}</span>
        <div class="smalltext">{{$trans('data.Minutes')}}</div>
      </div>
      <div>
        <span id="seconds"  class="secondds">{{seconds}}</span>
        <div class="smalltext">{{$trans('data.Seconds')}}</div>
      </div>
    </div>
    <h4 class="total-time">
      <!-- <span> {{_('Total Time')}} </span>
      <span class="pull-right">{{total_time}}<span id="seconds" class="secondds"></span></span> -->
    </h4>
  </div>
</template>

<script>
export default {
  props:['question','timer','exam_id'],
  data() {
    return {
    timer: 0,
      hours: 0,
      minutes: 0,
      seconds: 1,
      quiz_timer: 0,
      total_time:null,
    };
  },
  created() {
  },
  mounted(){
    this.getTimer();
     if (this.locale_lang) {
            this.$lang.setLocale(this.locale_lang);
        } else {
            this.$lang.setLocale('en');
        }
  },
  methods: {
    start(t) {
      // console.log(t);
      setTimeout(()=>{
        // alert("done")
        document.querySelector('.finish').click();
      },t);
      setInterval(()=>{
        this.checkTime();
      },1000)
    },
    convertToTime(t){
      this.hours = parseInt(this.time / 60, 10);
      this.minutes = parseInt( this.time % 60, 10);
    },
    convertToMinutes(){
      return (this.minutes + this.hours*60 + this.seconds/60)*60*1000;
    },

    checkTime: function checkTime() {
      if (this.seconds == 0) {
        if (this.hours <= 0 && this.minutes <= 0) {
          return;
        }

        this.minutes -= 1;
        this.seconds = 59;
      }

      if (this.minutes == 0) {
        if (this.hours > 0) {
          this.hours -= 1;
          this.minutes = 59;
          this.seconds = 59;
        }
      }

      this.seconds -= 1;
    },
    getTimer(){
        this.time = this.timer;
        this.convertToTime(this.time);
        this.start(parseInt(this.time * 60 * 1000, 10));
        this.total_time = '0' + this.hours + ' Hour(s) : ' + this.minutes + ' Minutes';
    },
  }
}
</script>
