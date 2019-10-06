<template>
    <div>
        <form @submit.prevent="handleSubmit">


            <div class="form-group row">
                <label class="col-form-label col-lg-2 font-weight-semibold ">* Nombre</label>
                <div class="col-lg-10">
                    <div class="form-group-feedback form-group-feedback-right">
                        <label>
                            <input id="categoryData.name" v-model.trim="itemData.name" type="text" class="form-control "
                                   placeholder="Nombre">
                        </label>
                    </div>
                    <span v-if="!$v.itemData.name.required" class="form-text text-danger">Le Faltó ingresar el Nombre</span>
                    <span v-if="!$v.itemData.name.maxLength" class="form-text text-danger">Nombre muy largo</span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-lg-2 font-weight-semibold ">* Descripción</label>
                <div class="col-lg-10">
                    <div class="form-group-feedback form-group-feedback-right">
                        <label>
                            <input id="categoryData.description" v-model.trim="itemData.description" type="text" class="form-control "
                                   placeholder="Descripcion">
                        </label>
                    </div>
                    <span v-if="!$v.itemData.description.maxLength" class="form-text text-danger">Descripcion muy larga</span>
                </div>

            </div>

            <div class="form-group row">
                <label class="col-form-label col-lg-2 font-weight-semibold ">* family_id</label>
                <div class="col-lg-10">
                    <div class="form-group-feedback form-group-feedback-right">
                        <label>
                            <input id="family_id" v-model.trim="itemData.family_id" type="text" class="form-control "
                                   placeholder="family_id">
                        </label>
                    </div>

                </div>

            </div>

            <div class="form-group">

                <button  :disabled='!isDisabled' v-on:click="handleSubmit" type="button" class="btn bg-teal-400 ml-2" id="spinner-dark-2">
                    <i v-show="!isDisabled"  class="icon-spinner2 spinner mr-2"></i>
                    {{textBtn}}
                </button>
            </div>
        </form>
    </div>
</template>

<script>
    import {required, maxLength} from 'vuelidate/lib/validators';
    const qs = require('querystring');
    export default {
        name: "Category",
        props: [
            "item",
            'on',
            'actions'
        ],
        data() {
            return {
                itemData: {
                    id:"",
                    name: "",
                    description: "",
                    family_id: "",
                },
                textBtn:"Operacion",
                isDisabled:false,
                operation:"",
            }
        },
        mounted() {
            console.log("mounted category form");
        },
        created() {
            console.log("created");
            //this.$parent.$on('onShowForm', this.onShowForm);
            //CRUD
            this.on("addItem", ()=> {
                this.setButtonText("Guardar");
                this.activeForm(true);
                this.operation="ADD";
                this.clearForm();
            });
            this.on("updateItem", (item)=> {
                this.setButtonText("Guardar Cambios");
                this.activeForm(true);
                this.fillForm(item)
                this.operation="UPDATE";
            });
            this.on("completeOperation",(isSuccess)=>{
                this.activeForm(true);
                if(isSuccess){
                    //clear form
                    this.clearForm();
                }
            })
        },
        methods: {
            handleSubmit(e) {
                if (this.$v.$invalid) return;

                this.activeForm(false);
                let itemStringify=qs.stringify(this.itemData);
                this.actions.crudOperation(this.itemData.id,itemStringify,this.operation);

                /*switch (this.operation) {
                    case "ADD":
                        this.actions.crudOperation(itemStringify);
                        break;
                    case "UPDATE":
                        this.actions.update(this.itemData.id,itemStringify);
                        break;
                    case "DELETE":
                        break;

                }*/
            },

            setButtonText(text){
                this.textBtn=text;
            },
            activeForm(isActive){
                this.isDisabled=isActive;
            },
            clearForm(){
                console.log("clearForm");
                console.log(this.itemData);
                let keys=Object.keys(this.itemData);
                keys.forEach((k)=>{
                    this.itemData[k]="";
                });
                /*for(let i=0;i<keys.length;i++){
                    console.log(keys[i]);
                    this.itemData[keys[i]]="";
                }*/
            },
            fillForm(item){
                Object.keys(this.itemData).forEach((keyForm)=>{
                    this.itemData[keyForm]=item[keyForm];
                });
            }

        },
        validations: {
            itemData:{
                name: {
                    required,
                    maxLength: maxLength(10)
                },
                description: {
                    maxLength: maxLength(10)
                },
            },
        },

    }
</script>

<style scoped>

</style>