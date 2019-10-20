<template>
    <div>
        <form @submit.prevent="handleSubmit">

            <div class="form-group">
                <div class="row">

                    <div class="col-xl-6">
                        <label>*Nombre</label>
                        <input v-model.trim="itemData.number"
                               type="text" placeholder="Ingrese El Numero"
                               class="form-control"
                        >

                        <span v-if="!$v.itemData.number.required"
                              class="form-text text-danger">
                        Le Faltó ingresar el Numero
                        </span>
                        <span v-if="!$v.itemData.number.maxLength"
                              class="form-text text-danger">
                        Numero muy  larga solo 50 caracteres.
                        </span>
                    </div>

                    <!--ENTITY provider-->
                    <div class="col-xl-6">
                        <label>*Proveedor
                        </label>

                        <label>
                            <cool-select v-model="itemData.entity_id"
                                         :items="entities"
                                         placeholder="Seleciona El Proveedor"
                                         item-text="ent_rz"
                                         item-value="ent_id">
                            </cool-select>
                        </label>

                        <span v-if="!$v.itemData.entity_id.required"
                              class="form-text text-danger">
                        Tiene que Haber Un Proveedor.
                        </span>
                    </div>

                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-xl-6">
                        <label>*Tipo
                        </label>

                        <label>
                            <cool-select v-model="itemData.type"
                                         :items="types"
                                         placeholder="Seleciona El tipo"
                                         item-text="description"
                                         item-value="id">
                            </cool-select>
                        </label>

                        <span v-if="!$v.itemData.type.required"
                              class="form-text text-danger">
                        Tiene ser de Un Tipo.
                        </span>
                    </div>

                    <div class="col-xl-6">
                        <label>*Fecha</label>
                        <!--<input v-model.trim="itemData.date"
                               type="text" placeholder="Ingrese Numero de Telefono"
                               class="form-control"
                        >-->
                        <div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar22"></i></span>
										</span>
                            <input v-model.trim="itemData.date"  type="text" class="form-control daterange-single" placeholder="03/18/2013">
                        </div>

                        <span v-if="!$v.itemData.date.required"
                              class="form-text text-danger">
                        Le Faltó ingresarLa Fecha
                        </span>

                    </div>
                </div>

            </div>

            <div class="form-group">
                <div class="row">

                    <div class="col-xl-7"><label>Guia De Remisión</label>
                        <input v-model.trim="itemData.guide"
                               type="text"
                               placeholder="Ingrese observaciones"
                               class="form-control">

                        <span v-if="!$v.itemData.guide.maxLength"
                              class="form-text text-danger">
                            Observacion muy largo
                        </span>
                    </div>
                    <div class="col-xl-6">
                        <label>*Vendedor
                        </label>

                        <label>
                            <cool-select v-model="itemData.vendor_id"
                                         :items="vendors"
                                         placeholder="Seleciona Vendedor"
                                         item-text="name"
                                         item-value="id">
                            </cool-select>
                        </label>

                        <span v-if="!$v.itemData.vendor_id.required"
                              class="form-text text-danger">
                        Tiene ser haber Un Vendedor.
                        </span>
                    </div>

                </div>
            </div>
            <div class="form-group">
                <div class="row">

                    <div class="col-xl-5"><label>*Condición</label>

                        <input v-model.trim="itemData.condition"
                               type="text"
                               placeholder="Ingrese la condition"
                               class="form-control">


                        <span v-if="!$v.itemData.condition.maxLength"
                              class="form-text text-danger">
                            Condición muy largo
                        </span>
                    </div>
                    <div class="col-xl-5"><label>*Moneda</label>

                        <input v-model.trim="itemData.exchangeRate"
                               type="text"
                               placeholder="Ingrese la Moneda"
                               class="form-control">


                        <span v-if="!$v.itemData.exchangeRate.maxLength"
                              class="form-text text-danger">
                            Moneda muy largo
                        </span>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <div class="row">

                    <div class="col-xl-5"><label>*Fecha De Pago O Deposito</label>

<!--                        <input v-model.trim="itemData.paymentDate"-->
<!--                               type="text"-->
<!--                               placeholder="Ingrese la condition"-->
<!--                               class="form-control">-->
                        <div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar22"></i></span>
										</span>
                            <input v-model.trim="itemData.paymentDate"  type="text" class="form-control daterange-single" placeholder="03/18/2013">
                        </div>


                    </div>
                    <div class="col-xl-5"><label>*Tipo de Cambio</label>

                        <input
                               type="text"
                               placeholder="Tipo de Cambio"
                               class="form-control">

                    </div>

                </div>
            </div>
            <div class="form-group">
                <div class="row">

                    <div class="col-xl-4"><label>*Entidad Bancaria</label>

                        <input v-model.trim="itemData.bank"
                               type="text"
                               placeholder="Ingrese la condition"
                               class="form-control">



                    </div>
                    <div class="col-xl-4"><label>*Numero de Operacion</label>

                        <input v-model.trim="itemData.numOperation"
                                type="text"
                                placeholder="Tipo de Cambio"
                                class="form-control">

                    </div>
                    <div class="col-xl-4"><label>*Monto</label>

                        <input v-model.trim="itemData.total"
                               type="text"
                               placeholder="Tipo de Cambio"
                               class="form-control">

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
    import Base from '../Base';
    import {CoolSelect} from 'vue-cool-select'

    export default {
        name: "Buy",
        components: {CoolSelect},
        props: ["entities", "vendors","types"],
        extends: Base,
        data() {
            return {
                itemData: {
                    id: "",
                    number: "",
                    entity_id: "",
                    lastName: "",
                    type: "",
                    date: "",
                    guide: "",
                    vendor_id: "",

                    condition:"",
                    exchangeRate:"",
                    paymentDate:"",
                    bank:"",
                    numOperation:"",
                    total:"",
                },
                textBtn: "Operacion",
                isDisabled: false,
                operation: "",
            }
        },
        validations: {
            itemData: {
                number: {
                    required,
                    maxLength: maxLength(20)
                },
                lastName: {
                    required,
                    maxLength: maxLength(100)
                },
                entity_id: {
                    required,
                },
                type: {
                    required,
                    maxLength: maxLength(50)
                },
                date: {
                    required,
                    maxLength: maxLength(50)
                },
                guide: {
                    maxLength: maxLength(50)
                },
                vendor_id: {
                    required,
                }
            }
        },
    }
</script>

<style scoped>

</style>