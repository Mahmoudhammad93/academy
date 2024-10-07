<template>
  <div id="general_settings">
    <form action="" class="forms-sample" @submit.prevent="submitForm()">
      <div class="row">
        <div class="col-md-9">
          <div class="row">
            <div class="form-group col-lg-6 col-md-12 col-sm-12">
              <label for="site_name">Name</label>
              <input
                type="text"
                class="form-control"
                id="site_name"
                name="site_name"
                placeholder="Name"
                v-model="setting.site_name"
              />
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="site_logo">Site Logo</label>
            <input type="file" class="dropify" id="site_logo" name="site_logo" ref="file"/>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
    </form>
  </div>
</template>

<script>
export default {
  props: ["active_class"],
  data(){
    return{
      setting:{},
      file:{}
    }
  },
  methods: {
    submitForm: function(){
      this.file = this.$refs.file.files[0];
      let formData = new FormData();
      formData.append('site_name', this.setting.site_name);
      formData.append('site_logo', this.file);
      axios.post(`store_settings`, formData).then((res) => {
        console.log(res.data)
      })
    }
  },
};
</script>
