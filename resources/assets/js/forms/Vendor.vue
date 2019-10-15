<template>
    <div>
        <form @submit.prevent="handleSubmit">

            <div class="form-group">
                <div class="row">

                    <div class="col-xl-6">
                        <label>*Nombre</label>
                        <input v-model.trim="itemData.name"
                               type="text" placeholder="Ingrese El Nombre"
                               class="form-control"
                        >

                        <span v-if="!$v.itemData.name.required"
                              class="form-text text-danger">
                        Le Faltó ingresar el Nombre
                        </span>
                        <span v-if="!$v.itemData.name.maxLength"
                              class="form-text text-danger">
                        Nombre muy larga solo 50 caracteres.
                        </span>
                    </div>
                    <div class="col-xl-6">
                        <label>*Apellidos</label>
                        <input v-model.trim="itemData.lastName"
                               type="text" placeholder="Ingrese Apellido"
                               class="form-control"
                        >

                        <span v-if="!$v.itemData.lastName.required"
                              class="form-text text-danger">
                        Le Faltó ingresar el Apellido
                        </span>
                        <span v-if="!$v.itemData.lastName.maxLength"
                              class="form-text text-danger">
                        Apellido muy larga solo 50 caracteres.
                        </span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">

                    <div class="col-xl-6">
                        <label>*Dni</label>
                        <input v-model.trim="itemData.dni"
                               type="text" placeholder="Ingrese El Dni"
                               class="form-control"
                        >

                        <span v-if="!$v.itemData.dni.required"
                              class="form-text text-danger">
                        Le DNI ingresar el Nombre
                        </span>
                        <span v-if="!$v.itemData.dni.maxLength"
                              class="form-text text-danger">
                        DNI muy larga solo 8 caracteres.
                        </span>
                        <span v-if="!$v.itemData.dni.numeric"
                              class="form-text text-danger">
                        el DNI son numeros
                        </span>
                    </div>
                    <div class="col-xl-6">
                        <label>*Telefono</label>
                        <input v-model.trim="itemData.phone"
                               type="text" placeholder="Ingrese Numero de Telefono"
                               class="form-control"
                        >

                        <span v-if="!$v.itemData.phone.required"
                              class="form-text text-danger">
                        Le Faltó ingresar el Numero de Telefono
                        </span>
                        <span v-if="!$v.itemData.phone.maxLength"
                              class="form-text text-danger">
                        Numero de Telefono muy larga solo 50 caracteres.
                        </span>
                    </div>
                </div>

            </div>

            <div class="form-group">
                <div class="row">

                    <div class="col-xl-7"><label>Observaciones</label>

                        <input v-model.trim="itemData.observation"
                               type="text"
                               placeholder="Ingrese observaciones"
                               class="form-control">

                        <span v-if="!$v.itemData.observation.maxLength"
                              class="form-text text-danger">
                            Observacion muy largo
                        </span>
                    </div>
                    <div class="col-xl-5"><label>*Ciudad</label>

                        <input v-model.trim="itemData.city"
                               type="text"
                               placeholder="Ingrese Ciudad"
                               class="form-control">
                        <span v-if="!$v.itemData.city.required"
                              class="form-text text-danger">
                        Le Faltó ingresar la Ciudad
                        </span>
                        <span v-if="!$v.itemData.city.maxLength"
                              class="form-text text-danger">
                            Ciudad muy largo
                        </span>
                    </div>

                </div>
            </div>
            <div class="form-group">
                <div class="row">

                    <div class="col-xl-5"><label>*Typo</label>

                        <input v-model.trim="itemData.type"
                               type="text"
                               placeholder="Ingrese el Tipo"
                               class="form-control">


                        <span v-if="!$v.itemData.type.maxLength"
                              class="form-text text-danger">
                            Tipo muy largo
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
    import {required, maxLength, numeric} from 'vuelidate/lib/validators';
    import Base from './Base';

    export default {
        name: "Vendor",
        extends: Base,
        data() {
            return {
                itemData: {
                    id: "",
                    name: "",
                    dni: "",
                    lastName: "",
                    phone: "",
                    city: "",
                    observation: "",
                    type: "",

                },
                textBtn: "Operacion",
                isDisabled: false,
                operation: "",
            }
        },
        validations: {
            itemData: {
                name: {
                    required,
                    maxLength: maxLength(100)
                },
                lastName: {
                    required,
                    maxLength: maxLength(100)
                },
                dni: {
                    required,
                    numeric,
                    maxLength: maxLength(8)

                },
                phone: {
                    required,
                    maxLength: maxLength(50)
                },
                city: {
                    required,
                    maxLength: maxLength(50)
                },
                observation: {
                    maxLength: maxLength(50)
                },
                type: {
                    maxLength: maxLength(50)
                }
            }
        },
    }
</script>

<style scoped>

</style>