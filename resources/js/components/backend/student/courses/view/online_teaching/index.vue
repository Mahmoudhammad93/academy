<template>
    <div
        class="tab-pane fade"
        id="online-1"
        role="tabpanel"
        aria-labelledby="online-tab"
    >
        <div class="row toping">
            <div class="col-md-6">
                <h3>
                    {{ $trans("data.Online teaching") }}
                </h3>
            </div>
            <div class="col-md-6 share-on">
                <h4>
                    {{ $trans("data.Share")}}
                    <i class=" mdi mdi-share-variant share"></i
                    ><i class="mdi mdi-whatsapp socials"></i
                    ><i class="mdi mdi-facebook socials"></i
                    ><i class="mdi mdi-telegram socials"></i>
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-2 col-md-3 col-sm-12" v-if="data.length > 0">
            </div>
            <empty :storage_path="storage_path" v-else></empty>
        </div>
    </div>
</template>

<script>
export default {
    props:[
        'storage_path'
    ],
    data(){
        return{
            data:[]
        }
    }
}
</script>
