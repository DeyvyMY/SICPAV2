<template>
    <div>
        <form @submit.prevent="handleSubmit">

            <div class="form-group">
                <div class="row">

                    <div class="col-xl-6"><label>*Nombre</label>

                        <input v-model.trim="itemData.name"
                               type="text"
                               placeholder="Ingrese Nombre"
                               class="form-control">

                        <span v-if="!$v.itemData.name.required" class="form-text text-danger">Le Faltó ingresar el Nombre</span>
                        <span v-if="!$v.itemData.name.maxLength" class="form-text text-danger">Nombre muy largo</span>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <div class="row">

                    <div class="col-xl-6"><label>*Descripción</label>

                        <input v-model.trim="itemData.description"
                               type="text"
                               placeholder="Ingrese Descripción"
                               class="form-control">

                        <span v-if="!$v.itemData.description.maxLength" class="form-text text-danger">Descripcion muy larga</span>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <div class="row">

                    <div class="col-xl-6"><label>*family_id</label>

                        <input v-model.trim="itemData.family_id"
                               type="text"
                               placeholder="por ejemplo:345432"
                               class="form-control">
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
    import Base from './Base';

    export default {
        name: "Category",
        extends: Base,

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

        validations: {
            itemData:{
                name: {
                    required,
                    maxLength: maxLength(20)
                },
                description: {
                    maxLength: maxLength(50)
                },
            },
        },

    }
</script>

<style scoped>

</style>