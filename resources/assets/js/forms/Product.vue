<template>
    <div>
        <form @submit.prevent="handleSubmit">

            <div class="form-group">
                <div class="row">

                    <div class="col-xl-5"><label>*Codigo</label>

                        <input v-model.trim="itemData.code"
                               type="text"
                               placeholder="Ingrese codigo"
                               class="form-control">
                        <span v-if="!$v.itemData.code.required"
                              class="form-text text-danger">
                        Por favor ingrese el codigo de producto
                        </span>
                        <span v-if="!$v.itemData.code.maxLength" class="form-text text-danger">
                        codigo muy largo
                        </span>
                    </div>

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


            <div class="form-group row">
                <label class="col-form-label col-lg-2 font-weight-semibold ">*Observación
                </label>
                <div class="col-lg-10">

                    <div class="form-group-feedback form-group-feedback-right">
                        <label>
                            <input id="categoryData.observation" v-model.trim="itemData.observation" type="text"
                                   class="form-control "
                                   placeholder="Observación
">
                        </label>
                    </div>
                    <span v-if="!$v.itemData.observation.required"
                          class="form-text text-danger">
                        Por favor ingrese la Observación
                    </span>
                    <span v-if="!$v.itemData.observation.maxLength" class="form-text text-danger">
                        Observación muy largo
                    </span>
                </div>
            </div>


            <div class="form-group row">

                <div class="col-xl-5">
                    <label>*Es Exonerado de IGV ?
                    </label>
                    <input v-model.trim="itemData.hasIgv" type="checkbox" class="form-control ">

                    <span v-if="!$v.itemData.hasIgv.required"
                          class="form-text text-danger">
                        Por favor IGV
                    </span>
                </div>
            </div>

            <div class="form-group row">
                <div class="row">
                    <div class="col-xl-6">
                        <label>*Categoria
                        </label>

                        <label>
                            <cool-select v-model="itemData.category_id"
                                         :items="categories"
                                         placeholder="Seleciona Categoria"
                                         item-text="name"
                                            item-value="id">
                            </cool-select>
                        </label>

                        <span v-if="!$v.itemData.category_id.required"
                              class="form-text text-danger">
                        Tiene que tener una categoria.
                        </span>
                    </div>

                    <div class="col-xl-6">
                        <label>*Unidad de Medida</label>
                        <label>
                            <cool-select
                                    v-model="itemData.unitMeasure_id"
                                    :items="unitMeasures"
                                    item-text="abbreviation"
                                    item-value="id"
                                    placeholder="Seleciona Unidad de Medida"
                            >
                            </cool-select>
                        </label>

                        <span v-if="!$v.itemData.unitMeasure_id.required"
                              class="form-text text-danger">
                            Por favor Seleccione la Unidad de Medida
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
    import {CoolSelect} from 'vue-cool-select'

    export default {
        name: "product",
        extends: Base,
        components: {CoolSelect},
        props: ["categories", "unitMeasures"],
        data() {
            return {
                itemData: {
                    id: "",
                    description: "",
                    code: "",
                    observation: "",
                    hasIgv: false,
                    category_id: 0,
                    unitMeasure_id: 0,

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
                code: {
                    required,
                    maxLength: maxLength(10)
                },
                observation: {
                    required,
                    maxLength: maxLength(100)
                },
                hasIgv: {
                    required,
                },
                category_id: {
                    required
                }
                ,
                unitMeasure_id: {
                    required
                },

            },
        },
    }
</script>

<style scoped>

</style>