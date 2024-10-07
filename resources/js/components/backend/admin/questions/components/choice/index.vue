<template>
  <div id="questions">
    <form>
      <div class="form-row">
        <input
          type="hidden"
          v-model="bank_id"
          class="form-control"
          id="bank_id"
        />
        <div class="form-group col-md-6">
          <label for="Title">{{ $trans("data.Title") }}</label>
          <input
            v-model="questionObj.title"
            type="text"
            class="form-control"
            id="Title"
          />
        </div>
        <div class="form-group col-md-6">
          <label for="mark">{{ $trans("data.Mark") }}</label>
          <input
            v-model="questionObj.mark"
            type="number"
            class="form-control"
            id="mark"
          />
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="option1">{{ $trans("data.Option") }}</label>
          <input
            v-model="questionObj.options[0]"
            type="text"
            class="form-control"
            id="option1"
          />
        </div>
        <div class="form-group col-md-6">
          <label for="option2">{{ $trans("data.Option") }}</label>
          <input
            v-model="questionObj.options[1]"
            type="text"
            class="form-control"
            id="option2"
          />
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="option3">{{ $trans("data.Option") }}</label>
          <input
            v-model="questionObj.options[2]"
            type="text"
            class="form-control"
            id="option3"
          />
        </div>
        <div class="form-group col-md-6">
          <label for="option4">{{ $trans("data.Option") }}</label>
          <input
            v-model="questionObj.options[3]"
            type="text"
            class="form-control"
            id="option4"
          />
        </div>
      </div>

      <div class="form-group">
          <label for="pic">{{$trans("data.Upload Image")}}</label>
        <input class="custom-upload_file" name="pic" type="file" ref="image" @change="imageUpload" />
      </div>

      <div class="form-row">
        <div class="col-lg-3 col-md-6 my-1">
          <label class="mr-sm-2" for="inlineFormCustomSelect">{{
            $trans("data.Answer")
          }}</label>
          <select
            v-model="questionObj.answer"
            class="custom-select mr-sm-2"
            id="inlineFormCustomSelect"
          >
            <option v-for="answer in questionObj.options">
              {{ answer }}
            </option>
          </select>
        </div>
        <div class="col-lg-3 col-md-6 my-1">
          <label class="mr-sm-2" for="level">{{ $trans("data.level") }}</label>
          <select
            v-model="questionObj.level"
            class="custom-select mr-sm-2"
            id="level"
          >
            <option v-for="level in levels">
              {{ level }}
            </option>
          </select>
        </div>
        <div class="col-lg-3 col-md-6 my-1">
          <label class="mr-sm-2" for="curriculums">{{
            $trans("data.Curriculum")
          }}</label>
          <select
            @change="getUnits"
            v-model="questionObj.curriculum_id"
            class="custom-select mr-sm-2"
            id="curriculums"
          >
            <option v-for="curriculum in curriculums" :value="curriculum.id">
              {{ curriculum.name_en }}
            </option>
          </select>
        </div>

        <div class="col-lg-3 col-md-6 mb-3 my-1">
          <label class="mr-sm-2" for="units">{{ $trans("data.Unit") }}</label>
          <select
            v-model="questionObj.unit_id"
            class="custom-select mr-sm-2"
            id="units"
            @change="getLessons()"
          >
            <option v-for="unit in units" :value="unit.id">
              {{ unit.name_en }}
            </option>
          </select>
        </div>
        <div class="col-lg-3 col-md-6 mb-3 my-1">
          <label class="mr-sm-2" for="lessons">{{ $trans("data.Lesson") }}</label>
          <select
            v-model="questionObj.lesson_id"
            class="custom-select mr-sm-2"
            id="lessons"
          >
            <option v-for="lesson in lessons" :value="lesson.id">
              {{ lesson.name }}
            </option>
          </select>
        </div>
      </div>

      <button @click="formSubmit" class="btn btn-primary mb-3">
        {{ $trans("data.Add") }}
      </button>

    </form>
  </div>
</template>

