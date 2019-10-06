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
                    <span v-if="!$v.itemData.name.required"
                          class="form-text text-danger">Le Faltó ingresar el Nombre</span>
                    <span v-if="!$v.itemData.name.maxLength" class="form-text text-danger">Nombre muy largo</span>
                </div>
            </div>

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
                    <span v-if="!$v.itemData.description.maxLength"
                          class="form-text text-danger">Descripcion muy larga</span>
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
                    name: "",
                    description:"",
                },
                textBtn:"Operacion",
                isDisabled:false,
                operation:"",
            }
        },
        validations: {
            itemData: {
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