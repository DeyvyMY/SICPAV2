<template>
    
</template>

<script>

    const qs = require('querystring');

    export default {
        name: "base",
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
                },
                textBtn:"Operacion",
                isDisabled:false,
                operation:"",
            }
        },
        created() {
            console.log("created Base Form");
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
                this.fillForm(item);
                this.operation="UPDATE";
            });
            this.on("deleteItem", (item)=> {
                this.setButtonText("Eliminar");
                this.activeForm(true);
                this.fillForm(item);
                this.operation="DELETE";
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

            },
            fillForm(item){
                Object.keys(this.itemData).forEach((keyForm)=>{
                    this.itemData[keyForm]=item[keyForm];
                });
            }

        },
        validations:{},

    }

</script>

<style scoped>

</style>