<script>
import Question from "./Question";
export default {
  props: ["bank_id", "course_id", "curriculums"],
  data() {
    return {
      errors: [],
      questionObj: new Question(this.bank_id),
      question_type: "choice",
      levels: ["easy", "medium", "hard"],
      image: null,
      units: [],
      lessons: [],
    };
  },
  methods: {
    imageUpload(e) {
      this.image = e.target.files[0];
    },
    validateObj: function () {
      let err = [];
      this.questionObj.type = "choice";
      this.questionObj.bank_id = this.bank_id;
      if (!(this.questionObj.title.length > 5))
        err.push(`${this.$trans("Title Must Be More Than 5 Char")}`);
      if (!(this.questionObj.mark > 0))
        err.push(
          `${this.$trans("Mark Must Be Greater Than 0")}  ${this.$trans(
            "required"
          )}`
        );
      if (!this.questionObj.answer)
        err.push(`${this.$trans("Answer")}  ${this.$trans("required")}`);
      if (!this.questionObj.level)
        err.push(`${this.$trans("Level")}  ${this.$trans("required")}`);
      if (!this.questionObj.type)
        err.push(`${this.$trans("Type")}  ${this.$trans("required")}`);
      if (!this.questionObj.bank_id)
        err.push(`${this.$trans("Bank")}  ${this.$trans("required")}`);
      if (!this.questionObj.unit_id)
        err.push(`${this.$trans("Unit")}  ${this.$trans("required")}`);
      if (!this.questionObj.options[0])
        err.push(`${this.$trans("Option")}  ${this.$trans("required")}`);
      if (!this.questionObj.options[1])
        err.push(`${this.$trans("Option")}  ${this.$trans("required")}`);
      if (!this.questionObj.options[2])
        err.push(`${this.$trans("Option")}  ${this.$trans("required")}`);
      if (!this.questionObj.options[3])
        err.push(`${this.$trans("Option")}  ${this.$trans("required")}`);
      if (!this.questionObj.curriculum_id)
        err.push(`${this.$trans("Curriculum")}  ${this.$trans("required")}`);
      if (!this.questionObj.lesson_id)
        err.push(`${this.$trans("Lesson")}  ${this.$trans("required")}`);
      if (err.length > 0) {
        this.errors = err;
        return false;
      }
      return true;
    },

    formSubmit(e) {
      e.preventDefault();
      if (!this.validateObj()) {
        this.errors.forEach(function (err) {
          Vue.$toast.error(err, {
            position: "bottom-right",
          });
        });
      } else {
        const config = {
          headers: {
            "content-type": "multipart/form-data",
          },
        };

        let data = new FormData();
        data.append("image", this.image);
        data.append("title", this.questionObj.title);
        data.append("mark", this.questionObj.mark);
        data.append("answer", this.questionObj.answer);
        data.append("has_image", this.questionObj.has_image);
        data.append("level", this.questionObj.level);
        data.append("type", this.questionObj.type);
        data.append("bank_id", this.questionObj.bank_id);
        data.append("options", JSON.stringify(this.questionObj.options));
        data.append("type", "choice");
        data.append("curriculum_id", this.questionObj.curriculum_id);
        data.append("unit_id", this.questionObj.unit_id);
        data.append("lesson_id", this.questionObj.lesson_id);

        if (this.image) {
          data.append("has_image", 1);
          this.image = null;
          this.$refs.image.value = null;
        }

        axios
          .post(
            `/courses/${this.course_id}/banks/${this.bank_id}/questions/store`,
            data,
            config
          )
          .then((res) => {
            Vue.$toast.success("Done", {
              position: "bottom-right",
            });
            this.questionObj = new Question(this.bank_id);
          })
          .catch(function (err) {
            console.log(err);
            Vue.$toast.error("validation error", {
              position: "bottom-right",
            });
          });
      }
    },

    getUnits: function () {
      axios
        .get(
          `/api/courses/${this.course_id}/curriculums/${this.questionObj.curriculum_id}/units`
        )
        .then((res) => {
          this.units = res.data;
          this.lessons = []
          this.questionObj.unit_id=null;
        });
    },

    getLessons: function(){
        axios
        .get(
          `/api/courses/${this.course_id}/curriculums/${this.questionObj.curriculum_id}/units/${this.questionObj.unit_id}/lessons`
        )
        .then((res) => {
          this.lessons = res.data;
        });
    },
  },
  mounted(){
            this.$lang.setLocale(localStorage["locale"]);
    }
};
</script>
