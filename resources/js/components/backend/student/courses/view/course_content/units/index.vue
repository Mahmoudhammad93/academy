<template>
    <div class="card-header" role="tab" :id="`heading-${unit.id}`">
        <h6 class="mb-0">
            <a
                class="accordion-icon-before"
                aria-expanded="false"
                :aria-controls="`collapse-${unit.id}`"
            >
                <span
                    class="btn btn-inverse-success btn-fw btn_plus"
                    @click="openTab()"
                    ><i
                        class="mdi change-input"
                        :class="open ? 'mdi-minus' : 'mdi-plus'"
                    ></i
                ></span>
                {{ locale_lang == "ar" ? unit.name_ar : unit.name_en }}
            </a>
        </h6>
    </div>
</template>

<script>
export default {
    props:[
        'unit',
        'locale_lang'
    ],
    data(){
        return{
            open: false
        }
    },
    methods:{
        openTab(){
            this.open =! this.open
        }
    }
}
</script>
