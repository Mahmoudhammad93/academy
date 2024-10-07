<template>
  <div id="settings" class="p-5">
    <div class="row">
      <div class="col-md-3">
        <div class="setting-menu">
          <h3 class="head pb-4">System Settings</h3>
          <ul class="list-unstyled p-0">
            <li
              @click="settingTabs('general')"
              :class="active == 'general' ? 'active' : ''"
            >
              General
            </li>
            <li
              @click="settingTabs('home page')"
              :class="active == 'home page' ? 'active' : ''"
            >
              Home Page
            </li>
            <li
              @click="settingTabs('permissions')"
              :class="active == 'permissions' ? 'active' : ''"
            >
              Permissions
            </li>
            <li
              @click="settingTabs('activate')"
              :class="active == 'activate' ? 'active' : ''"
            >
              Activate
            </li>
            <li
              @click="settingTabs('help')"
              :class="active == 'help' ? 'active' : ''"
            >
              Help
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-9">
        <div class="grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">{{ active }}</h4>
              <general_setting :active_class="active" v-if="active == 'general'"></general_setting>
              <user_permissions v-if="active == 'permissions'"></user_permissions>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      active: "general",
    };
  },
  created(){
  },
  methods: {
    settingTabs: function (value) {
      this.active = value;
    }
  },
};
</script>