<template>
    <div id="modal_form_horizontal" class="modal fade show" tabindex="-1" style="display: block; padding-right: 15px;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Horizontal form</h5>
                    <button type="button" class="close" v-on:click="close" >×</button>
                </div>
                <div class="modal-body" v-html="form">
                </div>
                <slot name="header">
                </slot>

                <slot name="body">
                </slot>

                <slot name="footer">
                </slot>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        name:"modal",
        props:["item","formURL"],
        data:()=>{
            return({
                form:'<i class="icon-spinner2 spinner"></i>'

            });
        },
        mounted() {

            if(this.formURL){
                axios
                    .get('formURL')
                    .then((response) => {
                        form='+response+'
                    })
            }
        },
        methods: {
            close() {
                this.$emit('close');
            },
        },

    }
</script>
