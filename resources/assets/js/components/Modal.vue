<template>
    <div id="modal_form_vertical" class="modal fade show" tabindex="-1" style="display: block; padding-right: 15px;">
        <div class="modal-dialog " >
            <div class="modal-content">

                <!--  header -->
                <div class="modal-header">

                    <slot name="header">


                    </slot>
                    <button type="button" class="close" v-on:click="close">×</button>
                </div>


                <!-- body -->
                <div class="modal-body">

                    <!--<slot name="body"  >

                    </slot>-->


                    <slot name="body" >

                    </slot>


                </div>

                <!-- footer -->
                <div class="modal-footer">
                    <slot name="footer">

                    </slot>
                </div>

            </div>
        </div>
    </div>
</template>

<script>


    export default {
        name: "modal",
        props: ["error", "title"],
        data: () => {
            return ({});
        },
        methods: {
            close() {
                this.$emit('close');
            },

        },

    }
</script>
