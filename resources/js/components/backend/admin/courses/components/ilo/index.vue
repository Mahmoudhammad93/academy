<template>
  <div class="form-group">
    <div class="row">
        <div class="col-md-12 ilos_list">
            <label for="ilo">{{$trans('data.Ilos')}}</label>
            <div class="row mt-4 ilos ilo" v-if="ilos.length <= 0">
                <div class="col-md-12">
                    <input
                        id="ilo_input_1"
                        type="text"
                        class="form-control ilo"
                        data-value="1"
                        name="ilos[]"
                    />
                </div>
            </div>
            <div v-else v-for="(ilo, index) in ilos" :class="`row mt-4 ilos ilo_${index+1}`">
                <div class="col-md-11">
                    <input :id="`ilo_input_${index+1}`" type="text" class="form-control ilo" :data-value="index+1" name="ilos[]" :value="ilo"/>
                </div>
                <div class="col-md-1">
                    <a href="" class="btn btn-danger delete_ilo" :data="index+1">
                        <i class="fa fa-trash"></i>
                    </a>
                </div>
            </div>
            
        </div>
        <div class="col-md-12 mt-4">
            <a href="" @click.prevent="addNew()">+ {{$trans('data.Add')}}</a>
        </div>
    </div>
  </div>
</template>

<script>
import $ from "jquery";
export default {
    props:[
        'id'
    ],
    data(){
        return{
            ilos: []
        }
    },
    mounted(){
        this.$lang.setLocale(localStorage.getItem('locale'));
    },
    created(){
        this.getIlos()
    },
    methods:{
        addNew: function(){
            let iterator = parseInt($('.ilos').last().children('div').children('input').attr('data-value'));
            let count = $('.ilos').length;
            if(count <= 0){
                let html = ` 
                <div class="row mt-4 ilos ilo_1">
                    <div class="col-md-11">
                        <input id="ilo_input_1" type="text" data-value="1" class="form-control ilo" name="ilos[]"/>
                    </div>
                    <div class="col-md-1">
                        <a href="" class="btn btn-danger delete_ilo" data="1">
                            <i class="fa fa-trash"></i>
                        </a>
                    </div>
                </div>`;
                $('.ilos_list').append(html)
            }else{
                let html = ` 
                <div class="row mt-4 ilos ilo_${iterator+1}">
                    <div class="col-md-11">
                        <input id="ilo_input_${iterator+1}" type="text" data-value="${iterator+1}" class="form-control ilo" name="ilos[]"/>
                    </div>
                    <div class="col-md-1">
                        <a href="" class="btn btn-danger delete_ilo" data="${iterator+1}">
                            <i class="fa fa-trash"></i>
                        </a>
                    </div>
                </div>`;
            $('.ilos_list').append(html)
            }
        },
        getIlos(){
            axios.get(`/get_ilos/${this.id}`)
            .then((res) => {
                // console.log(res.data)
                this.ilos = res.data
            })
        }
    }
}
</script>
