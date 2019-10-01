<template>
    <div>
        <form @submit.prevent="handleSubmit">
            <h2 v-text="item">{{value}}</h2>
            <h4>---</h4>
            <span v-for="(value, key) in item">{{value}}</span>
            <h4>---</h4>
            <span v-for="(value, key) in categoryData">{{value}}</span>

            <div class="form-group row">
                <label class="col-form-label col-lg-2 font-weight-semibold ">* Nombre</label>
                <div class="col-lg-10">
                    <div class="form-group-feedback form-group-feedback-right">
                        <label>
                            <input id="name" v-model.trim="name" type="text" class="form-control "
                                   placeholder="Nombre">
                        </label>
                    </div>
                    <span v-if="!$v.name.required"  class="form-text text-danger">Le Faltó ingresar el Nombre</span>
                    <span v-if="!$v.name.maxLength"  class="form-text text-danger">Nombre muy largo</span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-lg-2 font-weight-semibold ">* Descripción</label>
                <div class="col-lg-10">
                    <div class="form-group-feedback form-group-feedback-right">
                        <label>
                            <input id="description" v-model.trim="description"  type="text" class="form-control "
                                   placeholder="Descripcion">
                        </label>
                    </div>
                    <span v-if="!$v.description.maxLength"  class="form-text text-danger">Descripcion muy larga</span>
                </div>

            </div>

            <div class="form-group row">
                <label class="col-form-label col-lg-2 font-weight-semibold ">* family_id</label>
                <div class="col-lg-10">
                    <div class="form-group-feedback form-group-feedback-right">
                        <label>
                            <input id="family_id" v-model.trim="family_id"  type="text" class="form-control "
                                   placeholder="family_id">
                        </label>
                    </div>

                </div>

            </div>

            <div class="form-group">
                <button class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
</template>

<script>
    import {required, maxLength} from 'vuelidate/lib/validators';

    export default {
        name: "Category",
        props:["category","item"],
        data() {
            return {
                name: this.item.name,
                description: this.item.description,
                family_id:this.item.family_id,
                submitted: false,
                categoryData:{},

            }
        },
        mounted() {
            console.log("mounted category form");
            console.log(this.item)


        },
        updated(){
            console.log("updated");
        },
        methods: {
            handleSubmit(e) {
                if (this.$v.$invalid) return;

                // if complete
                //this.$emit('onCompleteForm');
            },
            onShowForm(){

                this.categoryData=this.item;
                this.name=this.item.name;
                this.description=this.item.description;
                this.family_id=this.item.family_id;
            }
        },
        validations: {
            name: {
                required,
                maxLength: maxLength(10)
            },
            description:{
                maxLength: maxLength(10)
            }
        },
    }
</script>

<style scoped>

</style>