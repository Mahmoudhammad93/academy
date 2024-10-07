<template>
    <div
        class="tab-pane fade"
        id="teacher-1"
        role="tabpanel"
        aria-labelledby="teacher-tab"
    >
        <div class="row toping">
            <h3>{{ $trans("data.Teacher") }}</h3>
        </div>
        <div class="row">
            <div class="col-xl-2 col-md-3 col-sm-12" v-if="teacher !== null">
                <div class="helpers-img-holder">
                    <img
                        class="teacher-pic"
                        :src="`${storage_path}/${teacher.image}`"
                    />
                </div>
            </div>
            <div class="col-xl-10 col-md-9 col-sm-12">
                <div v-if="teacher !== null">
                    <h4>
                        {{teacher.name}}
                        <i class="mdi mdi-whatsapp socials"></i
                        ><i class="mdi mdi-facebook socials"></i
                        ><i class="mdi mdi-telegram socials"></i>
                    </h4>
                    <hr />
                    <p>
                        {{teacher.description}}
                    </p>
                </div>
                <hr />
                <div class="row helpers">
                    <div class="col-md-4 col-sm-12" v-for="assesstant in assesstants">
                        <div class="helpers-img-holder">
                            <img :src="`${storage_path}/${assesstant.image}`" />
                        </div>
                        <h4>{{assesstant.name}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:['storage_path','teacher','assesstants']
}
</script>
