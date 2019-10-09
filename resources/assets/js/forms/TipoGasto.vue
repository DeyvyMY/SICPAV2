<template>
    <div>
        <form @submit.prevent="handleSubmit">

            <div class="form-group">
                <div class="row">

                    <div class="col-xl-7">
                        <label>*Descripción</label>
                        <input v-model.trim="itemData.description"
                               type="text" placeholder="Ingrese Descripción"
                               class="form-control"
                        >

                        <span v-if="!$v.itemData.description.required"
                              class="form-text text-danger">
                        Le Faltó ingresar la Descripcion
                        </span>
                        <span v-if="!$v.itemData.description.maxLength"
                              class="form-text text-danger">
                        Descripcion muy larga solo 100 caracteres.
                        </span>
                    </div>

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
        name: "TipoGasto",
        extends: Base,
        data() {
            return {
                itemData: {
                    id: "",
                    description: "",


                },
                textBtn: "Operacion",
                isDisabled: false,
                operation: "",
            }
        },
        validations: {
            itemData: {
                description: {
                    required,
                    maxLength: maxLength(100)
                },
            }
        },
    }
</script>

<style scoped>

</style>