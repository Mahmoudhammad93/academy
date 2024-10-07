<template>
    <div
        class="tab-pane fade active show"
        id="learning-1"
        role="tabpanel"
        aria-labelledby="learning-tab"
    >
        <div class="row toping">
            <div class="col-md-6">
                <h3>
                    {{ $trans("data.Course learning") }}
                </h3>
            </div>
            <div class="col-md-6 share-on">
                <h4>
                    {{ $trans("data.Share") }}
                    <i class=" mdi mdi-share-variant share"></i
                    ><i class="mdi mdi-whatsapp socials"></i
                    ><i class="mdi mdi-facebook socials"></i
                    ><i class="mdi mdi-telegram socials"></i>
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li v-for="ilo in ilos">
                        <i class="mdi mdi-check-circle green-check"></i
                        ><span>{{ilo}}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:[
        'id'
    ],
    data(){
        return{
            ilos:[]
        }
    },
    created(){
        this.getIlos()
    },
    methods:{
        getIlos(){
            axios.get(`/get_ilos/${this.id}`)
            .then((res) => {
                this.ilos = res.data
            })
        }
    }
}
</script>
