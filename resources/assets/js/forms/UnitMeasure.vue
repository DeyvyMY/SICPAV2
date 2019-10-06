<template>
    <div>
        <form @submit.prevent="handleSubmit">

            <div class="form-group row">
                <label class="col-form-label col-lg-2 font-weight-semibold ">* Descripción</label>
                <div class="col-lg-10">
                    <div class="form-group-feedback form-group-feedback-right">
                        <label>
                            <input id="categoryData.description" v-model.trim="itemData.description" type="text"
                                   class="form-control "
                                   placeholder="Descripcion">
                        </label>
                    </div>
                    <span v-if="!$v.itemData.description.required"
                          class="form-text text-danger">
                        Le Faltó ingresar la Descripcion
                    </span>
                    <span v-if="!$v.itemData.description.maxLength"
                          class="form-text text-danger">
                        Descripcion muy larga
                    </span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-lg-2 font-weight-semibold ">* Abreviatura</label>
                <div class="col-lg-10">
                    <div class="form-group-feedback form-group-feedback-right">
                        <label>
                            <input id="categoryData.name" v-model.trim="itemData.abbreviation" type="text" class="form-control "
                                   placeholder="Abreviatura">
                        </label>
                    </div>
                    <span v-if="!$v.itemData.abbreviation.required"
                          class="form-text text-danger">
                        Le Faltó ingresar la Abreviatura
                    </span>
                    <span v-if="!$v.itemData.abbreviation.maxLength" class="form-text text-danger">
                        Abreviatura muy largo
                    </span>
                </div>
            </div>





            <div class="form-group">

                <button :disabled='!isDisabled' v-on:click="handleSubmit" type="button" class="btn bg-teal-400 ml-2"
                        id="spinner-dark-2">
                    <i v-show="!isDisabled" class="icon-spinner2 spinner mr-2"></i>
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
        name: "unitProduct",
        extends: Base,
        data() {
            return {
                itemData: {
                    id:"",
                    description: "",
                    abbreviation:"",
                },
                textBtn:"Operacion",
                isDisabled:false,
                operation:"",
            }
        },
        validations: {
            itemData: {
                description: {
                    required,
                    maxLength: maxLength(40)
                },
                abbreviation: {
                    required,
                    maxLength: maxLength(10)
                },
            },
        },
    }
</script>

<style scoped>

</style>